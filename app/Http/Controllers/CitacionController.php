<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citacion;
use App\Models\SolicitarComite;
use App\Http\Requests\StoreCitacionRequest;

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
     
        $citacion= new Citacion();
        $citacion->SC_Citacion_FechaCitacion=$request->SC_Citacion_FechaCitacion;
        $citacion->SC_Citacion_Hora=$request->SC_Citacion_Hora;
        $citacion->SC_Citacion_Lugar=$request->SC_Citacion_Lugar;
        $citacion->SC_Citacion_Ciudad=$request->SC_Citacion_Ciudad;
        $citacion->SC_Citacion_Centro=$request->SC_Citacion_Centro;
        $citacion->SC_Solicitud_FK=$request->SC_Solicitud_FK;
        $citacion->save();

        // for ($i=0; $i < count($citacion->solicitarComite->aprendiz); $i++) { 
        //     Mail::to($citacion->solicitarComite->aprendiz[$i]->SC_Aprendiz_Correo)->queue(new MessageReceived($citacion, $citacion->solicitarComite->aprendiz[$i]));    
        // }

        Mail::to($citacion->solicitarComite->aprendiz->SC_Aprendiz_Correo)->queue(new MessageReceived($citacion, $citacion->solicitarComite->aprendiz));
        
        return redirect()->route('Citacion.index')->with('status', 'Citacion creada');
        // return redirect()->route('Citacion.index')->with('status', count($citacion->solicitarComite->aprendiz));
        // return redirect()->route('Citacion.index')->with('status', $citacion->solicitarComite->aprendiz);

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
        $citacion=Citacion::find($id);
        $citacion->SC_Citacion_FechaCitacion=$request->SC_Citacion_FechaCitacion;
        $citacion->SC_Citacion_Hora=$request->SC_Citacion_Hora;
        $citacion->SC_Citacion_Lugar=$request->SC_Citacion_Lugar;
        $citacion->SC_Citacion_Ciudad=$request->SC_Citacion_Ciudad;
        $citacion->SC_Citacion_Centro=$request->SC_Citacion_Centro;
        $citacion->SC_Solicitud_FK=$request->SC_Solicitud_FK;
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
