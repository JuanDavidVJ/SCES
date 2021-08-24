<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antecedentes;
use App\Models\Aprendiz;
use App\Http\Requests\StoreAntecedentesRequest;

class AntecedentesController extends Controller
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
            $antecedentes = Antecedentes::where('SC_Antecedentes_Descripcion', 'LIKE', '%' . $query . '%')
                          ->orderBy('SC_Antecedentes_Descripcion', 'asc')
                          ->get();

                return view('antecedentes.index', ['antecedentes' => $antecedentes, 'search' => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aprendices = Aprendiz::all();
        return view('antecedentes.create')->with('aprendices', $aprendices);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAntecedentesRequest $request)
    {
        if($request->hasFile('SC_Antecedentes_Foto')){
            $file= $request->file('SC_Antecedentes_Foto');
            //cambiar nombre para no generar conflicto
            $SC_Antecedentes_Foto = time() . $file->getClientOriginalName();
            //movemos el archivo
            $file->move('images/antecedentes', $SC_Antecedentes_Foto);

        }

        $antecedentes = new Antecedentes();
        $antecedentes->SC_Antecedentes_Descripcion = $request->SC_Antecedentes_Descripcion;
        $antecedentes->SC_Antecedentes_HabilidadesDestrezas = $request->SC_Antecedentes_HabilidadesDestrezas;
        $antecedentes->SC_Antecedentes_Observaciones = $request->SC_Antecedentes_Observaciones;
        $antecedentes->SC_Antecedentes_Fecha = $request->SC_Antecedentes_Fecha;
        $antecedentes->SC_Antecedentes_Foto = $SC_Antecedentes_Foto;
        $antecedentes->SC_Aprendiz_FK_ID = $request->SC_Aprendiz_FK_ID;

        $antecedentes->save();

        return redirect()->route('antecedentes.index')->with('status', 'Antecedente creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $antecedentes = Antecedentes::find($id);

        return view('antecedentes.show')->with('antecedentes', $antecedentes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $antecedentes = Antecedentes::find($id);
        $aprendices = Aprendiz::all();

        return view('antecedentes.edit')->with('antecedentes', $antecedentes)->with('aprendices', $aprendices);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAntecedentesRequest $request, $id)
    {
        $antecedentes = Antecedentes::find($id);
        $antecedentes->SC_Antecedentes_Descripcion = $request->SC_Antecedentes_Descripcion;
        $antecedentes->SC_Antecedentes_HabilidadesDestrezas = $request->SC_Antecedentes_HabilidadesDestrezas;
        $antecedentes->SC_Antecedentes_Observaciones = $request->SC_Antecedentes_Observaciones;
        $antecedentes->SC_Antecedentes_Fecha = $request->SC_Antecedentes_Fecha;
        $antecedentes->SC_Antecedentes_Foto = $request->SC_Antecedentes_Foto;
        $antecedentes->SC_Aprendiz_FK_ID = $request->SC_Aprendiz_FK_ID;

        $antecedentes->save();
        return redirect()->route('antecedentes.index')->with('status', 'Antecedente Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $antecedentes = Antecedentes::find($id);
        $antecedentes->delete();

        return redirect()->route('antecedentes.index')->with('status', 'Antecedente Eliminado Correctamente');
    }
}
