@extends('layouts.base')
@section('title', 'Crear Aprendiz')
@section('content')
<div class="container">
	<h1>Crear Aprendiz</h1>
	<form action="/aprendices" method="post" enctype="multipart/form-data" id="formulario">
		@csrf
	  <div class="form-group">
	  <span class="input-group-text" for="SC_Aprendiz_Documento">Numero del documento</span>
	    <input type="number" class="form-control" id="SC_Aprendiz_Documento" name="SC_Aprendiz_Documento" value="{{ old('SC_Aprendiz_Documento') }}">
	    @error('SC_Aprendiz_Documento')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	  <span class="input-group-text" for="SC_Aprendiz_Nombres">Nombres</span>
	    <input type="text" class="form-control" id="SC_Aprendiz_Nombres" name="SC_Aprendiz_Nombres" value="{{ old('SC_Aprendiz_Nombres') }}">
	    @error('SC_Aprendiz_Nombres')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <span class="input-group-text" for="SC_Aprendiz_Apellidos">Apellidos</span>
	    <input type="text" class="form-control" id="SC_Aprendiz_Apellidos" name="SC_Aprendiz_Apellidos" value="{{ old('SC_Aprendiz_Apellidos') }}">
	    @error('SC_Aprendiz_Apellidos')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <span class="input-group-text" for="SC_Aprendiz_Correo">Correo</span>
	    <input type="email" class="form-control" id="SC_Aprendiz_Correo" name="SC_Aprendiz_Correo" value="{{ old('SC_Aprendiz_Correo') }}">
	    @error('SC_Aprendiz_Correo')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <span class="input-group-text" for="SC_Aprendiz_NumeroContacto">Numero de contacto</span>
	    <input type="number" class="form-control" id="SC_Aprendiz_NumeroContacto" name="SC_Aprendiz_NumeroContacto" value="{{ old('SC_Aprendiz_NumeroContacto') }}">
	    @error('SC_Aprendiz_NumeroContacto')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	     <span class="input-group-text" for="SC_Ficha_PK_ID">Ficha del Programa de Formación</span>
			<select name="SC_Ficha_PK_ID" id="SC_Ficha_PK_ID" class="form-control" style="font-size: 0.9em;">
				<option selected>Seleccione una opción</option>
				@foreach($fichas as $ficha)
				<option value="{{$ficha->SC_Ficha_PK_ID }}">{{$ficha->SC_Ficha_NumeroFicha}}</option>
				@endforeach
			</select>
			@error('SC_Ficha_PK_ID')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text">¿El aprendiz cuenta con contrato de aprendizaje?</span>
			<div class="form-check form-check-inline ml-3 pt-2">
				<input class="form-check-input" type="radio" name="activar" id="activar" onclick="ActivarCasilla()">
				<label class="form-check-label" for="si">Si</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="activar" id="activar" checked onclick="DesactivarCasilla()">
				<label class="form-check-label" for="no">No</label>
			</div>
		</div>

		<div class="form-group">
		   <span class="input-group-text" for="SC_Aprendiz_ContratoAprendizaje">Contrato de practica del aprendiz</span>
		    <input type="text" class="form-control" id="SC_Aprendiz_ContratoAprendizaje" name="SC_Aprendiz_ContratoAprendizaje" value="{{ old('SC_Aprendiz_ContratoAprendizaje') }}" disabled="">
		    @error('SC_Aprendiz_ContratoAprendizaje')
			<small style="color: red;">{{ $message }}</small>
		    @enderror
	  </div>
	  <div class="form-group">
	    <span class="input-group-text" for="SC_Aprendiz_Empresa">Nombre de la empresa donde realiza la practica</span>
		    <input type="text" class="form-control" id="SC_Aprendiz_Empresa" name="SC_Aprendiz_Empresa" value="{{ old('SC_Aprendiz_Empresa') }}" disabled="">
		    @error('SC_Aprendiz_Empresa')
			<small style="color: red;">{{ $message }}</small>
		    @enderror
	  </div>
	  
	  <button type="submit" class="btn btn-success" id="btncrear">Crear Aprendiz</button>
	</form>
</div>
@endsection
<script type="text/javascript">

	var contraro=document.getElementById("SC_Aprendiz_ContratoAprendizaje");
	var contraro=document.getElementById("SC_Aprendiz_Empresa");

function ActivarCasilla() 
{
	if (activar.checked = true) {
		var contraro=document.getElementById("SC_Aprendiz_ContratoAprendizaje").disabled =false;
	var contraro=document.getElementById("SC_Aprendiz_Empresa").disabled=false;
	}
	 
	
}
function DesactivarCasilla() 
{
	if (activar.checked = true) {
		var contraro=document.getElementById("SC_Aprendiz_ContratoAprendizaje").disabled =true;
	var contraro=document.getElementById("SC_Aprendiz_Empresa").disabled=true;
	}
	
	
}
</script>