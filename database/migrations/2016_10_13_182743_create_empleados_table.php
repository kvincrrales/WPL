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
            $table->string('estatus');
            //$table->date('fBaja');
            $table->date('fIngreso');
            $table->string('tipoId');
            $table->string('numId')->unique();
            $table->string('nomb');
            $table->string('ape1');
            $table->string('ape2');
            $table->string('sexo');
            $table->date('fNac');
            $table->string('nCel')->unique();
            $table->string('nCasa')->unique();
            $table->string('email')->unique();
            $table->text('dir');
            $table->string('fPago');
            $table->string('cBanc')->unique();
            $table->string('cAhorro')->unique();
            $table->string('tipoPlanilla');
            $table->string('vacaciones_disponibles');
            $table->string('fotoEmpleado');
            $table->timestamps();
            $table->rememberToken();
            
            $table->integer('dept_id')->unsigned();
            $table->string('nombD');

            $table->integer('puesto_id')->unsigned();
            $table->string('nombP');
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
