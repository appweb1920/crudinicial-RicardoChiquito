<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_recolector extends Model
{
    protected $table = "detalle_recolcetor";
    protected  $fillable = ['idPuntoRecoleccion', 'idRecolector'];
}
