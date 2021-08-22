<?php

namespace App\Http\Controllers;

use App\Models\ActoAdministrativo;
use App\Models\LlamadosAtencion;
use Illuminate\Http\Request;

class LlamadosAtencionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $llamados = LlamadosAtencion::all();
        return view('llamadosAtencion.index')->with('llamados', $llamados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actoas = ActoAdministrativo::all();
        return view('llamadosAtencion.create')->with('actoas', $actoas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $llamadoAtencion = new LlamadosAtencion();
        $llamadoAtencion->SC_Llamado_Atencion_Descripcion = $request->SC_Llamado_Atencion_Descripcion;
        $llamadoAtencion->SC_Llamado_Atencion_Fecha = $request->SC_Llamado_Atencion_Fecha;
        $llamadoAtencion->SC_Llamado_Atencion_EvidenciasNoPresentadas = $request->SC_Llamado_Atencion_EvidenciasNoPresentadas;
        $llamadoAtencion->SC_ActoAdministrativoSanciones_FK_ID = $request->SC_ActoAdministrativoSanciones_FK_ID;

        $llamadoAtencion->save();
        return redirect()->route('llamadosAtencion.index')->with('status', 'Llamado de atención creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $llamados = LlamadosAtencion::find($id);
        return view('llamadosAtencion.show')->with('llamados', $llamados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $llamados = LlamadosAtencion::find($id);
        $actoas = ActoAdministrativo::all();
        return view('llamadosAtencion.edit')->with('llamados', $llamados)->with('actoas', $actoas);
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
        $llamadoAtencion = LlamadosAtencion::find($id);

        $llamadoAtencion->SC_Llamado_Atencion_Descripcion = $request->SC_Llamado_Atencion_Descripcion;
        $llamadoAtencion->SC_Llamado_Atencion_Fecha = $request->SC_Llamado_Atencion_Fecha;
        $llamadoAtencion->SC_Llamado_Atencion_EvidenciasNoPresentadas = $request->SC_Llamado_Atencion_EvidenciasNoPresentadas;
        $llamadoAtencion->SC_ActoAdministrativoSanciones_FK_ID = $request->SC_ActoAdministrativoSanciones_FK_ID;

        $llamadoAtencion->save();
        return redirect()->route('llamadosAtencion.index')->with('status', 'Llamado de atención actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $llamados = LlamadosAtencion::find($id);
        $llamados->delete();

        return redirect()->route('llamadosAtencion.index')->with('status', 'Llamado de atención eliminado correctamente');
    }
}
