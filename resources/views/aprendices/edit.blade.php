@extends('layouts.base')
@section('title', 'Modificar Aprendiz')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>

<div class="container mb-5">
	<h1>Modificar Aprendiz</h1>
	<form action="/aprendices/{{$aprendiz->SC_Aprendiz_PK_ID}}" method="post" enctype="multipart/form-data" id="formulario">
    @method('PUT')
		@csrf
	  <div class="form-group">
	    <span class="input-group-text" for="SC_Aprendiz_Documento">Numero del documento</span>
	    <input type="number" class="form-control" id="SC_Aprendiz_Documento" name="SC_Aprendiz_Documento" value="{{$aprendiz->SC_Aprendiz_Documento }}">
	    @error('SC_Aprendiz_Documento')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <span class="input-group-text" for="SC_Aprendiz_Nombres">Nombres</span>
	    <input type="text" class="form-control" id="SC_Aprendiz_Nombres" name="SC_Aprendiz_Nombres" value="{{$aprendiz->SC_Aprendiz_Nombres}}">
	    @error('SC_Aprendiz_Nombres')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	   <span class="input-group-text" for="SC_Aprendiz_Apellidos">Apellidos</span>
	    <input type="text" class="form-control" id="SC_Aprendiz_Apellidos" name="SC_Aprendiz_Apellidos" value="{{$aprendiz->SC_Aprendiz_Apellidos}}">
	    @error('SC_Aprendiz_Apellidos')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <span class="input-group-text" for="SC_Aprendiz_Correo">Correo</span>
	    <input type="email" class="form-control" id="SC_Aprendiz_Correo" name="SC_Aprendiz_Correo" value="{{$aprendiz->SC_Aprendiz_Correo }}">
	    @error('SC_Aprendiz_Correo')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	   <span class="input-group-text" for="SC_Aprendiz_NumeroContacto">Numero de contacto</span>
	    <input type="number" class="form-control" id="SC_Aprendiz_NumeroContacto" name="SC_Aprendiz_NumeroContacto" value="{{$aprendiz->SC_Aprendiz_NumeroContacto }}">
	    @error('SC_Aprendiz_NumeroContacto')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <span class="input-group-text" for="SC_Ficha_PK_ID">Ficha del Programa de Formación</span>
			<select name="SC_Ficha_PK_ID" id="SC_Ficha_PK_ID" class="form-control" style="font-size: 0.9em;">
				@foreach($fichas as $ficha)
				<option value="{{ $ficha->SC_Ficha_PK_ID }}" @if($ficha->SC_Ficha_PK_ID == $aprendiz->SC_Ficha_PK_ID) selected @endif >{{ $ficha->SC_Ficha_NombreProgramaFormacion	 }}</option>
				@endforeach
			</select>
			@error('SC_Ficha_PK_ID')
				<small>{{$message}}</small>
			@enderror
		</div>
		<div class="form-group">
		  <span class="input-group-text" for="SC_Aprendiz_ContratoAprendizaje">Contrato de practica del aprendiz</span>
		    <input type="text" class="form-control" id="SC_Aprendiz_ContratoAprendizaje" name="SC_Aprendiz_ContratoAprendizaje" value="{{$aprendiz->SC_Aprendiz_ContratoAprendizaje }}">
		    @error('SC_Aprendiz_ContratoAprendizaje')
		    	<small>{{ $message }}</small>
		    @enderror
	  </div>
	  <div class="form-group">
	     <span class="input-group-text" for="SC_Aprendiz_Empresa">Nombre de la empresa donde realiza la practica</span>
		    <input type="text" class="form-control" id="SC_Aprendiz_Empresa" name="SC_Aprendiz_Empresa" value="{{$aprendiz->SC_Aprendiz_Empresa }}">
		    @error('SC_Aprendiz_Empresa')
		    	<small>{{ $message }}</small>
		    @enderror
	  </div>
	  <div class="form-group">
	    <span class="input-group-text" for="SC_Comite_FK_ID">Comite relacionado</span>
			<select name="SC_Comite_FK_ID" id="SC_Comite_FK_ID" class="form-control" style="font-size: 0.9em;">
				@foreach($comites as $comite)
				<option value="{{$comite->SC_Comite_PK_ID}}" @if($comite->SC_Comite_PK_ID == $aprendiz->SC_Comite_FK_ID ) selected @endif>{{$comite->SC_Comite_DescripcionHechos}}</option>
				@endforeach
			</select>
			@error('SC_Comite_FK_ID')
				<small>{{$message}}</small>
			@enderror
		</div>
	  <button type="submit" class="btn btn-success" id="btncrear">Modificar</button>
	</form>
</div>
@endsection