<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActaComite;
use App\Models\Citacion;
use App\Models\Comite;
use App\Http\Requests\StoreCitacionRequest;

class CitacionController extends Controller
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
            $citacion = Citacion::where('SC_Citacion_FechaCitacion', 'LIKE', '%' . $query . '%')
                          ->get();

                return view('Citacion.index', ['Citacion' => $citacion, 'search' => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $citacion=Citacion::all();
        $actacomite=ActaComite::all();
        $comite=Comite::all();
        return view('Citacion.create')->with('Citacion', $citacion)->with('ActaComite',$actacomite)->with('Comite',$comite);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCitacionRequest $request)
    {
     
        $citacion= new Citacion();
        $citacion->SC_ActaComite_FK_ID=$request->SC_ActaComite_FK_ID;
        $citacion->SC_Citacion_FechaCitacion=$request->SC_Citacion_FechaCitacion;
        $citacion->SC_Citacion_Hora=$request->SC_Citacion_Hora;
        $citacion->SC_Citacion_Lugar=$request->SC_Citacion_Lugar;
        $citacion->SC_Citacion_Ciudad=$request->SC_Citacion_Ciudad;
        $citacion->SC_Citacion_Centro=$request->SC_Citacion_Centro;
        $citacion->SC_Comite_FK_ID=$request->SC_Comite_FK_ID;
        $citacion->save();
        return redirect()->route('Citacion.index')->with('status', 'Citacion creada');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Citacion  $citacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citacion=Citacion::find($id);
        return view('Citacion.show')
        ->with('citacion', $citacion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Citacion  $citacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citacion=Citacion::find($id);
        $actacomite=Actacomite::all();
        $comite=Comite::all();
        return view('Citacion.edit')->with('citacion',$citacion)->with('actaComite',$actacomite)->with('comite',$comite);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Citacion  $citacion
     * @return \Illuminate\Http\Responsee
     */
    public function update(StoreCitacionRequest $request, $id)
    {
        $citacion=Citacion::find($id);
        $citacion->SC_ActaComite_FK_ID=$request->SC_ActaComite_FK_ID;
        $citacion->SC_Citacion_FechaCitacion=$request->SC_Citacion_FechaCitacion;        
        $citacion->SC_Citacion_Hora=$request->SC_Citacion_Hora;
        $citacion->SC_Citacion_Lugar=$request->SC_Citacion_Lugar;
        $citacion->SC_Citacion_Ciudad=$request->SC_Citacion_Ciudad;
        $citacion->SC_Citacion_Centro=$request->SC_Citacion_Centro;
        $citacion->SC_Comite_FK_ID=$request->SC_Comite_FK_ID;        
        $citacion->save();
        return redirect()->route('Citacion.index')->with('status','Citacion actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Citacion  $citacion
     * @return \Illuminate\Http\Respons
     */
    public function destroy($id)
    {
        $citacion=Citacion::find($id);
        $citacion->delete();
        return redirect()->route('Citacion.index')->with('status','Citacion eliminada');
    }
}
