@extends('layouts.base')
@section('title', 'Crear Acta de comite')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>

<div class="container">
		<h1>Crear Acta de Comite</h1>
		<form action="/ActaComite" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
		<span class="input-group-text">Numero del acta</span>
			<select name="Citacion" id="Citacion" class="form-control">
				<option selected>Seleccione una opción</option>
				@foreach($citaciones as $citacion)
					<option value="{{$citacion->SC_CitacionPK_Id }}">{{$citacion->SC_Citacion_NumeroActa }}</option>
				@endforeach
			</select>
			@error('SC_Novedades_Fecha')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

	<div class="form-group">
	<span class="input-group-text">Nombre del Comité o de la Reunión</span>
	   		 <input type="text" class="form-control" id="Nombre" name="Nombre"> 
			@error('SC_Novedades_Fecha')
                <small style="color: red;">{{ $message }}</small>
			@enderror
	  </div>

	  <div class="form-group">
	  <span class="input-group-text">Ciudad</span>
	   		 <input type="text" class="form-control" id="Ciudad" name="Ciudad"> 
	    	@error('SC_Novedades_Fecha')
                <small style="color: red;">{{ $message }}</small>
			@enderror
	  </div>

	  <div class="form-group">
	  <span class="input-group-text">Fecha</span>
	  			<input type="date" class="form-control" id="Fecha" name="Fecha">
	  		@error('SC_Novedades_Fecha')
                <small style="color: red;">{{ $message }}</small>
			@enderror
	  </div>

	<div class="form-group">
	<span class="input-group-text">Hora de inicio</span>
				<input type="time" class="form-control" id="HoraInicio" name="HoraInicio">
			@error('SC_Novedades_Fecha')
                <small style="color: red;">{{ $message }}</small>
			@enderror
	</div>

	<div class="form-group">
	<span class="input-group-text">Hora de finalización</span>
				<input type="time" class="form-control" id="HoraFin" name="HoraFin">
			@error('SC_Novedades_Fecha')
                <small style="color: red;">{{ $message }}</small>
			@enderror
	</div>
	<div class="form-group">
	<span class="input-group-text">Declaraciones del Aprendiz</span>
				<input type="text" class="form-control" id="DeclaracionA" name="DeclaracionA">
			@error('SC_Novedades_Fecha')
                <small style="color: red;">{{ $message }}</small>
			@enderror
	</div>

	<div class="form-group">
	<span class="input-group-text">Declaraciones del responsable que solicito comité</span>
				<input type="text" class="form-control" id="DeclaracionR" name="DeclaracionR">
			@error('SC_Novedades_Fecha')
                <small style="color: red;">{{ $message }}</small>
			@enderror
	</div>

	<div class="form-group">
	<span class="input-group-text">Otras declaraciones</span>
				<input type="text" class="form-control" id="DeclaracionO" name="DeclaracionO">
			@error('SC_Novedades_Fecha')
                <small style="color: red;">{{ $message }}</small>
			@enderror
	</div>

	<div class="form-group">
	<span class="input-group-text">Asistentes</span>
				<input type="text-area" class="form-control" id="Asistente" name="Asistente">
			@error('SC_Novedades_Fecha')
                <small style="color: red;">{{ $message }}</small>
			@enderror
	</div>


	<div class="form-group">
	<span class="input-group-text">Decisión</span>
				<input type="text-area" class="form-control" id="Desicion" name="Desicion">
			@error('SC_Novedades_Fecha')
                <small style="color: red;">{{ $message }}</small>
			@enderror
	  </div>
	  <button type="submit" class="btn btn-success mb-5" id="btncrear">Crear</button>
	</form>
</div>
@endsection
