<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estimulos;
use App\Models\TipoEstimulos;
use App\Models\Aprendiz;
use App\Http\Requests\StoreEstimuloRequest;


class EstimulosController extends Controller
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
            $estimulos = Estimulos::where('SC_Estimulos_DescripcionEstimulo', 'LIKE', '%' . $query . '%')
                          ->get();

                return view('estimulos.index', ['estimulos' => $estimulos, 'search' => $query]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         $aprendiz = Aprendiz::all();
         $tipoestimulos = TipoEstimulos::all();
         $ficha = Ficha::all();
        return view('estimulos.create')->with('aprendiz', $aprendiz)->with('tipoestimulos', $tipoestimulos)->with('ficha', $ficha);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstimuloRequest $request)
    {
         $estimulos = new Estimulos();
         $estimulos->SC_Estimulos_Reporta = $request->SC_Estimulos_Reporta;
         $estimulos->SC_Estimulos_Razon = $request->SC_Estimulos_Razon;
         $estimulos->SC_Estimulos_Detalles = $request->SC_Estimulos_Detalles;
         $estimulos->SC_Estimulos_Fecha = $request->SC_Estimulos_Fecha;
         $estimulos->SC_Ficha_FK_ID = $request->SC_Ficha_FK_ID;
         $estimulos->SC_Aprendiz_FK_ID =$request->SC_Aprendiz_FK_ID;
         $estimulos->SC_TipoEstimulos_FK_ID = $request->SC_TipoEstimulos_FK_ID;
         $estimulos->save();
         return redirect()->route('estimulos.index')->with('status', 'Estimulo creado');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estimulos = Estimulos::find($id);
        return view('estimulos.show')
        ->with('estimulos', $estimulos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estimulos = Estimulos::find($id);

         $aprendiz = Aprendiz::all();
         $tipoestimulos = TipoEstimulos::all();
         return view('estimulos.edit')->with('estimulos', $estimulos)->with('aprendiz', $aprendiz)->with('tipoestimulos', $tipoestimulos);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEstimuloRequest $request, $id)
    {
        $estimulos = Estimulos::find($id);
        $estimulos->SC_Estimulos_Reporta = $request->SC_Estimulos_Reporta;
        $estimulos->SC_Estimulos_Razon = $request->SC_Estimulos_Razon;
        $estimulos->SC_Estimulos_Detalles = $request->SC_Estimulos_Detalles;
        $estimulos->SC_Estimulos_Fecha = $request->SC_Estimulos_Fecha;
        $estimulos->SC_Ficha_FK_ID = $request->SC_Ficha_FK_ID;
        $estimulos->SC_Aprendiz_FK_ID =$request->SC_Aprendiz_FK_ID;
        $estimulos->SC_TipoEstimulos_FK_ID = $request->SC_TipoEstimulos_FK_ID;
        $estimulos->save();
         return redirect()->route('estimulos.index')->with('status', 'Estimulo creado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estimulos = Estimulos::find($id);
        $estimulos->delete();
        return redirect()->route('estimulos.index')->with('status', 'estimulo eliminado');
    }
}
