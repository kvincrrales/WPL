<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vales', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->text('nomb');
            $table->text('moneda');
            $table->integer('montoV');
            $table->integer('interes');
            $table->integer('total');
            $table->date('fSolicitud');
            $table->text('notas');

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
        Schema::dropIfExists('vales');
    }
}
