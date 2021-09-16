<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;
use App\Http\Requests\StoreFichasRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use App\Exceptions\CustomException;
use Illuminate\Support\Facades\Auth;

class FichasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = trim($request->get('search'));
        $fichas = DB::table('sc_ficha')
                    ->select('*')
                    ->where('SC_Ficha_NumeroFicha', 'LIKE', '%' .$query. '%')
                    ->paginate(10);

                    return view('fichas.index', compact('fichas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->tipoUsuario == 3){
            $usuario = Usuario::all();
            return view('fichas.create')
                    ->with('usuario',$usuario); 
        }
        else{
            return redirect()->route('fichas.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFichasRequest $request)
    {
        try{
            $ficha = new Ficha();
            $ficha->SC_Ficha_FechaInicio = $request->SC_Ficha_FechaInicio;
            $ficha->SC_Ficha_NumeroFicha = $request->SC_Ficha_NumeroFicha;
            $ficha->SC_Ficha_FechaFin = $request->SC_Ficha_FechaFin;
            $ficha->SC_Ficha_NombreProgramaFormacion = $request->SC_Ficha_NombreProgramaFormacion;
            $ficha->SC_Ficha_Gestor = $request->SC_Ficha_Gestor;
            $ficha->save();
            return redirect()->route('fichas.index')->with('status', 'Ficha Creada');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->route('fichas.index')->with('status', 'No se ha podido crear la Ficha');
        }
        
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
                ->with('ficha', $ficha );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->tipoUsuario == 3){
            $ficha = Ficha::find($id);
            $usuario = Usuario::all();
            return view('fichas.edit')
                    ->with('ficha', $ficha)
                    ->with('usuario', $usuario);
        }
        else{
            return redirect()->route('fichas.index');
        }
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
        try{
            $ficha = Ficha::find($id);
            $ficha->SC_Ficha_FechaInicio = $request->SC_Ficha_FechaInicio;
            $ficha->SC_Ficha_NumeroFicha = $request->SC_Ficha_NumeroFicha;
            $ficha->SC_Ficha_FechaFin = $request->SC_Ficha_FechaFin;
            $ficha->SC_Ficha_NombreProgramaFormacion = $request->SC_Ficha_NombreProgramaFormacion;
            $ficha->SC_Ficha_Gestor = $request->SC_Ficha_Gestor;
            $ficha->save();
            return redirect()->route('fichas.index')->with('status', 'Ficha Actualizada');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->route('fichas.index')->with('status', 'No se ha podido actualizar');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function destroy($id)
    {
        if(Auth::user()->tipoUsuario == 3){
            try{
                $ficha = Ficha::find($id);
                $ficha->delete();
                return redirect()->route('fichas.index')->with('status', 'Ficha eliminada'); 
            }
            catch(\Illuminate\Database\QueryException $e){
                return redirect()->route('fichas.index')->with('status', 'No se pueden eliminar elementos con Integridad Referencial');
            }
        }
        else{
            return redirect()->route('fichas.index');
        }
    }
}
