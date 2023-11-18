<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->bigIncrements('cui_pasaporte');
            $table->string('nombres_completos',255)->nullable();
            $table->string('apellidos_completos',255)->nullable();
            $table->bigInteger('nov')->nullable();
            $table->string('correo',255)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('sexo',45)->nullable();
            $table->string('pueblo',45)->nullable();
            $table->string('estado_civil',45)->nullable();
            $table->string('direccion',255)->nullable();
            $table->string('establecimiento',355)->nullable();
            $table->string('mano_escribe',20)->nullable();
            $table->string('discapacidad',255)->nullable();
            $table->integer('celular')->nullable(); 
            $table->integer('telefono_casa')->nullable(); 
            $table->string('drive_dpi',455)->nullable();
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
        Schema::dropIfExists('estudiante');
    }
}
