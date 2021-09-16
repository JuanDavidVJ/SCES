<?php

namespace App\Http\Controllers;

use App\Models\ActaComite;
use App\Models\Citacion;
use Illuminate\Http\Request;
use App\Http\Requests\StoreActaComiteRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $ActaComite = DB::table('sc_actacomite')
                        ->select('SC_ActaComite_PK_ID', 'SC_ActaComite_Nombre', 'SC_ActaComite_Ciudad', 'SC_ActaComite_Fecha', 'SC_ActaComite_Decision')
                        ->where('SC_ActaComite_Fecha', 'LIKE', '%' .$query. '%')
                        ->paginate(10);
                        return view('ActaComite.index', compact('ActaComite'));
        $query = trim($request->get('search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->tipoUsuario == 3){
            $citaciones = Citacion::all();
            return view('ActaComite.create')
                    ->with('citaciones', $citaciones);
        }
        else{
            return redirect()->route('ActaComite.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActaComiteRequest $request)
    {
        try{
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
            $actacomite->SC_ActaComite_Asistentes = $request->Asistente;
            $actacomite->SC_Citacion_FK = $request->Citacion;
            $actacomite->save();
            return redirect()->route('ActaComite.index')->with('status', 'Acta creada');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->route('ActaComite.index')->with('status', 'No se ha podido crear el Acta de Comité');
        }

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
        if(Auth::user()->tipoUsuario == 3){
            $actacomite = ActaComite::find($id);
            $citaciones = Citacion::all();
            return view('ActaComite.edit')
                    ->with('ActaComite', $actacomite)
                    ->with('citaciones', $citaciones);
        }
        else{
            return redirect()->route('ActaComite.index');
        }
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
        try{
            $actacomite = ActaComite::find($id);
            $actacomite->SC_ActaComite_Nombre = $request->Nombre;
            $actacomite->SC_ActaComite_Ciudad = $request->Ciudad;
            $actacomite->SC_ActaComite_Fecha = $request->Fecha;
            $actacomite->SC_ActaComite_HoraInicio = $request->HoraInicio;
            $actacomite->SC_ActaComite_HoraFin = $request->HoraFin;
            $actacomite->SC_ActaComite_DeclaracionesAprendiz = $request->DeclaracionA;
            $actacomite->SC_ActaComite_DeclaracionesOtros = $request->DeclaracionO;
            $actacomite->SC_ActaComite_DeclaracionesResponsable = $request->DeclaracionR;
            $actacomite->SC_ActaComite_Decision = $request->Desicion;
            $actacomite->SC_ActaComite_Asistentes = $request->Asistente;
            $actacomite->SC_Citacion_FK = $request->Citacion; 
            $actacomite->save();
            return redirect()->route('ActaComite.index')->with('status','Acta actualizada');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->route('ActaComite.index')->with('status', 'No se ha podido actualizar');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActaComite  $actaComite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->tipoUsuario == 3){
            try{
                $actacomite = ActaComite::find($id);
                $actacomite->delete();
                return redirect()->route('ActaComite.index')->with('status','Acta eliminada');
            }
            catch(\Illuminate\Database\QueryException $e){
                return redirect()->route('ActaComite.index')->with('status','No se pueden eliminar elementos con Integridad Referencial');
            }
        }
        else{
            return redirect()->route('ActaComite.index');
        }
        
    }

}



