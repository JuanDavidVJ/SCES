@extends('layouts.base')
@section('title', 'Crear Usuario')
@section('content')

<div class="container">
	<h1>Crear Usuario</h1>
	<form action="{{ route('register') }}" method="post"  id="formulario">
		@csrf
	  <div class="form-group">
	    <span class="input-group-text" for="username">Username</span>
	    <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}">
	    @error('username')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	   <span class="input-group-text" for="documento">Documento</span>
	    <input type="number" class="form-control" id="documento" name="documento" value="{{ old('documento') }}">
	    @error('documento')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	   <span class="input-group-text" for="name">Nombre</span>
	    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
	    @error('name')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	   <span class="input-group-text" for="email">Correo</span>
	    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
	    @error('email')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	   <span class="input-group-text" for="password">Contraseña</span>
	    <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
	    @error('password')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
		<span class="input-group-text" for="tipoUsuario">Tipo de Usuario</span>
		<select name="tipoUsuario" id="tipoUsuario" class="form-control">
      <option selected>Seleccione un tipo de usuario</option>
			@foreach($tipoUsuario as $tipoUsuarios)
			<option value="{{$tipoUsuarios->SC_TipoUsuario_PK_ID}}">{{$tipoUsuarios->SC_TipoUsuario_Descripcion}}</option>
			@endforeach
		</select>
		@error('tipoUsuario')
		<small style="color: red;">{{ $message }}</small>
		@enderror
	</div>
	  <button type="submit" class="btn btn-success" id="btncrear">Crear Usuario</button>
	</form>
</div>
@endsection