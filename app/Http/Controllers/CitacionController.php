<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citacion;
use App\Models\SolicitarComite;
use App\Http\Requests\StoreCitacionRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

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
        $Citacion = DB::table('sc_citacion')
                        ->select('*')
                        ->where('SC_Citacion_NumeroActa', 'LIKE', '%' .$query. '%')
                        ->paginate(10);

                        return view('Citacion.index', compact('Citacion'));
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
        $solicitud=SolicitarComite::all();
        return view('Citacion.create')->with('Citacion', $citacion)->with('SolicitarComite',$solicitud);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCitacionRequest $request)
    {
        try{
            $citacion= new Citacion();
            $citacion->SC_Citacion_FechaCitacion=$request->SC_Citacion_FechaCitacion;
            $citacion->SC_Citacion_Hora=$request->SC_Citacion_Hora;
            $citacion->SC_Citacion_Lugar=$request->SC_Citacion_Lugar;
            $citacion->SC_Citacion_Ciudad=$request->SC_Citacion_Ciudad;
            $citacion->SC_Citacion_Centro=$request->SC_Citacion_Centro;
            $citacion->SC_Citacion_NumeroActa=$request->SC_Citacion_NumeroActa;
            $citacion->SC_Solicitud_FK=$request->SC_Solicitud_FK;
            $citacion->save();

            Mail::to($citacion->solicitarComite->aprendiz->SC_Aprendiz_Correo)->queue(new MessageReceived($citacion, $citacion->solicitarComite->aprendiz));
        
            return redirect()->route('Citacion.index')->with('status', 'Citación creada');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->route('Citacion.index')->with('status', 'No se ha podido crear la Citación');
        }
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
        $solicitud=SolicitarComite::all();
        return view('Citacion.show')
        ->with('citacion', $citacion)->with('SolicitarComite',$solicitud);
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
        $solicitud=SolicitarComite::all();
        return view('Citacion.edit')->with('citacion', $citacion)->with('SolicitarComite',$solicitud);
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
        try{
            $citacion=Citacion::find($id);
            $citacion->SC_Citacion_FechaCitacion=$request->SC_Citacion_FechaCitacion;
            $citacion->SC_Citacion_Hora=$request->SC_Citacion_Hora;
            $citacion->SC_Citacion_Lugar=$request->SC_Citacion_Lugar;
            $citacion->SC_Citacion_Ciudad=$request->SC_Citacion_Ciudad;
            $citacion->SC_Citacion_Centro=$request->SC_Citacion_Centro;
            $citacion->SC_Citacion_NumeroActa=$request->SC_Citacion_NumeroActa;
            $citacion->SC_Solicitud_FK=$request->SC_Solicitud_FK;
            $citacion->save();
            return redirect()->route('Citacion.index')->with('status','Citación actualizada');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->route('Citacion.index')->with('status', 'No se ha podido actualizar');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Citacion  $citacion
     * @return \Illuminate\Http\Respons
     */
    public function destroy($id)
    {
        try{
            $citacion=Citacion::find($id);
            $citacion->delete();
            return redirect()->route('Citacion.index')->with('status','Citación eliminada');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->route('Citacion.index')->with('status', 'No se pueden eliminar elementos con Integridad Referencial');
        }
    }
}
