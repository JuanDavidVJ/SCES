@extends('layouts.base')
@section('title', 'Crear Citacion')
@section('content') 
<div class="container">
	<h1>Crear Citacion</h1>
	<form action="/Citacion" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<span class="input-group-text" for="SC_ActaComite_FK_ID">Acta Comite</span>
			<select name="SC_ActaComite_FK_ID" id="SC_ActaComite_FK_ID" class="form-control" style="font-size: 0.9em;">
				@foreach($ActaComite as $ActaComite)
				<option value="{{$ActaComite->SC_ActaComite_PK_ID}}">{{$ActaComite->SC_ActaComite_Codigo}}</option>
				@endforeach
			</select>
			@error('SC_ActaComite_FK_ID')
				<small>{{$message}}</small>
			@enderror
		</div>

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
			<span class="input-group-text" for="SC_Comite_FK_ID">Comite</span>
			<select name="SC_Comite_FK_ID" id="SC_Comite_FK_ID" class="form-control" style="font-size: 0.9em;">
				@foreach($Comite as $Comite)
				<option value="{{$Comite->SC_Comite_PK_ID}}">{{$Comite->SC_Comite_DescripcionHechos}}</option>
				@endforeach
			</select>
			@error('SC_Comite_FK_ID')
				<small>{{$message}}</small>
			@enderror
		</div>
		<button type="submit" class="btn btn-primary">Crear</button>
	</form>
</div>
@endsection 
