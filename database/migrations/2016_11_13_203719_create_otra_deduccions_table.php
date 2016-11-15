<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtraDeduccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otra_deduccions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->text('nomb');
            $table->text('moneda');
            $table->integer('montoO');
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
        Schema::dropIfExists('otra_deduccions');
    }
}
