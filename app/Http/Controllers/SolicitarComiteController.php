<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSolicitarComiteRequest;
use Illuminate\Http\Request;
use App\Models\SolicitarComite;
use App\Models\TipoFalta;
use App\Models\Usuario;
use App\Models\Aprendiz;
use App\Models\Gravedad;
use App\Models\Reglamento;
use Illuminate\Support\Facades\DB;

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
        $solicitudes = DB::table('sc_solicitar_comite')
                        ->select('*')
                        ->where('SC_SolicitarComite_Responsable', 'LIKE', '%' .$query. '%')
                        ->paginate(10);

                        return view('solicitarComite.index', compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aprendices = Aprendiz::all();
        $tipofaltas = TipoFalta::all();
        $usuarios = Usuario::all();
        $gravedad = Gravedad::all();
        $reglamento = Reglamento::all();
        return view('solicitarComite.create')
                    ->with('aprendices', $aprendices)
                    ->with('tipofaltas', $tipofaltas)
                    ->with('usuarios', $usuarios)
                    ->with('gravedad', $gravedad)
                    ->with('reglamento', $reglamento);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSolicitarComiteRequest $request)
    {
        if($request->hasFile('Anexo')){
            $file= $request->file('Anexo');
            //cambiar nombre para no generar conflicto
            $Anexo = time() . $file->getClientOriginalName();
            //movemos el archivo
            $file->move('archivos/solicitarComite', $Anexo);

        }

        $solicitar = new SolicitarComite();
        $solicitar->SC_SolicitarComite_Responsable = $request->Responsable;
        $solicitar->SC_SolicitarComite_Fecha = $request->Fecha;
        $solicitar->SC_SolicitarComite_Descripcion = $request->Descripcion;
        $solicitar->SC_SolicitarComite_Testigos = $request->Testigos;
        $solicitar->SC_SolicitarComite_Observaciones = $request->Observaciones;
        $solicitar->SC_SolicitarComite_Anexo = $Anexo;
        $solicitar->SC_Falta_FK = $request->TipoFalta;
        $solicitar->SC_Usuario_FK = $request->Usuario;
        $solicitar->SC_Aprendiz_FK = $request->Aprendiz;
        $solicitar->SC_Gravedad_FK = $request->Gravedad;
        $solicitar->SC_Reglamento_FK = $request->Reglamento;
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
        $aprendices = Aprendiz::all();
        $tipofaltas = TipoFalta::all();
        $usuarios = Usuario::all();
        $gravedad = Gravedad::all();
        $reglamento = Reglamento::all();
        return view('solicitarComite.show')
                ->with('solicitar', $solicitar)
                ->with('aprendices', $aprendices)
                ->with('tipofaltas', $tipofaltas)
                ->with('usuarios', $usuarios)
                ->with('gravedad', $gravedad)
                ->with('reglamento', $reglamento);
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
        $tipofaltas = TipoFalta::all();
        $usuarios = Usuario::all();
        $gravedad = Gravedad::all();
        $reglamento = Reglamento::all();
        return view('solicitarComite.edit')
                    ->with('solicitar', $solicitar)
                    ->with('aprendices', $aprendices)
                    ->with('tipofaltas', $tipofaltas)
                    ->with('usuarios', $usuarios)
                    ->with('gravedad', $gravedad)
                    ->with('reglamento', $reglamento);
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
        $solicitar->SC_SolicitarComite_Responsable = $request->Responsable;
        $solicitar->SC_SolicitarComite_Fecha = $request->Fecha;
        $solicitar->SC_SolicitarComite_Descripcion = $request->Descripcion;
        $solicitar->SC_SolicitarComite_Testigos = $request->Testigos;
        $solicitar->SC_SolicitarComite_Observaciones = $request->Observaciones;
        $solicitar->SC_Falta_FK = $request->TipoFalta;
        $solicitar->SC_Usuario_FK = $request->Usuario;
        $solicitar->SC_Aprendiz_FK = $request->Aprendiz;
        $solicitar->SC_Gravedad_FK = $request->Gravedad;
        $solicitar->SC_Reglamento_FK = $request->Reglamento;
        if ($request->hasFile('Anexo')) {
            $file = $request->file('Anexo');
            $Anexo = $solicitar->Anexo;
            $file->move("archivos/solicitarComite", $Anexo);
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
