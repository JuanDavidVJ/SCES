@extends('layouts.base')
@section('title', 'Crear Solicitud de Comite')
@section('content')
<div class="container">

	<h1>Crear Solicitud</h1>
	<form action="/solicitarComite" method="post" enctype="multipart/form-data">
		@csrf
	  <div class="form-group">
	    <span class="input-group-text" for="Fecha">Fecha</span>
	    <input type="date" class="form-control" id="Fecha" name="Fecha" value="{{ old('Fecha') }}">
	    @error('Fecha')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <span class="input-group-text" for="Descripcion">Descripcion</span>
	    <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="{{ old('Descripcion') }}">
	    @error('Descripcion')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <span class="input-group-text" for="Testigos">Testigos</span>
	    <input type="text" class="form-control" id="Testigos" name="Testigos" value="{{ old('Testigos') }}">
	    @error('Testigos')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>

    <div class="form-group">
		<span class="input-group-text" for="Aprendiz">Aprendiz</span>
		<select name="Aprendiz" id="Aprendiz" class="form-control">
		<option selected>Seleccione un aprendiz</option>
		@foreach($aprendices as $aprendiz)
			<option value="{{$aprendiz->SC_Aprendiz_PK_ID }}">{{$aprendiz->SC_Aprendiz_Documento }} - {{$aprendiz->SC_Aprendiz_Nombres }} {{$aprendiz->SC_Aprendiz_Apellidos }}</option>
		@endforeach
		</select>
		@error('Aprendiz')
		<small>{{$message}}</small>
		@enderror
	</div>

	  <div class="form-group">
	    <span class="input-group-text" for="Observaciones">Observaciones</span>
	    <input type="text" class="form-control" id="Observaciones" name="Observaciones" value="{{ old('Observaciones') }}">
	    @error('Observaciones')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>

	  <div class="form-group">
	  	<span class="input-group-text" for="Anexo">Anexo</span>
	  	<input type="file" class="form-control" id="Anexo" name="Anexo">
	  	@error('Anexo')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>

	  <div class="form-group">
		<span class="input-group-text" for="Falta">Falta</span>
		<select name="Falta" id="Falta" class="form-control">
			<option selected>Seleccione una falta</option>
			@foreach($faltas as $falta)
			 <option value="{{$falta->SC_Falta_PK_ID }}">{{$falta->SC_Falta_ApoyoNoSuperado}}</option>
			@endforeach
		</select>
			@error('Falta')
				<small>{{$message}}</small>
			@enderror
	  </div>

	  <div class="form-group">
		<span class="input-group-text" for="Usuario">Gestor de grupo</span>
		<select name="Usuario" id="Usuario" class="form-control">
			<option selected>Seleccione un gestor</option>
			@foreach($usuarios as $usuario)
			 <option value="{{$usuario->SC_Usuarios_ID }}">{{$usuario->SC_Usuarios_Nombre}}</option>
			@endforeach
		</select>
			@error('Usuario')
				<small>{{$message}}</small>
			@enderror
	  </div>
      <div class="form-group">
		<span class="input-group-text" for="Usuario">Instructor</span>
		<select name="Usuario" id="Usuario" class="form-control">
			<option selected>Seleccione un instructor</option>
			@foreach($usuarios as $usuario)
			 <option value="{{$usuario->SC_Usuarios_ID }}">{{$usuario->SC_Usuarios_Nombre}}</option>
			@endforeach
		</select>
			@error('Usuario')
				<small>{{$message}}</small>
			@enderror
	  </div>
	  
	  <button type="submit" class="btn btn-success mb-5">Crear Solicitud</button>
	</form>
</div>
@endsection