<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comite;
use App\Models\Falta;
use App\Models\Usuario;
use App\Models\ActoAdministrativoSanciones;
use App\Models\Aprendiz;
use App\Models\Citacion;
use App\Models\Impugnacion;
use App\Http\Requests\StoreComiteRequest;




class ComiteController extends Controller
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
            $comite = Comite::where('SC_Comite_DescripcionHechos', 'LIKE', '%' . $query . '%')
                          ->get();

                return view('Comite.index', ['Comite' => $comite, 'search' => $query]);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //$comite=Comite::all();
        $falta=Falta::all();   
        $usuario=Usuario::all();  
        $citacion=Citacion::all();           
           
        return view('comite.create')
        //->with('Comite', $comite)
        ->with('Falta',$falta)
        ->with('Usuario',$usuario)
        ->with('Citacion', $citacion);


        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComiteRequest $request)
    {
        if($request->hasFile('SC_Evidencias')){
            $file= $request->file('SC_Evidencias');
            //cambiar nombre para no generar conflicto
            $SC_Evidencias = time() . $file->getClientOriginalName();
            //movemos el archivo
            $file->move('archivos/evidenciasComite', $SC_Evidencias);

        }
     
        $comite= new Comite();
        $comite->SC_Comite_DescripcionHechos=$request->SC_Comite_DescripcionHechos;
        $comite->SC_Comite_Testigos=$request->SC_Comite_Testigos;
        $comite->SC_Comite_Observacion=$request->SC_Comite_Observacion;
        $comite->SC_Usuarios_FK_ID=$request->SC_Usuarios_FK_ID;
        $comite->SC_Falta_FK_ID=$request->SC_Falta_FK_ID;
        $comite->SC_Evidencias=$SC_Evidencias;
        $comite->SC_Citacion_FK_ID=$request->SC_Citacion_FK_ID;
        

        $comite->save();
        return redirect()->route('comite.index')->with('status', 'Comite creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comite $comite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comite=Comite::find($id);
        return view('comite.show')
        ->with('comite', $comite);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comite  $comite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comite=Comite::find($id);
        $usuario=Usuario::all();
        $falta=Falta::all(); 
        $citacion=Citacion::all();          
        return view('comite.edit')->with('Comite',$comite)->with('Falta',$falta)->with('Usuario',$usuario) ->with('Citacion', $citacion);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comite  $comite
     * @return \Illuminate\Http\Responsee
     */
    public function update(StoreComiteRequest $request,$id)
    {
        $comite=Comite::find($id);
        //$comite = new Comite();
        $comite->SC_Comite_DescripcionHechos=$request->SC_Comite_DescripcionHechos;      
        $comite->SC_Comite_Testigos=$request->SC_Comite_Testigos;
        $comite->SC_Comite_Observacion=$request->SC_Comite_Observacion;
        $comite->SC_Usuarios_FK_ID=$request->SC_Usuarios_FK_ID;
        $comite->SC_Falta_FK_ID=$request->SC_Falta_FK_ID;    
        $comite->SC_Evidencias=$request->SC_Evidencias;
        $comite->SC_Falta_FK_ID=$request->SC_Falta_FK_ID;    
        $comite->SC_Citacion_FK_ID=$request->SC_Citacion_FK_ID;
       
        $comite->save();
        return redirect()->route('comite.index')->with('status','Comite actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Comite  $comite
     * @return \Illuminate\Http\Respons
     */
    public function destroy($id)
    {
        $comite=Comite::find($id);
        $comite->delete();
        return redirect()->route('comite.index')->with('status','Comite eliminado');
    }
}
