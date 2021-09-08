@extends('layouts.base')
@section('title', 'Crear Acto administrativo')
@section('content') 
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">

</head>

<div class="container">

	<h1>Crear Notificacion</h1>

	
	<form action="/actoadministrativo" method="post"enctype="multipart/form-data" id="formulario">
		@csrf

		<div class="form-group">
		   <span class="input-group-text" for="SC_ActaComite_FK">Acta de comite relacionada</span>
			<select name="SC_ActaComite_FK" id="SC_ActaComite_FK" class="form-control">
				@foreach($ActaC as $ActaC)
				<option value="{{$ActaC->SC_ActaComite_PK_ID}}">{{$ActaC->SC_ActaComite_PK_ID}}</option>
				@endforeach
			</select>
			@error('SC_ActaComite_FK')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

       <div class="form-group">
	      <span class="input-group-text"for="SC_Notificacion_Sugerencia">sugerencias</span>
			<input class="form-control" rows="2"name="SC_Notificacion_Sugerencia" 
			id="SC_Notificacion_Sugerencia" 
			class="form-control" 
			value="{{old('SC_Notificacion_Sugerencia')}}">
			@error('SC_Notificacion_Sugerencia')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
		   <span class="input-group-text" for="SC_TipoNotificacion_FK">Tipo de notificacion</span>
			<select name="SC_TipoNotificacion_FK" id="SC_TipoNotificacion_FK" class="form-control" onChange="mostrar()">
				@foreach($TipoN as $TipoN)
				<option value="{{$TipoN->SC_TipoNotificacion_ID}}">{{$TipoN->SC_TipoNotificacion_Descripcion}}</option>
				@endforeach
			</select>
			@error('SC_TipoNotificacion_FK')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group" >
		   <span class="input-group-text" for="SC_Notificacion_TipoPlan">Tipo de plan</span>
			<select name="SC_Notificacion_TipoPlan" id="SC_Notificacion_TipoPlan" class="form-control" >
				@foreach($TipoP as $TipoP)
				<option value="{{$TipoP->SC_TipoPlan_ID}}">{{$TipoP->SC_TipoPlan_Descripcion}}</option>
				@endforeach
			</select>
			@error('SC_Notificacion_TipoPlan')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>


		<div class="form-group" >
		   <span class="input-group-text" for="SC_Notificacion_Instructor">Instructor designado para el plan de mejoramiento</span>
			<select name="SC_Notificacion_Instructor" id="SC_Notificacion_Instructor" class="form-control">
				@foreach($usuario as $usuario)
				<option value="{{$usuario->SC_Usuarios_ID}}">{{$usuario->SC_Usuarios_Nombre}}</option>
				@endforeach
			</select>
			@error('SC_Notificacion_Instructor')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group"  >
	      <span class="input-group-text"for="SC_Notificacion_Forma">Indique la forma en la que debe entregar el plan de mejoramiento</span>
			<input class="form-control" rows="2"name="SC_Notificacion_Forma" 
			id="SC_Notificacion_Forma" 
			class="form-control" 
			value="{{old('SC_Notificacion_Forma')}}">
			@error('SC_Notificacion_Forma')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group" >
	      <span class="input-group-text"for="SC_Notificacion_Funcionario">Indique el servidor público ante quien debe presentarlo</span>
			<input class="form-control" rows="2"name="SC_Notificacion_Funcionario" 
			id="SC_Notificacion_Funcionario" 
			class="form-control" 
			value="{{old('SC_Notificacion_Funcionario')}}">
			@error('SC_Notificacion_Funcionario')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
		  <span class="input-group-text" for="SC_Notificacion_FechaInicial">Fecha Inicial</span>
			<input type="date" 
			name="SC_Notificacion_FechaInicial" 
			id="SC_Notificacion_FechaInicial" 
			class="form-control" 
			value="{{old('SC_Notificacion_FechaInicial')}}">
			@error('SC_Notificacion_FechaInicial')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group"  >
		  <span class="input-group-text" for="SC_Notificacion_FechaLimite">Fecha limite</span>
			<input type="date" 
			name="SC_Notificacion_FechaLimite" 
			id="SC_Notificacion_FechaLimite" 
			class="form-control" 
			value="{{old('SC_Notificacion_FechaLimite')}}">
			@error('SC_Notificacion_FechaLimite')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>


		<button type="submit" class="btn btn-success mb-5"id="btncrear">Crear</button>
	</form>
</div>
@endsection 
<script type="text/javascript">
	 
/*	
function mostrar() 
{
	var opciones = document.getElementById("SC_TipoNotificacion_FK").value 
	var plan=document.getElementById("SC_Notificacion_TipoPlan");
	var plan1=document.getElementById("SC_Notificacion_Plan");
	var forma=document.getElementById("SC_Notificacion_Forma");
	var fechal=document.getElementById("SC_Notificacion_FechaLimite");
	var instru=document.getElementById("SC_Notificacion_Instructor");
	var funci=document.getElementById("SC_Notificacion_Funcionario");
	
	/*switch(opciones){
		case 'Condicionamiento de Matricula':
			plan.style.display = "block";
			plan1.style.display = "block";
			forma.style.display = "block";
			instru.style.display= "block";
			funci.style.display = "block";
			fechal.style.display = "block";
			break;

	}*/
	/*
	if (opciones = "Condicionamiento de Matricula") {
		
		plan.style.display = "block";
		plan1.style.display = "block";
		forma.style.display = "block";
		instru.style.display= "block";
		funci.style.display = "block";
		fechal.style.display = "block";
	}

	else
	{
		plan.style.display = "none";
		plan1.style.display = "none";
		forma.style.display = "none";
		instru.style.display= "none";
		funci.style.display = "none";
		fechal.style.display = "none";
	}*/
	/*if (opciones = "Llamados de atención")
	{
		plan.style.display = "none";
		plan1.style.display = "none";
		forma.style.display = "none";
		instru.style.display= "none";
		funci.style.display = "none";
		fechal.style.display = "none";
	}if (opciones = "Cancelación de matricula")
	{
		plan.style.display = "none";
		plan1.style.display = "none";
		forma.style.display = "none";
		instru.style.display= "none";
		funci.style.display = "none";
		fechal.style.display = "none";
	}
	 
	
}*/


</script>