<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\puntos_Reciclaje;
use App\recolectores;
use App\detalle_recolector;

class detalle_recolectorController extends Controller
{
    
    public function enlistado3(Request $request)
    {
        $dr= new detalle_recolector;
        $dr->idPuntoRecoleccion = $request->idPuntoRecoleccion;
        $dr->idRecolector = $request->idRecolector;
        $dr->save();

        return  redirect('/detalleReco');
       
    }

    public function index()
    {
        $dr = detalle_recolector::all();
        return view('detallesRecoleccin')->with('detaller',$dr);
    }


    
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
        //
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
