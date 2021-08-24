<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaltasRequest;
use Illuminate\Http\Request;
use App\Models\Falta;
use App\Models\Reglamento;
use App\Models\TipoFalta;
use Facade\FlareClient\Stacktrace\File;

class FaltasController extends Controller
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
            $faltas = Falta::where('SC_Falta_ApoyoNoSuperado', 'LIKE', '%' . $query . '%')
                          ->get();

                return view('faltas.index', ['faltas' => $faltas, 'search' => $query]);
        }
        /*$faltas = Falta::all();
        return view('faltas.index')->with('faltas', $faltas);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faltas = Falta::all();
        $reglamentos = Reglamento::all();
        $tipoFaltas = TipoFalta::all();
        return view('faltas.create')->with('faltas', $faltas)->with('reglamentos', $reglamentos)->with('tipoFaltas', $tipoFaltas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaltasRequest $request)
    {
        /* ______________________________________________________ */
        /*
            This is if you want storage documents in the system    


            if ($request->hasFile('documentosAnteriores')) {
            $file = $request->file('documentosAnteriores');
            $archivo = time() . $file->getClientOriginalName();
            $file->move("documents/faltas", $archivo);
        }
        */        
        
        $falta = new Falta();
        $falta->SC_Falta_ApoyoNoSuperado = $request->apoyoNoSuperado;
        $falta->SC_Falta_EstrategiaNoSuperada = $request->estrategiaNoSuperada;
        $falta->SC_Falta_ActividadesRealizadasAprendiz = $request->actividadesNoRealizadasAprendiz;
        $falta->SC_Falta_UrlDocumentosAnteriores = $request->documentosAnteriores;
        $falta->SC_Falta_ActuacionAprendiz = $request->actuacionAprendiz;
        $falta->SC_TipoFalta_FK_ID = $request->tipoFalta;
        $falta->SC_Reglamento_FK_ID = $request->reglamento;

        // $falta->SC_Falta_UrlDocumentosAnteriores = $archivo;
        $falta->save();
        
        return redirect()->route('faltas.index')->with('status','Falta creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faltas = Falta::find($id);
        return view('faltas.show')->with('falta', $faltas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faltas = Falta::find($id);
        $reglamentos = Reglamento::all();
        $tipoFaltas = TipoFalta::all();

        return view('faltas.edit')->with('falta', $faltas)->with('reglamentos', $reglamentos)->with('tipoFaltas',$tipoFaltas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFaltasRequest $request, $id)
    {
        /* ______________________________________________________ */
        /*
            This is if you want storage documents in the system    

            if ($request->hasFile('documentosAnteriores')) {
            $file = $request->file('documentosAnteriores');
            $archivo = $falta->SC_Falta_UrlDocumentosAnteriores;
            $file->move("documents/faltas", $archivo);
        }
        */        
        
        $falta = Falta::find($id);
        $falta->SC_Falta_ApoyoNoSuperado = $request->apoyoNoSuperado;
        $falta->SC_Falta_EstrategiaNoSuperada = $request->estrategiaNoSuperada;
        $falta->SC_Falta_ActividadesRealizadasAprendiz = $request->actividadesNoRealizadasAprendiz;
        $falta->SC_Falta_UrlDocumentosAnteriores = $request->documentosAnteriores;
        $falta->SC_Falta_ActuacionAprendiz = $request->actuacionAprendiz;
        $falta->SC_TipoFalta_FK_ID = $request->tipoFalta;
        $falta->SC_Reglamento_FK_ID = $request->reglamento;

        // $falta->SC_Falta_UrlDocumentosAnteriores = $archivo;
        $falta->save();
        
        return redirect()->route('faltas.index')->with('status','Falta actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $falta = Falta::find($id);
        $falta->delete();
        // File::delete("documents/faltas/".$falta->SC_Falta_UrlDocumetosAnteriores);
        return redirect()->route('faltas.index')->with('status','Falta eliminada');
    }
}
