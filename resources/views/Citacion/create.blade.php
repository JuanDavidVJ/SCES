@extends('layouts.base')
@section('title', 'Crear Citacion')
@section('content') 
<div class="container">
	<h1>Crear Citacion</h1>
	<form action="/Citacion" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<span class="input-group-text" for="SC_Citacion_FechaCitacion">Fecha Citacion</span>
			<input type="date" name="SC_Citacion_FechaCitacion" id="SC_Citacion_FechaCitacion" class="form-control" value="{{old('SC_Citacion_FechaCitacion')}}">
			@error('SC_Citacion_FechaCitacion')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_Citacion_Hora">Hora</span>
			<input type="time" name="SC_Citacion_Hora" id="SC_Citacion_Horaa" class="form-control" value="{{old('SC_Citacion_Hora')}}">
			@error('SC_Citacion_Hora')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_Citacion_Lugar">Lugar</span>
			<input type="text" name="SC_Citacion_Lugar" id="SC_Citacion_Lugar" class="form-control" value="{{old('SC_Citacion_Lugar')}}">
			@error('SC_Citacion_Lugar')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_Citacion_Ciudad">Ciudad</span>
			<input type="text" name="SC_Citacion_Ciudad" id="SC_Citacion_Ciudad" class="form-control" value="{{old('SC_Citacion_Ciudad')}}">
			@error('SC_Citacion_Ciudad')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_Citacion_Centro">Centro</span>
			<input type="text" name="SC_Citacion_Centro" id="SC_Citacion_Centro" class="form-control" value="{{old('SC_Citacion_Centro')}}">
			@error('SC_Citacion_Centro')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_Citacion_NumeroActa">N° Acta</span>
			<input type="number" name="SC_Citacion_NumeroActa" id="SC_Citacion_NumeroActa" class="form-control" value="{{old('SC_Citacion_NumeroActa')}}">
			@error('SC_Citacion_NumeroActa')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_Solicitud_FK">Solicitud</span>
			<select name="SC_Solicitud_FK" id="SC_Solicitud_FK" class="form-control">
				<option selected>Seleccione una solicitud</option>
				@foreach($SolicitarComite as $solicitud)
				<option value="{{$solicitud->SC_SolicitarComite_ID}}">{{$solicitud->SC_SolicitarComite_ID}}-{{$solicitud->aprendiz->SC_Aprendiz_Nombres}}-{{$solicitud->SC_SolicitarComite_Descripcion}}</option>
				@endforeach
			</select>
			@error('SC_Solicitud_FK')
				<small>{{$message}}</small>
			@enderror
		</div>

		<button type="submit" class="btn btn-success">Crear y Enviar Citación</button>
	</form>
</div>
@endsection 
