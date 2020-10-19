<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\recolectores;
use App\detalle_recolector;

class puntos_Reciclaje extends Model
{
    protected $table = "puntos_Reciclaje";
    protected  $fillable = ['tipoBasura', 'direccion', 'horario_Apertura', 'horario_Cierre'];


    public function getRecolectores()
    {
        return  $recolectores=detalle_recolector::where('id',$this->id)->get();
    }
}