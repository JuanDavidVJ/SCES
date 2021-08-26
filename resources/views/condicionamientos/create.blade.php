@extends('layouts.base')
@section('title', 'Crear condicionamiento')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>

<div class="container">
	<h1>Crear condicionamiento</h1>
	<form action="/condicionamientos" method="post" enctype="multipart/form-data"id="formulario">
		@csrf
		<div class="form-group">
		  <span class="input-group-text" for="SC_CondicionamientoMatricula_Descripcion">Descripción</span>
			<textarea class="form-control" rows="2"name="SC_CondicionamientoMatricula_Descripcion" id="SC_CondicionamientoMatricula_Descripcion"value="{{old('SC_CondicionamientoMatricula_Descripcion')}}"></textarea>
			@error('SC_CondicionamientoMatricula_Descripcion')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
		 <span class="input-group-text" for="SC_CondicionamientoMatricula_Fecha">Fecha</span>
			<input type="date" name="SC_CondicionamientoMatricula_Fecha" id="SC_CondicionamientoMatricula_Fecha" class="form-control" value="{{old('SC_CondicionamientoMatricula_Fecha')}}">
			@error('SC_CondicionamientoMatricula_Fecha')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
		   <span class="input-group-text" for="SC_CondicionamientoMatricula_FechaMaxima">Fecha máxima</span>
			<input type="date" name="SC_CondicionamientoMatricula_FechaMaxima" id="SC_CondicionamientoMatricula_FechaMaxima" class="form-control" value="{{old('SC_CondicionamientoMatricula_FechaMaxima')}}">
			@error('SC_CondicionamientoMatricula_FechaMaxima')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		
		<div class="form-group">
		  <span class="input-group-text" for="SC_CondicionamientoMatricula_EvidenciasNoPresentadas">Evidencias no presentadas</span>
			<input type="text" name="SC_CondicionamientoMatricula_EvidenciasNoPresentadas" id="SC_CondicionamientoMatricula_EvidenciasNoPresentadas" class="form-control" value="{{old('SC_CondicionamientoMatricula_EvidenciasNoPresentadas')}}">
			@error('SC_CondicionamientoMatricula_EvidenciasNoPresentadas')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
		 <span class="input-group-text" for="SC_Acto_Administrativo_FK_ID">Acto administrativo</span>
			<select name="SC_Acto_Administrativo_FK_ID" id="SC_Acto_Administrativo_FK_ID" class="form-control">
				@foreach($actoadministrativo as $actoadministrativo)
				<option value="{{$actoadministrativo->SC_ActoAdministrativoSanciones_PK_Id}}">{{$actoadministrativo->SC_ActoAdministrativoSanciones_DescripcionHechos}}</option>
				@endforeach
			</select>
			@error('SC_Acto_Administrativo_FK_ID')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>


		<button type="submit" class="btn btn-success" id="btncrear">Crear</button>
	</form>
</div>
@endsection 
