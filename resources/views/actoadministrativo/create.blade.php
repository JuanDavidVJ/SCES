@extends('layouts.base')
@section('title', 'Crear Acto administrativo')
@section('content') 
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>

<div class="container">

	<h1>Crear Acto administrativo</h1>
	
	<form action="/actoadministrativo" method="post"enctype="multipart/form-data" id="formulario">
		@csrf
		<div class="form-group">
		   <span class="input-group-text" for="SC_ActaComite_FK">Acta de comite relacionada</span>
			<select name="SC_ActaComite_FK" id="SC_ActaComite_FK" class="form-control">
				@foreach($ActaC as $ActaC)
				<option value="{{$ActaC->SC_ActaComite_PK_ID}}">{{$ActaC->SC_ActaComite_PK_ID}}</option>
				@endforeach
			</select>
			@error('SC_ActaComite_FK_ID')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

       <div class="form-group">
	      <span class="input-group-text"for="SC_Notificacion_Sugerencia">sugerencia</span>
			<textarea class="form-control" rows="2"name="SC_Notificacion_Sugerencia" 
			id="SC_Notificacion_Sugerencia" 
			class="form-control" 
			value="{{old('SC_Notificacion_Sugerencia')}}"></textarea>
			@error('SC_Notificacion_Sugerencia')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
		   <span class="input-group-text" for="SC_Notificacion_TipoPlan">Tipo de plan</span>
			<select name="SC_Notificacion_TipoPlan" id="SC_Notificacion_TipoPlan" class="form-control">
				@foreach($TipoP as $TipoP)
				<option value="{{$TipoP->SC_TipoPlan_ID}}">{{$TipoP->SC_TipoPlan_Descripcion}}</option>
				@endforeach
			</select>
			@error('SC_Notificacion_TipoPlan')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
		   <span class="input-group-text" for="SC_TipoNotificacion_FK">Tipo de notificacion</span>
			<select name="SC_ActaComite_FK" id="SC_ActaComite_FK" class="form-control">
				@foreach($TipoN as $TipoN)
				<option value="{{$TipoN->SC_TipoNotificacion_ID}}">{{$TipoN->SC_TipoNotificacion_Descripcion}}</option>
				@endforeach
			</select>
			@error('SC_TipoNotificacion_ID')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
		   <span class="input-group-text" for="SC_Notificacion_Plan">Plan asignado</span>
			<input type="file" 
			name="SC_Notificacion_Plan" 
			id="SC_Notificacion_Plan" 
			class="form-control" >
			@error('SC_Notificacion_Plan')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
		   <span class="input-group-text" for="SC_Notificacion_Instructor">Notificacion instructor</span>
			<input type="text" 
			name="SC_Notificacion_Instructor" 
			id="SC_Notificacion_Instructor" 
			class="form-control" 
			value="{{old('SC_Notificacion_Instructor')}}">
			@error('SC_Notificacion_Instructor')
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
		<div class="form-group">
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
