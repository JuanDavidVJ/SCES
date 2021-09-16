<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistroUsuarios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #Trayendo los datos de bd
        $usuarios = User::all();
        return view('RegistrarUsuarios.index') -> with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $usuarios = User::all();
    //     return view('RegistrarUsuarios.create') -> with('usuarios', $usuarios);
    // }
    public function create(Request $request)
    {
        if(Auth::user()->tipoUsuario == 4){
            return view('RegistrarUsuarios.create');
        }else{
            return view('ingreso');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->tipoUsuario == 4){
            $input = $request->all();
            User::create([
                'username' => $input['username'],
                'documento' => $input['documento'],
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'tipoUsuario' => $input['tipoUsuario'],
            ]);
        return redirect()->route('RegistrarUsuarios.index')->with('status', 'Usuario Creado');
        }else{
            return view('ingreso');
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
        if(Auth::user()->tipoUsuario == 4){
        $usuarios = User::find($id);
        return view('RegistrarUsuarios.show')
                ->with('usuarios', $usuarios);
        }else{
            return view('ingreso');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->tipoUsuario == 4){
        $usuarios = User::find($id);
        return view('RegistrarUsuarios.edit')
                ->with('usuarios', $usuarios);
        }else{
            return view('ingreso');
        }
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
        if(Auth::user()->tipoUsuario == 4){
            try{
                $usuario = User::find($id);
                $usuario->username = $request->username;
                $usuario->documento = $request->documento;
                $usuario->name = $request->name;
                $usuario->email = $request->email;
                $usuario->password = Hash::make($request->password);
                $usuario->tipoUsuario = $request->tipoUsuario;
                $usuario->save();
                return redirect()->route('RegistrarUsuarios.index')->with('status','Usuario Actualizado');
            }
            catch(\Illuminate\Database\QueryException $e){
                return redirect()->route('RegistrarUsuarios.index')->with('status', 'No se ha podido actualizar');
            }
        }else{
            return view('ingreso');
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
        if(Auth::user()->tipoUsuario == 4){
            $usuarios = User::find($id);
            $usuarios->delete();
            return redirect()->route('RegistrarUsuarios.index')->with('status', 'Usuario eliminado');
        }else{
            return view('ingreso');
        }
    }
}
