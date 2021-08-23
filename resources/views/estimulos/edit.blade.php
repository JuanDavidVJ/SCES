@extends('layouts.base')
@section('title', 'Modificar estimulo')
@section('content') 
<div class="container">
	<h1>Modificar estimulo </h1>
	<form action="/estimulos/{{$estimulos->SC_Estimulos_PK_ID}}" method="post" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<div class="form-group">
			<label for="SC_Estimulos_Reconocimiento">Estimulos reconocimiento</label>
			<input type="text" name="SC_Estimulos_Reconocimiento" id="SC_Estimulos_Reconocimiento" class="form-control" value="{{$estimulos->SC_Estimulos_Reconocimiento}}">
			@error('SC_Estimulos_Reconocimiento')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_Estimulos_DescripcionEstimulo">Descripcion</label>
			<input type="text" name="SC_Estimulos_DescripcionEstimulo" id="SC_Estimulos_DescripcionEstimulo" class="form-control" value="{{$estimulos->SC_Estimulos_DescripcionEstimulo}}">
			@error('SC_Estimulos_DescripcionEstimulo')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_Estimulos_Fecha">Fecha</label>
			<input type="date" name="SC_Estimulos_Fecha" id="SC_Estimulos_Fecha" class="form-control" value="{{$estimulos->SC_Estimulos_Fecha}}">
			@error('SC_Estimulos_Fecha')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_Aprendiz_FK_ID">Aprendiz</label>
			<select name="SC_Aprendiz_FK_ID" id="SC_Aprendiz_FK_ID" class="form-control" style="font-size: 0.9em;">
				@foreach($aprendiz as $aprendiz)
				<option value="{{$aprendiz->SC_Aprendiz_PK_ID}}" @if($aprendiz->SC_Aprendiz_PK_ID == $estimulos->SC_Aprendiz_FK_ID) selected @endif>{{$aprendiz->SC_Aprendiz_Nombres}}</option>
				@endforeach
			</select>
			@error('SC_Aprendiz_FK_ID')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_TipoEstimulos_FK_ID">Tipo de estimulo</label>
			<select name="SC_TipoEstimulos_FK_ID" id="SC_TipoEstimulos_FK_ID" class="form-control" style="font-size: 0.9em;">
				@foreach($tipoestimulos as $tipoestimulos)
				<option value="{{$tipoestimulos->SC_TipoEstimulos_PK_ID}}" @if($tipoestimulos->SC_TipoEstimulos_PK_ID == $estimulos->SC_TipoEstimulos_FK_ID ) selected @endif>{{$tipoestimulos->SC_TipoEstimulos_Descripcion}}</option>
				@endforeach
			</select>
			@error('SC_TipoEstimulos_FK_ID')
				<small>{{$message}}</small>
			@enderror
		</div>
		
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
</div>
@endsection 
