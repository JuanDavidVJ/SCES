@extends('layouts.base')
@section('title', 'Crear condicionamiento')
@section('content')

<div class="container">
	<h1>Crear condicionamiento</h1>
	<form action="/condicionamientos" method="post" enctype="multipart/form-data"id="formulario">
		@csrf
		<div class="form-group">
			<label for="SC_CondicionamientoMatricula_Descripcion">Descripción</label>
			<textarea class="form-control" rows="2"name="SC_CondicionamientoMatricula_Descripcion" id="SC_CondicionamientoMatricula_Descripcion"value="{{old('SC_CondicionamientoMatricula_Descripcion')}}"></textarea>
			@error('SC_CondicionamientoMatricula_Descripcion')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_CondicionamientoMatricula_Fecha">Fecha</label>
			<input type="date" name="SC_CondicionamientoMatricula_Fecha" id="SC_CondicionamientoMatricula_Fecha" class="form-control" value="{{old('SC_CondicionamientoMatricula_Fecha')}}">
			@error('SC_CondicionamientoMatricula_Fecha')
				<small>{{$message}}</small>
			@enderror
		</div>
		<div class="form-group">
			<label for="SC_CondicionamientoMatricula_FechaMaxima">Fecha máxima</label>
			<input type="date" name="SC_CondicionamientoMatricula_FechaMaxima" id="SC_CondicionamientoMatricula_FechaMaxima" class="form-control" value="{{old('SC_CondicionamientoMatricula_FechaMaxima')}}">
			@error('SC_CondicionamientoMatricula_FechaMaxima')
				<small>{{$message}}</small>
			@enderror
		</div>
		
		<div class="form-group">
			<label for="SC_CondicionamientoMatricula_EvidenciasNoPresentadas">Evidencias no presentadas</label>
			<input type="text" name="SC_CondicionamientoMatricula_EvidenciasNoPresentadas" id="SC_CondicionamientoMatricula_EvidenciasNoPresentadas" class="form-control" value="{{old('SC_CondicionamientoMatricula_EvidenciasNoPresentadas')}}">
			@error('SC_CondicionamientoMatricula_EvidenciasNoPresentadas')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_Acto_Administrativo_FK_ID">Acto administrativo</label>
			<select name="SC_Acto_Administrativo_FK_ID" id="SC_Acto_Administrativo_FK_ID" class="form-control">
				@foreach($actoadministrativo as $actoadministrativo)
				<option value="{{$actoadministrativo->SC_ActoAdministrativoSanciones_PK_Id}}">{{$actoadministrativo->SC_ActoAdministrativoSanciones_DescripcionHechos}}</option>
				@endforeach
			</select>
			@error('SC_Acto_Administrativo_FK_ID')
				<small>{{$message}}</small>
			@enderror
		</div>


		<button type="submit" class="btn btn-success" id="btncrear">Crear</button>
	</form>
</div>
@endsection 
