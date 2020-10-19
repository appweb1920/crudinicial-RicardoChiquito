<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\recolectores;
use App\detalle_recolector;
use Illuminate\Support\Facades\DB;

class puntos_Reciclaje extends Model
{
    protected $table = "puntos_Reciclaje";
    protected  $fillable = ['tipoBasura', 'direccion', 'horario_Apertura', 'horario_Cierre'];


    public function getRecolectores()
    {
        //$recolectores=detalle_recolector::where('id',$this->id)->get();
        $recolectores= DB::select('SELECT recolectores.nombre 
        FROM recolectores
        INNER JOIN detalle_recolcetor ON detalle_recolcetor.idRecolector = recolectores.id
        INNER JOIN puntos_reciclaje ON detalle_recolcetor.idPuntoRecoleccion = puntos_reciclaje.id
        WHERE puntos_reciclaje.id='.$this->id);
        return $recolectores;
    }
}