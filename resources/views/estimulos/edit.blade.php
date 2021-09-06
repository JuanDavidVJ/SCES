@extends('layouts.base')
@section('title', 'Modificar estimulo')
@section('content') 
<div class="container">
	<h1>Modificar estimulo </h1>
	<form action="/estimulos/{{$estimulos->SC_Estimulos_PK_ID}}" method="post" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<div class="form-group">
			<span class="input-group-text" for="SC_Estimulos_Reporta">Estimulos reporta</span>
			<input type="text" name="SC_Estimulos_Reporta" id="SC_Estimulos_Reporta" class="form-control" value="{{$estimulos->SC_Estimulos_Reporta}}">
			@error('SC_Estimulos_Reporta')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_Estimulos_Razon">Razón</span>
			<input type="text" name="SC_Estimulos_Razon" id="SC_Estimulos_Razon" class="form-control" value="{{$estimulos->SC_Estimulos_Razon}}">
			@error('SC_Estimulos_Razon')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_Estimulos_Detalles">Detalles</span>
			<input type="text" name="SC_Estimulos_Detalles" id="SC_Estimulos_Detalles" class="form-control" value="{{$estimulos->SC_Estimulos_Detalles}}">
			@error('SC_Estimulos_Detalles')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_Estimulos_Fecha">Fecha</span>
			<input type="date" name="SC_Estimulos_Fecha" id="SC_Estimulos_Fecha" class="form-control" value="{{$estimulos->SC_Estimulos_Fecha}}">
			@error('SC_Estimulos_Fecha')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_Aprendiz_FK_ID">Aprendiz</span>
			<select name="SC_Aprendiz_FK_ID" id="SC_Aprendiz_FK_ID" class="form-control" style="font-size: 0.9em;">
				@foreach($aprendiz as $aprendiz)
				<option value="{{$aprendiz->SC_Aprendiz_PK_ID}}" @if($aprendiz->SC_Aprendiz_PK_ID == $estimulos->SC_Aprendiz_FK_ID) selected @endif>{{$aprendiz->SC_Aprendiz_Nombres}}</option>
				@endforeach
			</select>
			@error('SC_Aprendiz_FK_ID')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_Ficha_FK_ID">Ficha</span>
			<select name="SC_Ficha_FK_ID" id="SC_Ficha_FK_ID" class="form-control" style="font-size: 0.9em;">
				@foreach($ficha as $ficha)
				<option value="{{$ficha->SC_Ficha_PK_ID}}" @if($ficha->SC_Ficha_PK_ID == $estimulos->SC_Ficha_FK_ID) selected @endif>{{$ficha->SC_Ficha_NumeroFicha}}</option>
				@endforeach
			</select>
			@error('SC_Ficha_FK_ID')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_TipoEstimulos_FK_ID">Tipo de estimulo</span>
			<select name="SC_TipoEstimulos_FK_ID" id="SC_TipoEstimulos_FK_ID" class="form-control" style="font-size: 0.9em;">
				@foreach($tipoestimulos as $tipoestimulos)
				<option value="{{$tipoestimulos->SC_TipoEstimulos_PK_ID}}" @if($tipoestimulos->SC_TipoEstimulos_PK_ID == $estimulos->SC_TipoEstimulos_FK_ID ) selected @endif>{{$tipoestimulos->SC_TipoEstimulos_Descripcion}}</option>
				@endforeach
			</select>
			@error('SC_TipoEstimulos_FK_ID')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		
		<button type="submit" class="btn btn-success">Actualizar Estimulo</button>
	</form>
</div>
@endsection 
