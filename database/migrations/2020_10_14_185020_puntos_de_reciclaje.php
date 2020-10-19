<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PuntosDeReciclaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos_Reciclaje', function (Blueprint $table) {
            $table->id();
            $table->string('tipoBasura');
            $table->string('direccion');
            $table->string('horario_Apertura');
            $table->string('horario_Cierre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puntos_Reciclaje');
    }
}
