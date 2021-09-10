<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Aprendiz;
use App\Models\Ficha;
use App\Models\Comite;
use App\Http\Requests\StoreAprendicesRequest;
use Illuminate\Pagination\Paginator;

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
                        ->select('SC_Aprendiz_PK_ID', 'SC_Aprendiz_Nombres', 'SC_Aprendiz_Apellidos', 'SC_Aprendiz_Documento', 'SC_Ficha_PK_ID')
                        ->where('SC_Aprendiz_Documento', 'LIKE', '%' .$query. '%')
                        ->paginate(10);
                        return view('aprendices.index', compact('aprendices'));
        /*if(count($aprendices)<=0){
            
        }
        else{
            return redirect()->route('aprendices.index')->with('status', 'El aprendiz no ha sido encontrado');
        }*/
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        #$comites = Comite::all();
        $fichas = Ficha::all();
        return view('aprendices.create')
                    #->with('comites', $comites)
                    ->with('fichas', $fichas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAprendicesRequest $request)
    {
        $aprendiz = new Aprendiz();
        $aprendiz->SC_Aprendiz_Nombres = $request->SC_Aprendiz_Nombres;
        $aprendiz->SC_Aprendiz_Apellidos = $request->SC_Aprendiz_Apellidos;
        $aprendiz->SC_Aprendiz_Documento = $request->SC_Aprendiz_Documento;
        $aprendiz->SC_Aprendiz_Correo = $request->SC_Aprendiz_Correo;
        $aprendiz->SC_Aprendiz_NumeroContacto = $request->SC_Aprendiz_NumeroContacto;
        $aprendiz->SC_Ficha_PK_ID = $request->SC_Ficha_PK_ID;
        $aprendiz->SC_Aprendiz_ContratoAprendizaje   = $request->SC_Aprendiz_ContratoAprendizaje;
        $aprendiz->SC_Aprendiz_Empresa   = $request->SC_Aprendiz_Empresa;
        #$aprendiz->SC_Comite_FK_ID = $request->SC_Comite_FK_ID;
        $aprendiz->save();
        return redirect()->route('aprendices.index')->with('status', 'Aprendiz Creado');
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
        $aprendiz = Aprendiz::find($id);
        #$comites = Comite::all();
        $fichas = Ficha::all();
        return view('aprendices.edit')
                ->with('aprendiz', $aprendiz)
                #->with('comites', $comites)
                ->with('fichas', $fichas);
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
        $aprendiz = Aprendiz::find($id);
        $aprendiz->SC_Aprendiz_Documento = $request->SC_Aprendiz_Documento;
        $aprendiz->SC_Aprendiz_Nombres = $request->SC_Aprendiz_Nombres;
        $aprendiz->SC_Aprendiz_Apellidos = $request->SC_Aprendiz_Apellidos;
        $aprendiz->SC_Aprendiz_Correo = $request->SC_Aprendiz_Correo;
        $aprendiz->SC_Aprendiz_NumeroContacto = $request->SC_Aprendiz_NumeroContacto;
        $aprendiz->SC_Ficha_PK_ID = $request->SC_Ficha_PK_ID;
        $aprendiz->SC_Aprendiz_ContratoAprendizaje = $request->SC_Aprendiz_ContratoAprendizaje;
        $aprendiz->SC_Aprendiz_Empresa = $request->SC_Aprendiz_Empresa;
        #$aprendiz->SC_Comite_FK_ID = $request->SC_Comite_FK_ID;
        $aprendiz->save();
        return redirect()->route('aprendices.index')->with('status', 'Aprendiz Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aprendiz = Aprendiz::find($id);
        $aprendiz->delete();
        return redirect()->route('aprendices.index')->with('status', 'Aprendiz eliminado');
    }
}
