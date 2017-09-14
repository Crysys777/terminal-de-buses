<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('idBus');
            $table->string('matricula');
            $table->integer('cantidadAsiento');
            $table->integer('cantidadPiso');
            $table->integer('numeroCarril');
            $table->text('observacion');
            $table->string('fotoInterna');
            $table->string('fotoExterna');
            $table->timestamps();
            $table->integer('id_Empresa')->unsigned();
            
            

        });

        Schema::table('buses', function (Blueprint $table) {
            
            $table->foreign('id_Empresa')->references('idEmpresa')->on('empresas')->onUpdate('cascade');

           
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
}
