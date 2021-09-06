@extends('layouts.base')
@section('title', 'Crear Acta de comite')
@section('content')
	<h1>Crear Acta de comite</h1>
	<form action="/ActaComite" method="post" enctype="multipart/form-data">
		@csrf
	<div class="form-group">
		<label for="Citacion">Numero del acta</label>
		<select name="Citacion" id="Citacion" class="form-control" style="font-size: 0.9em;">
		@foreach($citaciones as $citacion)
			<option value="{{$citacion->SC_CitacionPK_Id }}">{{$citacion->SC_Citacion_NumeroActa }}</option>
		@endforeach
		</select>
		@error('SC_Citacion_FK')
		<small>{{$message}}</small>
		@enderror
	</div>

	<div class="form-group">
	    <label for="Nombre">Nombre del Comité o de la Reunión</label>
	    <input type="text" class="form-control" id="Nombre" name="Nombre"> 
	    @error('SC_ActaComite_Nombre')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <label for="Ciudad">Ciudad</label>
	    <input type="text" class="form-control" id="Ciudad" name="Ciudad"> 
	    @error('SC_ActaComite_Ciudad')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	  	<label for="Fecha">Fecha</label>
	  	<input type="date" class="form-control" id="Fecha" name="Fecha">
	  	@error('SC_ActaComite_Fecha')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	<div class="form-group">
		<label for="HoraInicio">Hora de inicio</label>
		<input type="time" class="form-control" id="HoraInicio" name="HoraInicio">
		@error('SC_ActaComite_HoraInicio')
		  <small>{{ $message }}</small>
	  @enderror
	</div>
	<div class="form-group">
		<label for="HoraFin">Hora de finalización</label>
		<input type="time" class="form-control" id="HoraFin" name="HoraFin">
		@error('SC_ActaComite_HoraFin')
		  <small>{{ $message }}</small>
	  @enderror
	</div>
	<div class="form-group">
		<label for="DeclaracionA">Declaraciones del Aprendiz</label>
		<input type="text" class="form-control" id="DeclaracionA" name="DeclaracionA">
		@error('SC_ActaComite_DeclaracionesAprendiz')
		  <small>{{ $message }}</small>
	  @enderror
	</div>
	<div class="form-group">
		<label for="DeclaracionR">Declaraciones del responsable que solicito comité</label>
		<input type="text" class="form-control" id="DeclaracionR" name="DeclaracionR">
		@error('SC_ActaComite_DeclaracionesResponsable')
		  <small>{{ $message }}</small>
	  @enderror
	</div>
	<div class="form-group">
		<label for="DeclaracionO">Otras declaraciones</label>
		<input type="text" class="form-control" id="DeclaracionO" name="DeclaracionO">
		@error('SC_ActaComite_DeclaracionesOtros')
		  <small>{{ $message }}</small>
	  @enderror
	</div>
	<div class="form-group">
		<label for="Asistente">Asistentes</label>
		<input type="text-area" class="form-control" id="Asistente" name="Asistente">
		@error('SC_ActaComite_Asistentes')
		  <small>{{ $message }}</small>
	  @enderror
	</div>
	<div class="form-group">
		<label for="Descargo">Descargos del Aprendiz</label>
		<input type="text-area" class="form-control" id="Descargo" name="Descargo">
		@error('SC_ActaComite_Descargos')
		  <small>{{ $message }}</small>
	  @enderror
	</div>
	<div class="form-group">
		<label for="Desicion">Desición</label>
		<input type="text-area" class="form-control" id="Desicion" name="Desicion">
		@error('SC_ActaComite_Decision')
		  <small>{{ $message }}</small>
	  @enderror
	</div>
	
	  <button type="submit" class="btn btn-primary">Crear</button>
	</form>
@endsection
