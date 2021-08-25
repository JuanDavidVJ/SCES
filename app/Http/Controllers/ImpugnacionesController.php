<?php

namespace App\Http\Controllers;

use App\Models\Comite;
use App\Models\Impugnacion;
use Illuminate\Http\Request;
use App\Http\Requests\StoreImpugnacionRequest;

class ImpugnacionesController extends Controller
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
            $impugnaciones = Impugnacion::where('SC_Impugnacion_DescripcionApelacion', 'LIKE', '%' . $query . '%')
                          ->get();

                return view('impugnaciones.index', ['impugnaciones' => $impugnaciones, 'search' => $query]);
        }
       /* $impugnaciones = Impugnacion::all();
        return view('impugnaciones.index')->with('impugnaciones', $impugnaciones);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comites = Comite::all();
        return view('impugnaciones.create')->with('comites', $comites);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImpugnacionRequest $request)
    {

        $impugnacion = new Impugnacion();
        $impugnacion->SC_Impugnacion_DescripcionApelacion = $request->SC_Impugnacion_DescripcionApelacion;
        $impugnacion->SC_Comite_FK_ID = $request->SC_Comite_FK_ID;

        $impugnacion->save();
        return redirect()->route('impugnaciones.index')->with('status', 'Impugnacion Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $impugnaciones = Impugnacion::find($id);
        return view('impugnaciones.show')->with('impugnaciones', $impugnaciones);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $impugnaciones = Impugnacion::find($id);
        $comites = Comite::all();
        return view('impugnaciones.edit')->with('impugnaciones', $impugnaciones)->with('comites', $comites);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreImpugnacionRequest $request, $id)
    {
        $impugnacion = Impugnacion::find($id);
        $impugnacion->SC_Impugnacion_DescripcionApelacion = $request->SC_Impugnacion_DescripcionApelacion;
        $impugnacion->SC_Comite_FK_ID = $request->SC_Comite_FK_ID;

        $impugnacion->save();
        return redirect()->route('impugnaciones.index')->with('status', 'Impugnacion Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $impugnacion = Impugnacion::find($id);
        $impugnacion->delete();
        return redirect()->route('impugnaciones.index')->with('status', 'Impugnacion eliminada');
    }
}
