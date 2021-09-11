<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRecursosRequest;
use App\Models\ActaComite;
use App\Models\Recursos;
use Illuminate\Http\Request;

class RecursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = trim($request->get('search'));
        $recursos = DB::table('sc_recursos_reposicion')
                        ->select('*')
                        ->where('SC_Recursos_Radicado', 'LIKE', '%' .$query. '%')
                        ->paginate(10);

                        return view('recursosReposicion.index', compact('recursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actas = ActaComite::all();
        return view('recursosReposicion.create')->with('actas', $actas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecursosRequest $request)
    {
        $recursos = new Recursos();
        $recursos->SC_Recursos_FechaGenerado = $request->SC_Recursos_FechaGenerado;
        $recursos->SC_Recursos_FechaLimite = $request->SC_Recursos_FechaLimite;
        $recursos->SC_Recursos_Radicado = $request->SC_Recursos_Radicado;
        $recursos->SC_Recursos_Evidencias = $request->SC_Recursos_Evidencias;
        $recursos->SC_Recursos_Decision = $request->SC_Recursos_Decision;
        $recursos->SC_ActaComite_FK = $request->SC_ActaComite_FK;

        $recursos->save();
        return redirect()->route('recursosReposicion.index')->with('status', 'Recurso de Reposición creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actas = ActaComite::all();
        $recursos = Recursos::find($id);

        return view('recursosReposicion.show')->with('actas', $actas)->with('recursos', $recursos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actas = ActaComite::all();
        $recursos = Recursos::find($id);

        return view('recursosReposicion.edit')->with('actas', $actas)->with('recursos', $recursos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRecursosRequest $request, $id)
    {
        $recursos = Recursos::find($id);

        $recursos->SC_Recursos_FechaGenerado = $request->SC_Recursos_FechaGenerado;
        $recursos->SC_Recursos_FechaLimite = $request->SC_Recursos_FechaLimite;
        $recursos->SC_Recursos_Radicado = $request->SC_Recursos_Radicado;
        $recursos->SC_Recursos_Evidencias = $request->SC_Recursos_Evidencias;
        $recursos->SC_Recursos_Decision = $request->SC_Recursos_Decision;
        $recursos->SC_ActaComite_FK = $request->SC_ActaComite_FK;

        $recursos->save();
        return redirect()->route('recursosReposicion.index')->with('status', 'Recurso de reposición actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recursos = Recursos::find($id);
        $recursos->delete();

        return redirect()->route('recursosReposicion.index')->with('status', 'Recurso de Reposición eliminado correctamente');
    }
}
