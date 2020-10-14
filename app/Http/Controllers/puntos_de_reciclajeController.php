<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\puntos_Reciclaje;
use App\recolectores;

class puntos_de_reciclajeController extends Controller
{
    public function creacion()
    {
        return view('creacionPR');
    }

    public function enlistado(Request $request)
    {
        $tipoBasura = $request->tipoBasura;
        $direccion = $request->direcccion;
        $horario_Apertura = $request->horario_Apertura;
        $horario_Cierre = $request->horario_Cierre;

        return  view('creacionPR')
        ->with('tb',$tipoBasura)
        ->with('dir',$direccion)
        ->with('ha',$horario_Apertura)
        ->with('hc',$horario_Cierre);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puntos_Reciclaje = puntos_Reciclaje::all();
        return ($puntos_Reciclaje);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $puntos_Reciclaje = puntosReciclaje::find($id);
        $recolectores = recolectores::where($id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
