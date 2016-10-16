<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('estatus');
            //$table->date('fBaja');
            $table->date('fIngreso');
            $table->smallInteger('tipoId');
            $table->string('numId')->unique();
            $table->string('nomb');
            $table->string('ape1');
            $table->string('ape2');
            $table->boolean('sexo');
            $table->date('fNac');
            $table->string('nCel')->unique();
            $table->string('nCasa')->unique();
            $table->string('email')->unique();
            $table->text('dir');
            $table->smallInteger('fPago');
            $table->string('cBanc')->unique();
            $table->string('cAhorro')->unique();
            $table->smallInteger('tipoPlanilla');
            $table->string('fotoEmpleado');
            $table->timestamps();
            $table->rememberToken();
            
            $table->integer('dept_id')->unsigned();

            $table->foreign('dept_id')->references('id')->on('departamentos');

            $table->integer('puesto_id')->unsigned();

            $table->foreign('puesto_id')->references('id')->on('puestos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
