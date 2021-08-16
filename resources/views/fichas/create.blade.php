@extends('layouts.base')
@section('title', 'Crear Ficha')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/fichas/estilos.css') }}">
</head>
	<h1>Crear ficha</h1>
	<form action="/fichas" method="post" enctype="multipart/form-data" id="formulario">
		@csrf
	  <div class="form-group">
	    <label for="SC_Ficha_NombreProgramaFormacion">Nombre del programa</label>
	    <input type="text" class="form-control" id="SC_Ficha_NombreProgramaFormacion" name="SC_Ficha_NombreProgramaFormacion" value="{{ old('SC_Ficha_NombreProgramaFormacion') }}">
	    @error('SC_Ficha_NombreProgramaFormacion')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <label for="SC_Ficha_NumeroFicha">Número del programa de formación</label>
	    <input type="number" class="form-control" id="SC_Ficha_NumeroFicha" name="SC_Ficha_NumeroFicha" value="{{ old('SC_Ficha_NumeroFicha') }}">
	    @error('SC_Ficha_NumeroFicha')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <label for="SC_Ficha_FechaInicio">Fecha de Inicio</label>
	    <input type="date" class="form-control" id="SC_Ficha_FechaInicio" name="SC_Ficha_FechaInicio" value="{{ old('SC_Ficha_FechaInicio') }}">
	    @error('SC_Ficha_FechaInicio')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <label for="SC_Ficha_FechaFin">Fecha de Finalización</label>
	    <input type="date" class="form-control" id="SC_Ficha_FechaFin" name="SC_Ficha_FechaFin" value="{{ old('SC_Ficha_FechaFin') }}">
	    @error('SC_Ficha_FechaFin')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <button type="submit" class="btn btn-success" id="btncrear">Crear Ficha</button>
	</form>
@endsection