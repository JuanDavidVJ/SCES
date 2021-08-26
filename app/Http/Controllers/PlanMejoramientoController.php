<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActoAdministrativo;
use App\Models\PlanMejoramiento;
use App\Http\Requests\StorePlanMejoramientoRequest;


class PlanMejoramientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $planm = PlanMejoramiento::all();
        return view('planmejoramiento.index')->with('planm', $planm);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actoadministrativo = ActoAdministrativo::all();
        return view('planmejoramiento.create')->with('actoadministrativo', $actoadministrativo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlanMejoramientoRequest $request)
    {
        if($request->hasFile('SC_PlanMejoramiento')){
            $file= $request->file('SC_PlanMejoramiento');
            //cambiar nombre para no generar conflicto
            $SC_PlanMejoramiento = time() . $file->getClientOriginalName();
            //movemos el archivo
            $file->move('archivos/planmejoramiento', $SC_PlanMejoramiento);

        }
        
        $planm = new PlanMejoramiento();
         $planm->SC_PlanMejoramiento_Descripcion = $request->SC_PlanMejoramiento_Descripcion;

         $planm->SC_PlanMejoramiento_Fecha = $request->SC_PlanMejoramiento_Fecha;
         
         $planm->SC_PlanMejoramiento_FechaMaxima  = $request->SC_PlanMejoramiento_FechaMaxima;

         #$planm->SC_PlanMejoramiento_EvidenciasNoPresentadas  = $request->SC_PlanMejoramiento_EvidenciasNoPresentadas;

         $planm->SC_ActoAdministrativo_FK_ID = $request->SC_ActoAdministrativo_FK_ID;

         $planm->SC_PlanMejoramiento = $SC_PlanMejoramiento;
         
         $planm->save();
         return redirect()->route('planmejoramiento.index')->with('status', 'Plan de mejoramiento creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $planm = PlanMejoramiento::find($id);
        //$actoadministrativo = ActoAdministrativo::all();
        return view('planmejoramiento.show')->with('planm', $planm);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planm = PlanMejoramiento::find($id);
        $actoadministrativo = ActoAdministrativo::all();
         return view('planmejoramiento.edit')->with('planm', $planm)->with('actoadministrativo', $actoadministrativo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePlanMejoramientoRequest $request, $id)
    {
        $planm = PlanMejoramiento::find($id);

         $planm->SC_PlanMejoramiento_Descripcion = $request->SC_PlanMejoramiento_Descripcion;

         $planm->SC_PlanMejoramiento_Fecha = $request->SC_PlanMejoramiento_Fecha;
         
         $planm->SC_PlanMejoramiento_FechaMaxima  = $request->SC_PlanMejoramiento_FechaMaxima;

         #$planm->SC_PlanMejoramiento_EvidenciasNoPresentadas  = $request->SC_PlanMejoramiento_EvidenciasNoPresentadas;

         $planm->SC_ActoAdministrativo_FK_ID = $request->SC_ActoAdministrativo_FK_ID;

         if($request->hasFile('SC_PlanMejoramiento')){
            $file= $request->file('SC_PlanMejoramiento');
            //cambiar nombre para no generar conflicto
            $SC_PlanMejoramiento=$planm->SC_PlanMejoramiento;
            //movemos el archivo
            $file->move('archivos/planmejoramiento', $SC_PlanMejoramiento);

        }
         
         
         $planm->save();
         return redirect()->route('planmejoramiento.index')->with('status', 'Plan de mejoramiento actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanMejoramiento $planm)
    {
        $planm = PlanMejoramiento::find($planm);
        $actoadministrativo = ActoAdministrativo::all();
        if(count($planm->actoadministrativo))
        {
           return redirect()->route('planmejoramiento.index')->with('status', 'Plan de mejoramiento no puede ser eliminado'); 
        }
        else{
        $planm->delete();
        }
        return redirect()->route('planmejoramiento.index')->with('status', 'Plan de mejoramiento eliminado');
    }
}