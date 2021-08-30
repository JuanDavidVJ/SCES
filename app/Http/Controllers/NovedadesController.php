<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novedad;
use App\Models\Aprendiz;
use App\Models\TipoNovedad;
use App\Http\Requests\StoreNovedadesRequest;

class NovedadesController extends Controller
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
            $novedades = Novedad::where('SC_Novedades_Motivo', 'LIKE', '%' . $query . '%')
                          ->get();

                return view('novedades.index', ['novedades' => $novedades, 'search' => $query]);
        }
        
        /*$novedades = Novedad::all();
        return view('novedades.index')
                ->with('novedades', $novedades);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aprendices = Aprendiz::all();
        $tiponovedades = TipoNovedad::all();
        return view('novedades.create')
                ->with('aprendices', $aprendices)
                ->with('tiponovedades', $tiponovedades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNovedadesRequest $request)
    {
        // if ($request->hasFile('SC_Novedades_Foto')){
        //     $file = $request->file('SC_Novedades_Foto');
        //     $SC_Novedades_Foto = time() . $file->getClientOriginalName();
        //     $file->move("images/novedades" , $SC_Novedades_Foto);
        // }
        $novedad = new Novedad();
        // $novedad->SC_Novedades_Descripcion = $request->SC_Novedades_Descripcion;
        // $novedad->SC_Novedades_HabilidadesDestrezas = $request->SC_Novedades_HabilidadesDestrezas;
        // $novedad->SC_Novedades_Observaciones = $request->SC_Novedades_Observaciones;
        $novedad->SC_Novedades_Fecha = $request->SC_Novedades_Fecha;
        $novedad->SC_Aprendiz_FK_ID = $request->SC_Aprendiz_FK_ID;
        $novedad->SC_TipoNovedades_FK_ID = $request->SC_TipoNovedades_FK_ID;
        $novedad->SC_Novedades_Motivo = $request -> SC_Novedades_Motivo;
        $novedad->save();
        return redirect()->route('novedades.index')->with('status', 'Novedad Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $novedad = Novedad::find($id);
        $tiponovedades = TipoNovedad::all();
        return view('novedades.show')
                ->with('novedad', $novedad)
                ->with('tiponovedades', $tiponovedades);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $novedad = Novedad::find($id);
        $aprendices = Aprendiz::all();
        $tiponovedades = TipoNovedad::all();
        return view('novedades.edit')
                    ->with('novedad', $novedad)
                    ->with('aprendices', $aprendices)
                    ->with('tiponovedades', $tiponovedades);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreNovedadesRequest $request, $id)
    {
        $novedad = Novedad::find($id);
        // $novedad->SC_Novedades_Descripcion = $request->SC_Novedades_Descripcion;
        // $novedad->SC_Novedades_HabilidadesDestrezas = $request->SC_Novedades_HabilidadesDestrezas;
        // $novedad->SC_Novedades_Observaciones = $request->SC_Novedades_Observaciones;
        $novedad->SC_Novedades_Fecha = $request->SC_Novedades_Fecha;
        $novedad->SC_Aprendiz_FK_ID = $request->SC_Aprendiz_FK_ID;
        $novedad->SC_TipoNovedades_FK_ID = $request->SC_TipoNovedades_FK_ID;
        $novedad->SC_Novedades_Motivo = $request->SC_Novedades_Motivo;
        // if ($request->hasFile('SC_Novedades_Foto')) {
        //     $file = $request->file('SC_Novedades_Foto');
        //     $SC_Novedades_Foto = $novedad->SC_Novedades_Foto;
        //     $file->move("images/novedades", $SC_Novedades_Foto);
        // }
        $novedad->save();
        return redirect()->route('novedades.index')->with('status', 'Novedad Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $novedad = Novedad::find($id);
        $novedad->delete();
        return redirect()->route('novedades.index')->with('status', 'Novedad eliminada');
    }
}
