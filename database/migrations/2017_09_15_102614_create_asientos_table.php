<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asientos', function (Blueprint $table) {
            $table->increments('idAsiento');
            $table->integer('numeroAsiento');
            $table->integer('id_Cliente')->unsigned();
            $table->integer('id_Bus')->unsigned();

            $table->timestamps();
        });

        Schema::table('asientos', function (Blueprint $table) {
            
            $table->foreign('id_Cliente')->references('idCliente')->on('clientes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_Bus')->references('idBus')->on('buses')->onUpdate('cascade')->onDelete('cascade');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asientos');
    }
}
