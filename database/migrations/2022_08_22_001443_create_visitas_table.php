<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_dpto')->unsigned();
            $table->string('nombre');
            $table->bigInteger('num_estacionamiento');
            $table->string('patente');
            $table->timestamp('fecha_ingreso')->useCurrent();

            $table->foreign('id_dpto')->references('id')->on('departamentos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitas');
    }
};
