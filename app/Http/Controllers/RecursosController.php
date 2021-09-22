<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRecursosRequest;
use App\Models\ActaComite;
use App\Models\Recursos;
use App\Models\Citacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->tipoUsuario == 3){
            $actas = ActaComite::all();
            $citacion = Citacion::all();
            return view('recursosReposicion.create')
                    ->with('actas', $actas)
                    ->with('citacion', $citacion);
        }
        else{
            return redirect()->route('recursosReposicion.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecursosRequest $request)
    {
        try{
            if($request->hasFile('Evidencias')){
                $file= $request->file('Evidencias');
                //cambiar nombre para no generar conflicto
                $Evidencias = time() . $file->getClientOriginalName();
                //movemos el archivo
                $file->move('archivos/RecursosReposicion', $Evidencias);
            }

            $recursos = new Recursos();
            $recursos->SC_Recursos_FechaGenerado = $request->SC_Recursos_FechaGenerado;
            $recursos->SC_Recursos_FechaLimite = $request->SC_Recursos_FechaLimite;
            $recursos->SC_Recursos_Radicado = $request->SC_Recursos_Radicado;
            $recursos->SC_Recursos_Evidencias = $Evidencias;
            $recursos->SC_Recursos_Decision = $request->SC_Recursos_Decision;
            $recursos->SC_ActaComite_FK = $request->SC_ActaComite_FK;

            $recursos->save();
            return redirect()->route('recursosReposicion.index')->with('status', 'Recurso de Reposición creado correctamente');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->route('recursosReposicion.index')->with('status', 'No se ha podido crear el Recurso de Reposición');
        }
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
        return view('recursosReposicion.show')
                ->with('actas', $actas)
                ->with('recursos', $recursos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->tipoUsuario == 3){
            $actas = ActaComite::all();
            $recursos = Recursos::find($id);
            return view('recursosReposicion.edit')
                    ->with('actas', $actas)
                    ->with('recursos', $recursos);
        }
        else{
            return redirect()->route('recursosReposicion.index');
        }
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
        try{
            $recursos = Recursos::find($id);
            $recursos->SC_Recursos_FechaGenerado = $request->SC_Recursos_FechaGenerado;
            $recursos->SC_Recursos_FechaLimite = $request->SC_Recursos_FechaLimite;
            $recursos->SC_Recursos_Radicado = $request->SC_Recursos_Radicado;
            //$recursos->SC_Recursos_Evidencias = SC_Recursos_Evidencias;
            $recursos->SC_Recursos_Decision = $request->SC_Recursos_Decision;
            $recursos->SC_ActaComite_FK = $request->SC_ActaComite_FK;
            if ($request->hasFile('Evidencias')) {
                $file = $request->file('Evidencias');
                $SC_Recursos_Evidencias = $recursos->Evidencias;
                $file->move("archivos/RecursosReposicion", $SC_Recursos_Evidencias);
            }

            $recursos->save();
            return redirect()->route('recursosReposicion.index')->with('status', 'Recurso de reposición actualizado correctamente.');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->route('recursosReposicion.index')->with('status', 'No se ha podido actualizar');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->tipoUsuario == 3){
            try{
                $recursos = Recursos::find($id);
                $recursos->delete();
    
                return redirect()->route('recursosReposicion.index')->with('status', 'Recurso de Reposición eliminado correctamente');
            }
            catch(\Illuminate\Database\QueryException $e){
                return redirect()->route('recursosReposicion.index')->with('status', 'No se pueden eliminar elementos con Integridad Referencial');
            }
        }
        else{
            return redirect()->route('recursosReposicion.index');
        }
    }
}
