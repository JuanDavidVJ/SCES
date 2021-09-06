<?php

namespace App\Http\Controllers;

use App\Models\ActaComite;
use App\Models\Citacion;
use Illuminate\Http\Request;
use App\Http\Requests\StoreActaComiteRequest;

class ActaComiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = trim($request->get('search'));

        if($request){
            $actacomite = ActaComite::where('SC_Citacion_FK', 'LIKE', '%' . $query . '%')
                          ->get();

                return view('ActaComite.index', ['ActaComite' => $actacomite, 'search' => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citaciones = Citacion::all();
        return view('ActaComite.create')
                ->with('citaciones', $citaciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActaComiteRequest $request)
    {
        $actacomite = new ActaComite();
        $actacomite->SC_ActaComite_Nombre = $request->Nombre;
        $actacomite->SC_ActaComite_Ciudad = $request->Ciudad;
        $actacomite->SC_ActaComite_Fecha = $request->Fecha;
        $actacomite->SC_ActaComite_HoraInicio = $request->HoraInicio;
        $actacomite->SC_ActaComite_HoraFin = $request->HoraFin;
        $actacomite->SC_ActaComite_DeclaracionesAprendiz = $request->DeclaracionA;
        $actacomite->SC_ActaComite_DeclaracionesOtros = $request->DeclaracionO;
        $actacomite->SC_ActaComite_DeclaracionesResponsable = $request->DeclaracionR;
        $actacomite->SC_ActaComite_Decision = $request->Desicion;
        $actacomite->SC_ActaComite_Descargos = $request->Descargo;
        $actacomite->SC_ActaComite_Asistentes = $request->Asistente;
        $actacomite->SC_Citacion_FK = $request->Citacion;
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
        $actacomite = ActaComite::find($id);
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
        $actacomite = ActaComite::find($id);
        $citaciones = Citacion::all();
        return view('ActaComite.edit')
                ->with('ActaComite', $actacomite)
                ->with('citaciones', $citaciones);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ActaComite  $actaComite
     * @return \Illuminate\Http\Response
     */
    public function update(StoreActaComiteRequest $request, $id)
    {
        $actacomite = ActaComite::find($id);
        $actacomite->SC_ActaComite_Numero = $request->Numero;
        $actacomite->SC_ActaComite_Nombre = $request->Nombre;
        $actacomite->SC_ActaComite_Ciudad = $request->Ciudad;
        $actacomite->SC_ActaComite_Fecha = $request->Fecha;
        $actacomite->SC_ActaComite_HoraInicio = $request->HoraInicio;
        $actacomite->SC_ActaComite_HoraFin = $request->HoraFin;
        $actacomite->SC_ActaComite_DeclaracionesAprendiz = $request->DeclaracionA;
        $actacomite->SC_ActaComite_DeclaracionesOtros = $request->DeclaracionO;
        $actacomite->SC_ActaComite_DeclaracionesResponsable = $request->DeclaracionR;
        $actacomite->SC_ActaComite_Decision = $request->Desicion;
        $actacomite->SC_ActaComite_Descargos = $request->Descargo;
        $actacomite->SC_ActaComite_Asistentes = $request->Asistente;
        $actacomite->SC_Citacion_FK = $request->Citacion; 
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
        try{
            $actacomite = ActaComite::find($id);
            $actacomite->delete();
            return redirect()->route('ActaComite.index')->with('status','Acta eliminada');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->route('ActaComite.index')->with('status','No se pueden eliminar elementos con Integridad Referencial');
        }
        
    }
<<<<<<< HEAD
}
=======

}
>>>>>>> 2a0056e2e9f0d44b21e3f8f39f4127e1faa42e54
