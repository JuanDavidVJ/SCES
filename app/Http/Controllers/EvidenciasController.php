<?php

namespace App\Http\Controllers;

use App\Models\Comite;
use App\Models\Evidencias;
use App\Models\PlanMejoramiento;
use Illuminate\Http\Request;

class EvidenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evidencias = Evidencias::all();
        return view('evidencias.index')->with('evidencias', $evidencias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comites = Comite::all();
        $plan = PlanMejoramiento::all();
        return view('evidencias.create')->with('comites', $comites)->with('plan', $plan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('SC_Evidencias_Archivo')){
            $file= $request->file('SC_Evidencias_Archivo');
            //cambiar nombre para no generar conflicto
            $SC_Evidencias_Archivo = time() . $file->getClientOriginalName();
            //movemos el archivo
            $file->move('archivos/evidencias', $SC_Evidencias_Archivo);

        }

        $evidencia = new Evidencias();
        $evidencia->SC_Evidencias_Descripcion = $request->SC_Evidencias_Descripcion;
        $evidencia->SC_Evidencias_Detalle = $request->SC_Evidencias_Detalle;
        $evidencia->SC_Evidencias_Archivo = $SC_Evidencias_Archivo;
        $evidencia->SC_Comite_FK_ID = $request->SC_Comite_FK_ID;
        $evidencia->SC_PlanMejoramiento_FK_ID = $request->SC_PlanMejoramiento_FK_ID;

        $evidencia->save();
        return redirect()->route('evidencias.index')->with('status', 'Evidencia Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evidencia = Evidencias::find($id);
        return view('evidencias.show')->with('evidencia', $evidencia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evidencia = Evidencias::find($id);
        $comites = Comite::all();
        $plan = PlanMejoramiento::all();
        return view('evidencias.edit')->with('evidencia', $evidencia)->with('comites', $comites)->with('plan', $plan);
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
        $evidencia = Evidencias::find($id);
        $evidencia->SC_Evidencias_Descripcion = $request->SC_Evidencias_Descripcion;
        $evidencia->SC_Evidencias_Detalle = $request->SC_Evidencias_Detalle;
        $evidencia->SC_Evidencias_Archivo = $request->SC_Evidencias_Archivo;
        $evidencia->SC_Comite_FK_ID = $request->SC_Comite_FK_ID;
        $evidencia->SC_PlanMejoramiento_FK_ID = $request->SC_PlanMejoramiento_FK_ID;

        $evidencia->save();
        return redirect()->route('evidencias.index')->with('status', 'Evidencia Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evidencia = Evidencias::find($id);
        $evidencia->delete();
        return redirect()->route('evidencias.index')->with('status', 'Evidencia Eliminada');
    }
}
