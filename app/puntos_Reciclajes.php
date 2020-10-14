<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puntos_Reciclaje extends Model
{
    protected $table = "puntos_Reciclaje";
    protected  $fillable = ['tipoBasura', 'direccion', 'horario_Apertura', 'horario_Cierre'];
}
