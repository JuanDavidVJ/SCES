<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SolicitarComite;
use App\Models\Falta;
use App\Models\Usuario;
use App\Models\Aprendiz;

class SolicitarComiteController extends Controller
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
            $solicitudes = SolicitarComite::where('SC_SolicitarComite_Descripcion', 'LIKE', '%' . $query . '%')
                          ->get();

                return view('solicitarComite.index', ['solicitudes' => $solicitudes, 'search' => $query]);
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
        $faltas = Falta::all();
        $usuarios = Usuario::all();
        return view('solicitarComite.create')
                    ->with('aprendices', $aprendices)
                    ->with('faltas', $faltas)
                    ->with('usuarios', $usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('Anexo')){
            $file= $request->file('Anexo');
            //cambiar nombre para no generar conflicto
            $Anexo = time() . $file->getClientOriginalName();
            //movemos el archivo
            $file->move('Solicitudes/solicitarComite', $Anexo);

        }

        $solicitar = new SolicitarComite();
        $solicitar->SC_SolicitarComite_Fecha = $request->Fecha;
        $solicitar->SC_SolicitarComite_Descripcion = $request->Descripcion;
        $solicitar->SC_SolicitarComite_Testigos = $request->Testigos;
        $solicitar->SC_SolicitarComite_Observaciones = $request->Observaciones;
        $solicitar->SC_SolicitarComite_Anexo = $request->Anexo;
        $solicitar->SC_Falta_FK = $request->Falta;
        $solicitar->SC_Usuario_FK = $request->Usuario;
        $solicitar->SC_Usuario_FK = $request->Usuario;
        $solicitar->SC_Aprendiz_FK = $request->Aprendiz;
        $solicitar->save();
        return redirect()->route('solicitarComite.index')->with('status', 'Solicitud Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitar = SolicitarComite::find($id);
        return view('solicitarComite.show')
                ->with('solicitar', $solicitar);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitar = SolicitarComite::find($id);
        $aprendices = Aprendiz::all();
        $faltas = Falta::all();
        $usuarios = Usuario::all();
        return view('solicitarComite.edit')
                ->with('solicitar', $solicitar)
                ->with('aprendices', $aprendices)
                ->with('faltas', $faltas)
                ->with('usuarios', $usuarios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $solicitar = SolicitarComite::Find($id);
        $solicitar->SC_SolicitarComite_Fecha = $request->Fecha;
        $solicitar->SC_SolicitarComite_Descripcion = $request->Descripcion;
        $solicitar->SC_SolicitarComite_Testigos = $request->Testigos;
        $solicitar->SC_SolicitarComite_Observaciones = $request->Observaciones;
        $solicitar->SC_Falta_FK = $request->Falta;
        $solicitar->SC_Usuario_FK = $request->Usuario;
        $solicitar->SC_Usuario_FK = $request->Usuario;
        $solicitar->SC_Aprendiz_FK = $request->Aprendiz;
        if ($request->hasFile('Anexo')) {
            $file = $request->file('Anexo');
            $Anexo = $solicitar->Anexo;
            $file->move("Solicitudes/solicitarComite", $Anexo);
        }
        $solicitar->save();
        return redirect()->route('solicitarComite.index')->with('status', 'Solicitud Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $solicitar = SolicitarComite::find($id);
        $solicitar->delete();
        return redirect()->route('solicitarComite.index')->with('status', 'Solicitud eliminado');
    }
}
