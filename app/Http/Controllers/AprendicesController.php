<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Aprendiz;
use App\Models\Ficha;
use App\Models\Comite;
use App\Http\Requests\StoreAprendicesRequest;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class AprendicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = trim($request->get('search'));
        $aprendices = DB::table('sc_aprendiz')
                        ->select('*')
                        ->where('SC_Aprendiz_Documento', 'LIKE', '%' .$query. '%')
                        ->paginate(10);

                        return view('aprendices.index', compact('aprendices'));

            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        if(Auth::user()->tipoUsuario == 3){
            $fichas = Ficha::all();
            return view('aprendices.create')
                        ->with('fichas', $fichas);
        }
        else{
            return redirect()->route('aprendices.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAprendicesRequest $request)
    {
        try{
            $aprendiz = new Aprendiz();
            $aprendiz->SC_Aprendiz_Nombres = $request->SC_Aprendiz_Nombres;
            $aprendiz->SC_Aprendiz_Apellidos = $request->SC_Aprendiz_Apellidos;
            $aprendiz->SC_Aprendiz_Documento = $request->SC_Aprendiz_Documento;
            $aprendiz->SC_Aprendiz_Correo = $request->SC_Aprendiz_Correo;
            $aprendiz->SC_Aprendiz_NumeroContacto = $request->SC_Aprendiz_NumeroContacto;
            $aprendiz->SC_Ficha_PK_ID = $request->SC_Ficha_PK_ID;
            $aprendiz->SC_Aprendiz_ContratoAprendizaje   = $request->SC_Aprendiz_ContratoAprendizaje;
            $aprendiz->SC_Aprendiz_Empresa   = $request->SC_Aprendiz_Empresa;
            $aprendiz->save();
            return redirect()->route('aprendices.index')->with('status', 'Aprendiz Creado');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->route('aprendices.index')->with('status', 'No se ha podido crear el Aprendiz');
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
        $aprendiz = Aprendiz::find($id);
        return view('aprendices.show')
                ->with('aprendiz', $aprendiz);
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
            $aprendiz = Aprendiz::find($id);
            $fichas = Ficha::all();
            return view('aprendices.edit')
                    ->with('aprendiz', $aprendiz)
                    ->with('fichas', $fichas);
        }
        else{
            return redirect()->route('aprendices.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAprendicesRequest $request, $id)
    {
        try{
            $aprendiz = Aprendiz::find($id);
            $aprendiz->SC_Aprendiz_Documento = $request->SC_Aprendiz_Documento;
            $aprendiz->SC_Aprendiz_Nombres = $request->SC_Aprendiz_Nombres;
            $aprendiz->SC_Aprendiz_Apellidos = $request->SC_Aprendiz_Apellidos;
            $aprendiz->SC_Aprendiz_Correo = $request->SC_Aprendiz_Correo;
            $aprendiz->SC_Aprendiz_NumeroContacto = $request->SC_Aprendiz_NumeroContacto;
            $aprendiz->SC_Ficha_PK_ID = $request->SC_Ficha_PK_ID;
            $aprendiz->SC_Aprendiz_ContratoAprendizaje = $request->SC_Aprendiz_ContratoAprendizaje;
            $aprendiz->SC_Aprendiz_Empresa = $request->SC_Aprendiz_Empresa;
            $aprendiz->save();
            return redirect()->route('aprendices.index')->with('status', 'Aprendiz Actualizado');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->route('aprendices.index')->with('status', 'No se ha podido actualizar el Aprendiz');
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
                $aprendiz = Aprendiz::find($id);
                $aprendiz->delete();
                return redirect()->route('aprendices.index')->with('status', 'Aprendiz eliminado');
            }
            catch(\Illuminate\Database\QueryException $e){
                return redirect()->route('aprendices.index')->with('status', 'No se pueden eliminar elementos con Integridad Referencial');
            }
        }
        else{
            return redirect()->route('aprendices.index');
        }
    }
}
