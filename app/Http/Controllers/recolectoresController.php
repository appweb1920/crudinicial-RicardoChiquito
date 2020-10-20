<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\puntos_Reciclaje;
use App\detalle_recolectorController;
use App\recolectores;


class recolectoresController extends Controller
{
    public function creacion()
    {
        $r = recolectores::all();
        return view('creacionR')->with('recolectores',$r);
        
    }


    public function enlistado2(Request $request)
    {
        $reco= new recolectores;
        $reco->nombre = $request->nombre;
        $reco->dias_Recoleccion = $request->dias_Recoleccion;
        $reco->save();

        return  redirect('/hola2');
       
    }

    public function MuestraEdicion($id)
    {
        $reco = recolectores::find($id);
        return view('editarR')->with('reco',$reco);
    }

    public function guardaEdicion(Request $request)
    {
        $reco = recolectores::find($request->id);
        if(!is_null($reco))
        {
            $reco->nombre = $request->nombre;
            $reco->dias_Recoleccion = $request->dias_Recoleccion;
            $reco->save();
        }
        return redirect('/hola2');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\recolectores  $recolectores
     * @return \Illuminate\Http\Response
     */
    public function show(recolectores $recolectores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\recolectores  $recolectores
     * @return \Illuminate\Http\Response
     */
    public function edit(recolectores $recolectores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\recolectores  $recolectores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recolectores $recolectores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\recolectores  $recolectores
     * @return \Illuminate\Http\Response
     */
    public function destroy(recolectores $recolectores)
    {
        //
    }
}
