@extends('layouts.base')
@section('title', 'Crear Acta')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>

<div class="container">
	<h1 class="mt-3">Crear Acta</h1>
	<form action="/ActaComite" method="post" enctype="multipart/form-data" id="formulario">
		@csrf
	  <div class="form-group">
	  <span class="input-group-text" for="SC_ActaComite_Codigo">Codigo</span>
	    <input type="text" class="form-control" id="SC_ActaComite_Codigo" name="SC_ActaComite_Codigo">
	    @error('SC_ActaComite_Codigo')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	  <span class="input-group-text" for="SC_ActaComite_Descripcion">Descripcion</span>
	    <input type="text" class="form-control" id="SC_ActaComite_Descripcion" name="SC_ActaComite_Descripcion"> 
	    @error('SC_ActaComite_Descripcion')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	  <span class="input-group-text" for="SC_ActaComite_Estado">Estado</span>
	    <input type="text" class="form-control" id="SC_ActaComite_Estado" name="SC_ActaComite_Estado"> 
	    @error('SC_ActaComite_Estado')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	  <span class="input-group-text" for="SC_ActaComite_NumeroSolicitud">Numero Solicitud</span>
	  	<input type="number" class="form-control" id="SC_ActaComite_NumeroSolicitud" name="SC_ActaComite_NumeroSolicitud">
	  	@error('SC_ActaComite_NumeroSolicitud')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	<div class="form-group">
	  <span class="input-group-text" for="SC_ActaComite_Motivo">Motivo</span>
		<input type="text" class="form-control" id="SC_ActaComite_Motivo" name="SC_ActaComite_Motivo">
		@error('SC_ActaComite_Motivo')
		  <small>{{ $message }}</small>
	  @enderror
	</div>
	<div class="form-group">
	   <span class="input-group-text" for="SC_ActaComite_Testigos">Testigos</span>
		<input type="text" class="form-control" id="SC_ActaComite_Testigos" name="SC_ActaComite_Testigos">
		@error('SC_ActaComite_Testigos')
		  <small>{{ $message }}</small>
	  @enderror
	</div>
	<div class="form-group">
	   <span class="input-group-text" for="SC_ActaComite_EnviarCitacionAntecedentes">Antecedentes</span>
		<input type="text" class="form-control" id="SC_ActaComite_EnviarCitacionAntecedentes" name="SC_ActaComite_EnviarCitacionAntecedentes">
		@error('SC_ActaComite_EnviarCitacionAntecedentes')
		  <small>{{ $message }}</small>
	  @enderror
	</div>
	
	  <button type="submit" class="btn btn-success mb-5">Crear</button>
	</form>
</div>
@endsection
