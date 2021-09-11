<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActoAdministrativo;
use App\Models\TipoPlan;
use App\Models\ActaComite;
use App\Models\TipoNotificacion;
use App\Models\Usuario;
use App\Http\Requests\StoreAdministrativoRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceivedNotificacion;
use Illuminate\Pagination\Paginator;

class ActoAdministrativoSancionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = trim($request->get('search'));
        $actoas = DB::table('sc_notificaciones')
                        ->select('*')
                        ->where('SC_Notificacion_FechaInicial', 'LIKE', '%' .$query. '%')
                        ->paginate(10);

                        return view('actoadministrativo.index', compact('actoas'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ActaC = ActaComite::all();
        $TipoN = TipoNotificacion::all();
        $TipoP = TipoPlan::all();
        $usuario = Usuario::all();
        return view('actoadministrativo.create')->with('ActaC', $ActaC)->with('TipoN', $TipoN)->with('TipoP', $TipoP)->with('usuario', $usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdministrativoRequest $request)
    {
        
        $actoas = new ActoAdministrativo();
         $actoas->SC_Notificacion_Sugerencia = $request->SC_Notificacion_Sugerencia;

         $actoas->SC_Notificacion_TipoPlan = $request->SC_Notificacion_TipoPlan;


         $actoas->SC_Notificacion_Instructor = $request->SC_Notificacion_Instructor;

         $actoas->SC_Notificacion_FechaInicial = $request->SC_Notificacion_FechaInicial;

         $actoas->SC_Notificacion_FechaLimite = $request->SC_Notificacion_FechaLimite;

         $actoas->SC_ActaComite_FK = $request->SC_ActaComite_FK;

         $actoas->SC_TipoNotificacion_FK = $request->SC_TipoNotificacion_FK;

         $actoas->SC_Notificacion_Forma = $request->SC_Notificacion_Forma;

         $actoas->SC_Notificacion_Funcionario = $request->SC_Notificacion_Funcionario;

         $actoas->save();


         Mail::to($actoas->ActaComite->citacion->solicitarComite->aprendiz->SC_Aprendiz_Correo)->queue(new MessageReceivedNotificacion(
             $actoas, 
             $actoas->ActaComite->citacion->solicitarComite->aprendiz, 
             $actoas->ActaComite->citacion->solicitarComite, 
             $actoas->ActaComite, 
             $actoas->ActaComite->citacion->solicitarComite->tipofalta, 
             $actoas->ActaComite->citacion->solicitarComite->gravedad, 
             $actoas->ActaComite->citacion->solicitarComite->reglamento,  
             $actoas->ActaComite->citacion, 
             $actoas->TipoP , 
             $actoas->TipoN , 
             $actoas->Usuario));

         return redirect()->route('actoadministrativo.index')->with('status', 'Notificacion Creada');
        //  return redirect()->route('actoadministrativo.index')->with('status', $actoas->TipoP->SC_TipoPlan_Descripcion . $actoas->TipoN->SC_TipoNotificacion_Descripcion . $actoas->Usuario->SC_Usuarios_Nombre);
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
        $ActaC = ActaComite::all();
        $TipoN = TipoNotificacion::all();
        $TipoP = TipoPlan::all();
        $usuario = Usuario::all();
        return view('actoadministrativo.show')->with('actoas', $actoas)->with('ActaC', $ActaC)->with('TipoN', $TipoN)->with('TipoP', $TipoP)->with('usuario', $usuario);


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
        $ActaC = ActaComite::all();
        $TipoN = TipoNotificacion::all();
        $TipoP = TipoPlan::all();
        $usuario = Usuario::all();
        return view('actoadministrativo.edit')->with('actoas', $actoas)->with('ActaC', $ActaC)->with('TipoN', $TipoN)->with('TipoP', $TipoP)->with('usuario', $usuario);
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


         
        $actoas->SC_Notificacion_Sugerencia = $request->SC_Notificacion_Sugerencia;

         $actoas->SC_Notificacion_TipoPlan = $request->SC_Notificacion_TipoPlan;

         $actoas->SC_Notificacion_Instructor = $request->SC_Notificacion_Instructor;

         $actoas->SC_Notificacion_FechaInicial = $request->SC_Notificacion_FechaInicial;

         $actoas->SC_Notificacion_FechaLimite = $request->SC_Notificacion_FechaLimite;

         $actoas->SC_ActaComite_FK = $request->SC_ActaComite_FK;

         $actoas->SC_TipoNotificacion_FK = $request->SC_TipoNotificacion_FK;

          $actoas->SC_Notificacion_Forma = $request->SC_Notificacion_Forma;

         $actoas->SC_Notificacion_Funcionario = $request->SC_Notificacion_Funcionario;

         $actoas->save();
         return redirect()->route('actoadministrativo.index')->with('status', 'Notificacion Actualizada');
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
        return redirect()->route('actoadministrativo.index')->with('status', 'la notificacion se ha eliminado');
    }
}
