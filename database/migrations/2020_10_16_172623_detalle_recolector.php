<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetalleRecolector extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_recolcetor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idPuntoRecoleccion');
            $table->foreign('idPuntoRecoleccion')->references('id')->on('puntos_Reciclaje');
            $table->unsignedBigInteger('idRecolector');
            $table->foreign('idRecolector')->references('id')->on('recolectores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_recolcetor');
    }
}
