<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('estatus');
            $table->date('fecha');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        Schema::create('asignaciones', function (Blueprint $table) {
            $table->primary('trabajos_id', 'reporte_id');
            $table->unsignedBigInteger('trabajos_id');
            $table->unsignedBigInteger('reporte_id');
            $table->timestamps();


            $table->foreign('trabajos_id')
                ->references('id')
                ->on('trabajos')
                ->onDelete('cascade');

            $table->foreign('reporte_id')
                ->references('id')
                ->on('reportes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajos');
    }
}
