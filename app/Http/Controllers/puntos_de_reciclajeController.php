<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\puntos_Reciclaje;
use App\recolectores;
use App\detalle_recolector;

class puntos_de_reciclajeController extends Controller
{
    public function agregapuntos()
    {
        $pr = puntos_Reciclaje::all();
        return view('creacionPR')->with('puntos_Reciclaje',$pr);
    }

    public function enlistado(Request $request)
    {
        $punre= new puntos_Reciclaje;
        $punre->tipoBasura = $request->tipoBasura;
        $punre->direccion = $request->direccion;
        $punre->horario_Apertura = $request->horario_Apertura;
        $punre->horario_Cierre = $request->horario_Cierre;

        $punre->save();

        return  redirect('/hola');
    }

    public function MuestraEdicion($id)
    {
        $punre = puntos_Reciclaje::find($id);
        return view('editaPR')->with('punre',$punre);
    }

    public function guardaEdicion(Request $request)
    {
        $punre = puntos_Reciclaje::find($request->id);
        if(!is_null($punre))
        {
            $punre->tipoBasura = $request->tipoBasura;
            $punre->direccion = $request->direccion;
            $punre->horario_Apertura = $request->horario_Apertura;
            $punre->horario_Cierre = $request->horario_Cierre;
            $punre->save();
        }
        return redirect('/hola');
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
