<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncapacidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incapacidads', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fechaInicio');
            $table->date('fechaFinal');
            $table->string('tipo');
            $table->integer('total');
            $table->integer('cDias');
            $table->string('nomb');
            $table->string('nota');

            $table->integer('emp_id')->unsigned();

            $table->foreign('emp_id')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incapacidads');
    }
}
