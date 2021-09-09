@extends('layouts.base')
@section('title', 'Modificar Acto')
@section('content') 
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>

<div class="container">

	<h1>Modificar Notificacion </h1>
	<form action="/actoadministrativo/{{$actoas->SC_Notificacion_ID}}" method="post" enctype="multipart/form-data" id="formularioactoadministrativo">
		@method('PUT')
		@csrf
		<div class="form-group">
		   <span class="input-group-text" for="SC_ActaComite_FK">Acta de comite relacionada</span>
			<select name="SC_ActaComite_FK" id="SC_ActaComite_FK" class="form-control">
				@foreach($ActaC as $ActaC)
				<option value="{{$ActaC->SC_ActaComite_PK_ID}}" @if($ActaC->SC_ActaComite_PK_ID == $actoas->SC_ActaComite_FK) selected @endif>{{$ActaC->SC_ActaComite_PK_ID}}</option>
				@endforeach
			</select>
			@error('SC_ActaComite_FK')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

       <div class="form-group">
	      <span class="input-group-text"for="SC_Notificacion_Sugerencia">sugerencia</span>
			<input class="form-control" rows="2"name="SC_Notificacion_Sugerencia" 
			id="SC_Notificacion_Sugerencia" 
			class="form-control" 
			value="{{$actoas->SC_Notificacion_Sugerencia}}">
			@error('SC_Notificacion_Sugerencia')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
		   <span class="input-group-text" for="SC_Notificacion_TipoPlan">Tipo de plan</span>
			<select name="SC_Notificacion_TipoPlan" id="SC_Notificacion_TipoPlan" class="form-control">
				@foreach($TipoP as $TipoP)
				<option value="{{$TipoP->SC_TipoPlan_ID}}" @if($TipoP->SC_TipoPlan_ID == $actoas->SC_Notificacion_TipoPlan) selected @endif>{{$TipoP->SC_TipoPlan_Descripcion}}</option>
				@endforeach
			</select>
			@error('SC_Notificacion_TipoPlan')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
		   <span class="input-group-text" for="SC_TipoNotificacion_FK">Tipo de notificacion</span>
			<select name="SC_TipoNotificacion_FK" id="SC_TipoNotificacion_FK" class="form-control">
				@foreach($TipoN as $TipoN)
				<option value="{{$TipoN->SC_TipoNotificacion_ID}}" @if($TipoN->SC_TipoNotificacion_ID == $actoas->SC_TipoNotificacion_ID) selected @endif>{{$TipoN->SC_TipoNotificacion_Descripcion}}</option>
				@endforeach
			</select>
			@error('SC_TipoNotificacion_FK')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		
		<div class="form-group" >
		   <span class="input-group-text" for="SC_Notificacion_Instructor">Instructor designado para el plan de mejoramiento</span>
			<select name="SC_Notificacion_Instructor" id="SC_Notificacion_Instructor" class="form-control">
				@foreach($usuario as $usuario)
				<option value="{{$usuario->SC_Usuarios_ID}}" @if($usuario->SC_Usuarios_ID == $actoas->SC_Notificacion_Instructor) selected @endif>{{$usuario->SC_Usuarios_Nombre}}</option>
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
			value="{{$actoas->SC_Notificacion_Forma}}">
			@error('SC_Notificacion_Forma')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group" >
	      <span class="input-group-text"for="SC_Notificacion_Funcionario">Indique el servidor público ante quien debe presentarlo</span>
			<input class="form-control" rows="2"name="SC_Notificacion_Funcionario" 
			id="SC_Notificacion_Funcionario" 
			class="form-control" 
			value="{{$actoas->SC_Notificacion_Funcionario}}">
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
			value="{{$actoas->SC_Notificacion_FechaInicial}}">
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
			value="{{$actoas->SC_Notificacion_FechaLimite}}">
			@error('SC_Notificacion_FechaLimite')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		
		<button type="submit" class="btn btn-success mb-5" id="btnactualizar">Actualizar</button>
	</form>
</div>
@endsection 
