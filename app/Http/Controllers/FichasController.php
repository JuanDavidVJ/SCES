<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;
use App\Http\Requests\StoreFichasRequest;

class FichasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichas = Ficha::all();
        return view('fichas.index')
                ->with('fichas', $fichas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fichas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFichasRequest $request)
    {
        $ficha = new Ficha();
        $ficha->SC_Ficha_FechaInicio = $request->SC_Ficha_FechaInicio;
        $ficha->SC_Ficha_NumeroFicha = $request->SC_Ficha_NumeroFicha;
        $ficha->SC_Ficha_FechaFin = $request->SC_Ficha_FechaFin;
        $ficha->SC_Ficha_NombreProgramaFormacion = $request->SC_Ficha_NombreProgramaFormacion;
        $ficha->save();
        return redirect()->route('fichas.index')->with('status', 'Ficha Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ficha = Ficha::find($id);
        return view('fichas.show')
                ->with('ficha', $ficha);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ficha = Ficha::find($id);
        return view('fichas.edit')->with('ficha', $ficha);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFichasRequest $request, $id)
    {
        $ficha = Ficha::find($id);
        $ficha->SC_Ficha_FechaInicio = $request->SC_Ficha_FechaInicio;
        $ficha->SC_Ficha_NumeroFicha = $request->SC_Ficha_NumeroFicha;
        $ficha->SC_Ficha_FechaFin = $request->SC_Ficha_FechaFin;
        $ficha->SC_Ficha_NombreProgramaFormacion = $request->SC_Ficha_NombreProgramaFormacion;
        $ficha->save();
        return redirect()->route('fichas.index')->with('status', 'Ficha Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ficha = Ficha::find($id);
        $ficha->delete();
        return redirect()->route('fichas.index')->with('status', 'Ficha eliminada');
    }
}
