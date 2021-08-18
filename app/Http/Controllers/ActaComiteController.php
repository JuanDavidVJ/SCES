<?php

namespace App\Http\Controllers;

use App\Models\ActaComite;
use Illuminate\Http\Request;

class ActaComiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actacomite= ActaComite::all();
        return view('ActaComite.index')->with('ActaComite', $actacomite);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $actacomite=ActaComite::all();
        return view('ActaComite.create')->with('ActaComite', $actacomite);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $actacomite= new ActaComite();
        $actacomite->SC_ActaComite_Codigo=$request->SC_ActaComite_Codigo;
        $actacomite->SC_ActaComite_Descripcion=$request->SC_ActaComite_Descripcion;
        $actacomite->SC_ActaComite_Estado=$request->SC_ActaComite_Estado;
        $actacomite->SC_ActaComite_NumeroSolicitud=$request->SC_ActaComite_NumeroSolicitud;
        $actacomite->SC_ActaComite_Motivo=$request->SC_ActaComite_Motivo;
        $actacomite->SC_ActaComite_Testigos=$request->SC_ActaComite_Testigos;
        $actacomite->SC_ActaComite_EnviarCitacionAntecedentes=$request->SC_ActaComite_EnviarCitacionAntecedentes;
        $actacomite->save();
        return redirect()->route('ActaComite.index')->with('status', 'Acta creada');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActaComite  $actaComite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actacomite=ActaComite::find($id);
        return view('ActaComite.show')
        ->with('actacomite', $actacomite);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ActaComite  $actaComite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actacomite=ActaComite::find($id);
        return view('ActaComite.edit')->with('ActaComite',$actacomite);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ActaComite  $actaComite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $actacomite=ActaComite::find($id);
        $actacomite->SC_ActaComite_Codigo=$request->SC_ActaComite_Codigo;
        $actacomite->SC_ActaComite_Descripcion=$request->SC_ActaComite_Descripcion;        
        $actacomite->SC_ActaComite_Estado=$request->SC_ActaComite_Estado;
        $actacomite->SC_ActaComite_NumeroSolicitud=$request->SC_ActaComite_NumeroSolicitud;
        $actacomite->SC_ActaComite_Motivo=$request->SC_ActaComite_Motivo;
        $actacomite->SC_ActaComite_Testigos=$request->SC_ActaComite_Testigos;
        $actacomite->SC_ActaComite_EnviarCitacionAntecedentes=$request->SC_ActaComite_EnviarCitacionAntecedentes;
        
        $actacomite->save();
        return redirect()->route('ActaComite.index')->with('status','Acta actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActaComite  $actaComite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actacomite=ActaComite::find($id);
        $actacomite->delete();
        return redirect()->route('ActaComite.index')->with('status','Acta eliminada');
    }
}
