@extends('layouts.base')
@section('title', 'Modificar Acta')
@section('content')
	<h1>Modificar Acta</h1>
	<form action="/ActaComite/{{ $ActaComite->SC_ActaComite_PK_ID }}" method="post" enctype="multipart/form-data">
		@method('PUT')
		@csrf
	  <div class="form-group">
	  	<label for="Citacion">Numero del acta</label>
	  	<select class="form-control" id="Citacion" name="Citacion">
	  		@foreach($citaciones as $citacion)
	  			<option value="{{$citacion->SC_CitacionPK_Id }}" @if($citacion->SC_CitacionPK_Id == $ActaComite->SC_Citacion_FK) selected 
	  				@endif >{{$citacion->SC_Citacion_NumeroActa }}</option>
	  		@endforeach
	  	</select>
	  	@error('Citacion')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <label for="Nombre">Nombre del Comité o de la Reunión</label>
	    <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{$ActaComite->SC_ActaComite_Nombre}}"> 
	    @error('Nombre')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>	
	  <div class="form-group">
	  	<label for="Ciudad">Ciudad</label>
	  	<input type="text" class="form-control" id="Ciudad" name="Ciudad" value="{{$ActaComite->SC_ActaComite_Ciudad}}">
	  	@error('Ciudad')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
		<label for="Fecha">Fecha</label>
		<input type="date" class="form-control" id="Fecha" name="Fecha" value="{{$ActaComite->SC_ActaComite_Fecha}}">
		@error('Fecha')
		  <small>{{ $message }}</small>
	  @enderror
	</div>
	<div class="form-group">
		<label for="HoraInicio">Hora de inicio</label>
		<input type="time" class="form-control" id="HoraInicio" name="HoraInicio" value="{{$ActaComite->SC_ActaComite_HoraInicio}}">
		@error('HoraInicio')
		  <small>{{ $message }}</small>
	  @enderror
	</div>
	<div class="form-group">
		<label for="HoraFin">Hora de fin</label>
		<input type="time" class="form-control" id="HoraFin" name="HoraFin" value="{{$ActaComite->SC_ActaComite_HoraFin}}">
		@error('HoraFin')
		  <small>{{ $message }}</small>
	  @enderror
	</div>
	<div class="form-group">
	  	<label for="DeclaracionA">Declaraciones del Aprendiz</label>
	  	<input type="text" class="form-control" id="DeclaracionA" name="DeclaracionA" value="{{$ActaComite->SC_ActaComite_DeclaracionesAprendiz}}">
	  	@error('DeclaracionA')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	  	<label for="DeclaracionR">Declaraciones del responsable que solicito comité</label>
	  	<input type="text" class="form-control" id="DeclaracionR" name="DeclaracionR" value="{{$ActaComite->SC_ActaComite_DeclaracionesResponsable}}">
	  	@error('DeclaracionR')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	  	<label for="DeclaracionO">Otras declaraciones</label>
	  	<input type="text" class="form-control" id="DeclaracionO" name="DeclaracionO" value="{{$ActaComite->SC_ActaComite_DeclaracionesOtros}}">
	  	@error('DeclaracionO')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	  	<label for="Asistente">Asistentes</label>
	  	<input type="text" class="form-control" id="Asistente" name="Asistente" value="{{$ActaComite->SC_ActaComite_Asistentes}}">
	  	@error('Objetivo')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	  	<label for="Descargo">Descargos del Aprendiz</label>
	  	<input type="text" class="form-control" id="Descargo" name="Descargo" value="{{$ActaComite->SC_ActaComite_Descargos}}">
	  	@error('Descargo')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	  	<label for="Desicion">Desicion</label>
	  	<input type="text" class="form-control" id="Desicion" name="Desicion" value="{{$ActaComite->SC_ActaComite_Descargos}}">
	  	@error('Desicion')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
@endsection

