<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActoAdministrativo;
use App\Models\Comite;
use App\Http\Requests\StoreAdministrativoRequest;

class ActoAdministrativoSancionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actoas = ActoAdministrativo::all();
         $comite = Comite::all();
        return view('actoadministrativo.index')->with('actoas', $actoas)->with('comite', $comite);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comite = Comite::all();
        return view('actoadministrativo.create')->with('comite', $comite);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdministrativoRequest $request)
    {
        if($request->hasFile('SC_ActoAdministrativoSanciones_Pruebas')){
            $file= $request->file('SC_ActoAdministrativoSanciones_Pruebas');
            //cambiar nombre para no generar conflicto
            $SC_ActoAdministrativoSanciones_Pruebas = time() . $file->getClientOriginalName();
            //movemos el archivo
            $file->move('archivos/actoadministrativo', $SC_ActoAdministrativoSanciones_Pruebas);

        }

        $actoas = new ActoAdministrativo();
         $actoas->SC_ActoAdministrativoSanciones_DescripcionHechos = $request->SC_ActoAdministrativoSanciones_DescripcionHechos;

         $actoas->SC_ActoAdministrativoSanciones_PresentaDescargos = $request->SC_ActoAdministrativoSanciones_PresentaDescargos;

         $actoas->SC_ActoAdministrativoSanciones_Pruebas = $SC_ActoAdministrativoSanciones_Pruebas;

         $actoas->SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor = $request->SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor;

         $actoas->SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion  = $request->SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion;

         $actoas->SC_ActoAdministrativoSanciones_Fecha = $request->SC_ActoAdministrativoSanciones_Fecha;

         $actoas->SC_Comite_FK_ID = $request->SC_Comite_FK_ID;

         $actoas->save();
         return redirect()->route('actoadministrativo.index')->with('status', 'Acto Administrativo Sanciones Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actoas = ActoAdministrativo::find($id);
        $comite = Comite::all();
        return view('actoadministrativo.show')->with('actoas', $actoas)->with('comite', $comite);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actoas = ActoAdministrativo::find($id);
        $comite = Comite::all();
        return view('actoadministrativo.edit')->with('actoas', $actoas)->with('comite', $comite);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAdministrativoRequest $request, $id)
    {

        $actoas = ActoAdministrativo::find($id);
         $actoas->SC_ActoAdministrativoSanciones_DescripcionHechos = $request->SC_ActoAdministrativoSanciones_DescripcionHechos;

         $actoas->SC_ActoAdministrativoSanciones_PresentaDescargos = $request->SC_ActoAdministrativoSanciones_PresentaDescargos;

         if($request->hasFile('SC_ActoAdministrativoSanciones_Pruebas')){
            $file= $request->file('SC_ActoAdministrativoSanciones_Pruebas');
            //cambiar nombre para no generar conflicto
            $SC_ActoAdministrativoSanciones_Pruebas=$actoas->SC_ActoAdministrativoSanciones_Pruebas;
            //movemos el archivo
            $file->move('archivos/actoadministrativo', $SC_ActoAdministrativoSanciones_Pruebas);

        }
         $actoas->SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor = $request->SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor;

         $actoas->SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion  = $request->SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion;

         $actoas->SC_ActoAdministrativoSanciones_Fecha = $request->SC_ActoAdministrativoSanciones_Fecha;

         $actoas->SC_Comite_FK_ID = $request->SC_Comite_FK_ID;

         $actoas->save();
         return redirect()->route('actoadministrativo.index')->with('status', 'Acto Administrativo Sanciones Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actoas = ActoAdministrativo::find($id);
        $actoas->delete();
        return redirect()->route('actoadministrativo.index')->with('status', 'Acto Administrativo eliminado');
    }
}
