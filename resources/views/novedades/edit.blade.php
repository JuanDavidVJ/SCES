@extends('layouts.base')
@section('title', 'Modificar Novedad')
@section('content')
<div class="container">

	<h1>Modificar Novedad</h1>
	<form action="/novedades/{{ $novedad->SC_Novedades_PK_ID }}" method="post" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<div class="form-group">
		<span class="input-group-text" for="SC_Novedades_Fecha">Fecha</span>
			<input type="date" class="form-control" id="SC_Novedades_Fecha" name="SC_Novedades_Fecha" value="{{ $novedad->SC_Novedades_Fecha }}">
			@error('SC_Novedades_Fecha')
		<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
		 <span class="input-group-text" for="SC_TipoNovedades_FK_ID">Tipo</span>
			<select class="form-control" id="SC_TipoNovedades_FK_ID" name="SC_TipoNovedades_FK_ID">
				@foreach($tiponovedades as $tiponovedad)
					<option value="{{ $tiponovedad->SC_TipoNovedades_PK_ID }}" @if($tiponovedad->SC_TipoNovedades_PK_ID == $novedad->SC_TipoNovedades_FK_ID) selected 
						@endif >{{ $tiponovedad->SC_TipoNovedades_Descripcion }}</option>
				@endforeach
			</select>
			@error('SC_TipoNovedades_FK_ID')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
		<span class="input-group-text" for="SC_Aprendiz_FK_ID">Aprendiz</span>
			<select class="form-control" id="SC_Aprendiz_FK_ID" name="SC_Aprendiz_FK_ID">
				@foreach($aprendices as $aprendiz)
					<option value="{{ $aprendiz->SC_Aprendiz_PK_ID }}" @if($aprendiz->SC_Aprendiz_PK_ID == $novedad->SC_Aprendiz_FK_ID) selected 
						@endif >{{ $aprendiz->SC_Aprendiz_Documento }}</option>
				@endforeach
			</select>
			@error('SC_Aprendiz_FK_ID')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		 <div class="form-group">
			<span class="input-group-text" for="SC_Novedades_Motivo">Motivo Solicitud</span>
					<textarea class="form-control" rows="2"name="SC_Novedades_Motivo" id="SC_Novedades_Motivo"value="{{$novedad->SC_Novedades_Motivo}}"></textarea>
					@error('SC_Novedades_Motivo')
					<small style="color: red;">{{ $message }}</small>
					@enderror
			</div>
		<button type="submit" class="btn btn-success"id="btnactualizar">Actualizar Novedad</button>
	</form>
</div>

@endsection