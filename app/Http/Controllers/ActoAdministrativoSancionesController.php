<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActoAdministrativo;
use App\Models\TipoPlan;
use App\Models\ActaComite;
use App\Models\TipoNotificacion;
use App\Models\Usuario;
use App\Http\Requests\StoreAdministrativoRequest;

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

        if($request){
            $actoas = ActoAdministrativo::where('SC_ActaComite_FK', 'LIKE', '%' . $query . '%')
                          ->get();

                return view('actoadministrativo.index', ['actoas' => $actoas, 'search' => $query]);
        }
        /*$actoas = ActoAdministrativo::all();
         $comite = Comite::all();
        return view('actoadministrativo.index')->with('actoas', $actoas)->with('comite', $comite);*/
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
        if($request->hasFile('SC_Notificacion_Plan')){
            $file= $request->file('SC_Notificacion_Plan');
            //cambiar nombre para no generar conflicto
            $SC_Notificacion_Plan = time() . $file->getClientOriginalName();
            //movemos el archivo
            $file->move('archivos/actoadministrativo', $SC_Notificacion_Plan);

        }

        $actoas = new ActoAdministrativo();
         $actoas->SC_Notificacion_Sugerencia = $request->SC_Notificacion_Sugerencia;

         $actoas->SC_Notificacion_TipoPlan = $request->SC_Notificacion_TipoPlan;

         $actoas->SC_Notificacion_Plan = $SC_Notificacion_Plan;

         $actoas->SC_Notificacion_Instructor = $request->SC_Notificacion_Instructor;

         $actoas->SC_Notificacion_FechaInicial = $request->SC_Notificacion_FechaInicial;

         $actoas->SC_Notificacion_FechaLimite = $request->SC_Notificacion_FechaLimite;

         $actoas->SC_ActaComite_FK = $request->SC_ActaComite_FK;

         $actoas->SC_TipoNotificacion_FK = $request->SC_TipoNotificacion_FK;

         $actoas->SC_Notificacion_Forma = $request->SC_Notificacion_Forma;

         $actoas->SC_Notificacion_Funcionario = $request->SC_Notificacion_Funcionario;

         $actoas->save();
         return redirect()->route('actoadministrativo.index')->with('status', 'Notificacion Creada');
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


         if($request->hasFile('SC_Notificacion_Plan')){
            $file= $request->file('SC_Notificacion_Plan');
            //cambiar nombre para no generar conflicto
            $SC_Notificacion_Plan=$actoas->SC_Notificacion_Plan;
            //movemos el archivo
            $file->move('archivos/actoadministrativo', $SC_Notificacion_Plan);

        }
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
