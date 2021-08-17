<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActoAdministrativo;
use App\Models\CondicionamientoMatricula;

class CondicionamientoMatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condicionamientos = CondicionamientoMatricula::all();
        return view('condicionamientos.index')->with('condicionamientos', $condicionamientos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actoadministrativo = ActoAdministrativo::all();
        return view('condicionamientos.create')->with('actoadministrativo', $actoadministrativo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $condicionamientos = new CondicionamientoMatricula();
         $condicionamientos->SC_CondicionamientoMatricula_Descripcion = $request->SC_CondicionamientoMatricula_Descripcion;

         $condicionamientos->SC_CondicionamientoMatricula_Fecha = $request->SC_CondicionamientoMatricula_Fecha;
         
         $condicionamientos->SC_CondicionamientoMatricula_FechaMaxima  = $request->SC_CondicionamientoMatricula_FechaMaxima;

         $condicionamientos->SC_CondicionamientoMatricula_EvidenciasNoPresentadas  = $request->SC_CondicionamientoMatricula_EvidenciasNoPresentadas;

         $condicionamientos->SC_Acto_Administrativo_FK_ID = $request->SC_Acto_Administrativo_FK_ID;

         
         $condicionamientos->save();
         return redirect()->route('condicionamientos.index')->with('status', 'Condicionamiento Matricula creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $condicionamientos = CondicionamientoMatricula::find($id);
        return view('condicionamientos.show')->with('condicionamientos', $condicionamientos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $condicionamientos = CondicionamientoMatricula::find($id);
        $actoadministrativo = ActoAdministrativo::all();
         return view('condicionamientos.edit')->with('condicionamientos', $condicionamientos)->with('actoadministrativo', $actoadministrativo);
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
        $condicionamientos = CondicionamientoMatricula::find($id);
        $condicionamientos->SC_CondicionamientoMatricula_Descripcion = $request->SC_CondicionamientoMatricula_Descripcion;

         $condicionamientos->SC_CondicionamientoMatricula_Fecha = $request->SC_CondicionamientoMatricula_Fecha;
         
         $condicionamientos->SC_CondicionamientoMatricula_FechaMaxima  = $request->SC_CondicionamientoMatricula_FechaMaxima;

         $condicionamientos->SC_CondicionamientoMatricula_EvidenciasNoPresentadas  = $request->SC_CondicionamientoMatricula_EvidenciasNoPresentadas;

         $condicionamientos->SC_Acto_Administrativo_FK_ID = $request->SC_Acto_Administrativo_FK_ID;

         
         $condicionamientos->save();
         return redirect()->route('condicionamientos.index')->with('status', 'Condicionamiento Matricula actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $condicionamientos = CondicionamientoMatricula::find($id);
        $condicionamientos->delete();
        return redirect()->route('condicionamientos.index')->with('status', 'Condicionamiento de matricula eliminado');
    }
}
