<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacacions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->text('nomb');
            $table->boolean('tVacaciones');
            $table->integer('num_vac');
            $table->date('fechaS');
            $table->date('fechaIni');
            $table->date('fechaFin');
            $table->float('monto');


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
        Schema::dropIfExists('vacacions');
    }
}
