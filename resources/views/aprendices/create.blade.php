@extends('layouts.base')
@section('title', 'Crear Aprendiz')
@section('content')
<div class="container">
	<h1>Crear Aprendiz</h1>
	<form action="/aprendices" method="post" enctype="multipart/form-data" id="formulario">
		@csrf
	  <div class="form-group">
	    <label for="SC_Aprendiz_Documento">Numero del documento</label>
	    <input type="number" class="form-control" id="SC_Aprendiz_Documento" name="SC_Aprendiz_Documento" value="{{ old('SC_Aprendiz_Documento') }}">
	    @error('SC_Aprendiz_Documento')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <label for="SC_Aprendiz_Nombres">Nombres</label>
	    <input type="text" class="form-control" id="SC_Aprendiz_Nombres" name="SC_Aprendiz_Nombres" value="{{ old('SC_Aprendiz_Nombres') }}">
	    @error('SC_Aprendiz_Nombres')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <label for="SC_Aprendiz_Apellidos">Apellidos</label>
	    <input type="text" class="form-control" id="SC_Aprendiz_Apellidos" name="SC_Aprendiz_Apellidos" value="{{ old('SC_Aprendiz_Apellidos') }}">
	    @error('SC_Aprendiz_Apellidos')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <label for="SC_Aprendiz_Correo">Correo</label>
	    <input type="email" class="form-control" id="SC_Aprendiz_Correo" name="SC_Aprendiz_Correo" value="{{ old('SC_Aprendiz_Correo') }}">
	    @error('SC_Aprendiz_Correo')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <label for="SC_Aprendiz_NumeroContacto">Numero de contacto</label>
	    <input type="number" class="form-control" id="SC_Aprendiz_NumeroContacto" name="SC_Aprendiz_NumeroContacto" value="{{ old('SC_Aprendiz_NumeroContacto') }}">
	    @error('SC_Aprendiz_NumeroContacto')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
			<label for="SC_Ficha_PK_ID">Ficha del Programa de Formación</label>
			<select name="SC_Ficha_PK_ID" id="SC_Ficha_PK_ID" class="form-control" style="font-size: 0.9em;">
				@foreach($fichas as $ficha)
				<option value="{{$ficha->SC_Ficha_PK_ID }}">{{$ficha->SC_Ficha_PK_ID}}</option>
				@endforeach
			</select>
			@error('SC_Ficha_PK_ID')
				<small>{{$message}}</small>
			@enderror
		</div>
		<div class="form-group">
		    <label for="SC_Aprendiz_ContratoAprendizaje">Contrato de practica del aprendiz</label>
		    <input type="text" class="form-control" id="SC_Aprendiz_ContratoAprendizaje" name="SC_Aprendiz_ContratoAprendizaje" value="{{ old('SC_Aprendiz_ContratoAprendizaje') }}">
		    @error('SC_Aprendiz_ContratoAprendizaje')
		    	<small>{{ $message }}</small>
		    @enderror
	  </div>
	  <div class="form-group">
		    <label for="SC_Aprendiz_Empresa">Nombre de la empresa donde realiza la practica</label>
		    <input type="text" class="form-control" id="SC_Aprendiz_Empresa" name="SC_Aprendiz_Empresa" value="{{ old('SC_Aprendiz_Empresa') }}">
		    @error('SC_Aprendiz_Empresa')
		    	<small>{{ $message }}</small>
		    @enderror
	  </div>
	  <div class="form-group">
			<label for="SC_Comite_FK_ID">Comite relacionado</label>
			<select name="SC_Comite_FK_ID" id="SC_Comite_FK_ID" class="form-control" style="font-size: 0.9em;">
				@foreach($comites as $comite)
				<option value="{{$comite->SC_Comite_PK_ID}}">{{$comite->SC_Comite_DescripcionHechos}}</option>
				@endforeach
			</select>
			@error('SC_Comite_FK_ID')
				<small>{{$message}}</small>
			@enderror
		</div>
	  <button type="submit" class="btn btn-success" id="btncrear">Crear Aprendiz</button>
	</form>
</div>
@endsection