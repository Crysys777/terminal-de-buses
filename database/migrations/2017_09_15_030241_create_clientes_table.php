<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('idCliente');
            $table->string('primerNombre');
            $table->string('segundoNombre')->nullable();
            $table->string('primerApellido');
            $table->string('segundoApellido')->nullable();
            $table->integer('telefono');
            $table->integer('ciPasaporte');
            $table->enum('lugarCi', ['Santa Cruz', 'La Paz', 'Cochabamba','Beni', 'Tarija', 'Oruro'. 'Chuquisaca', 'Potosi', 'Pando', 'Extranjero']);
            $table->enum('sexo', ['Masculino', 'Femenino', 'Otro']);
            $table->date('fechaNacimiento');
            $table->string('nacionalidad');
            $table->binary('foto');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
