<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fechaP');
            $table->text('moneda');
            $table->integer('montoP');
            $table->integer('interes');
            $table->integer('montoTotal');
            $table->integer('plazoS');
            $table->integer('total');
            $table->date('fSolicitud');
            $table->text('notas');
            $table->string('nombE');

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
        Schema::dropIfExists('prestamos');
    }
}
