@extends('layouts.base')
@section('title', 'Modificar Usuario')
@section('content')

<div class="container">
	<h1>Modificar Usuario</h1>
	<form action="/RegistrarUsuarios/{{$usuarios->id}}" method="post" enctype="multipart/form-data" id="formulario">
    @method('PUT')
		@csrf
	  <div class="form-group">
	    <span class="input-group-text" for="username">Username</span>
	    <input type="text" class="form-control" id="username" name="username" value="{{ $usuarios->username }}">
	    @error('username')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	   <span class="input-group-text" for="documento">Documento</span>
	    <input type="number" class="form-control" id="documento" name="documento" value="{{ $usuarios->documento }}">
	    @error('documento')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	   <span class="input-group-text" for="name">Nombre</span>
	    <input type="text" class="form-control" id="name" name="name" value="{{ $usuarios->name }}">
	    @error('name')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	   <span class="input-group-text" for="email">Correo</span>
	    <input type="email" class="form-control" id="email" name="email" value="{{ $usuarios->email }}">
	    @error('email')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	   <span class="input-group-text" for="password">Contraseña</span>
	    <input type="password" class="form-control" id="password" name="password" value="{{ $usuarios->password }}">
	    @error('password')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
		<span class="input-group-text" for="tipoUsuario">Tipo de Usuario</span>
		<select name="tipoUsuario" id="tipoUsuario" class="form-control">
            <option value="1">Subdirector</option>
            <option value="2">Instructor</option>
            <option value="3">Gestor Comité</option>
			<option value="4">Administrador</option>
        </select>
		@error('tipoUsuario')
		<small style="color: red;">{{ $message }}</small>
		@enderror
	</div>
	  <button type="submit" class="btn btn-success" id="btncrear">Crear Usuario</button>
	</form>
</div>
@endsection