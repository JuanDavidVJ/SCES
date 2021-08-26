@extends('layouts.base')
@section('title', 'Modificar Novedad')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>

	<h1>Modificar Novedad {{ $novedad->SC_Novedades_PK_ID }}</h1>
	<form action="/novedades/{{ $novedad->SC_Novedades_PK_ID }}" method="post" enctype="multipart/form-data">
		@method('PUT')
		@csrf
	  <div class="form-group">
	  <span class="input-group-text" for="SC_Novedades_Descripcion">Descripción</span>
	    <input type="text" class="form-control" id="SC_Novedades_Descripcion" name="SC_Novedades_Descripcion" value="{{$novedad->SC_Novedades_Descripcion}}">
	    @error('SC_Novedades_Descripcion')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	   <span class="input-group-text" for="SC_Novedades_HabilidadesDestrezas">Habilidades</span>
	    <input type="text" class="form-control" id="SC_Novedades_HabilidadesDestrezas" name="SC_Novedades_HabilidadesDestrezas" value="{{ $novedad->SC_Novedades_HabilidadesDestrezas }}">
	    @error('SC_Novedades_HabilidadesDestrezas')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	   <span class="input-group-text" for="SC_Novedades_Observaciones">Observaciones</span>
	    <input type="text" class="form-control" id="SC_Novedades_Observaciones" name="SC_Novedades_Observaciones" value="{{ $novedad->SC_Novedades_Observaciones }}">
	    @error('SC_Novedades_Observaciones')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	  <span class="input-group-text" for="SC_Novedades_Fecha">Fecha</span>
	    <input type="date" class="form-control" id="SC_Novedades_Fecha" name="SC_Novedades_Fecha" value="{{ $novedad->SC_Novedades_Fecha }}">
	    @error('SC_Novedades_Fecha')
		<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	  <span class="input-group-text" for="SC_Novedades_Foto">Foto</span>
	  	<input type="file" class="form-control" id="SC_Novedades_Foto" name="SC_Novedades_Foto">
	  	@error('SC_Novedades_Foto')
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
	  <button type="submit" class="btn btn-success"id="btnactualizar">Actualizar Novedad</button>
	</form>
@endsection