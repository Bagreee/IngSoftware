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
        Schema::create('encomiendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_dpto')->unsigned();
            $table->string('proveedor');
            $table->string('estado');
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
        Schema::dropIfExists('encomiendas');
    }
};
