@extends('layouts.base')
@section('title', 'Crear Plan mejoramiento')
@section('content') 
<div class="container">
	<h1>Crear plan mejoramiento</h1>
	<form action="/planmejoramiento" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="SC_PlanMejoramiento_Descripcion">Descripcion</label>
			<input type="text" name="SC_PlanMejoramiento_Descripcion" id="SC_PlanMejoramiento_Descripcion" class="form-control" value="{{old('SC_PlanMejoramiento_Descripcion')}}">
			@error('SC_PlanMejoramiento_Descripcion')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_PlanMejoramiento_Fecha">Fecha</label>
			<input type="date" name="SC_PlanMejoramiento_Fecha" id="SC_PlanMejoramiento_Fecha" class="form-control" value="{{old('SC_PlanMejoramiento_Fecha')}}">
			@error('SC_PlanMejoramiento_Fecha')
				<small>{{$message}}</small>
			@enderror
		</div>
		<div class="form-group">
			<label for="SC_PlanMejoramiento_FechaMaxima">Fecha maxima</label>
			<input type="date" name="SC_PlanMejoramiento_FechaMaxima" id="SC_PlanMejoramiento_FechaMaxima" class="form-control" value="{{old('SC_PlanMejoramiento_FechaMaxima')}}">
			@error('SC_PlanMejoramiento_FechaMaxima')
				<small>{{$message}}</small>
			@enderror
		</div>
		
		<div class="form-group">
			<label for="SC_PlanMejoramiento_EvidenciasNoPresentadas">Evidencias no presentadas</label>
			<input type="text" name="SC_PlanMejoramiento_EvidenciasNoPresentadas"
			 id="SC_PlanMejoramiento_EvidenciasNoPresentadas" 
			 class="form-control"
			  value="{{old('SC_PlanMejoramiento_EvidenciasNoPresentadas')}}">
			@error('SC_PlanMejoramiento_EvidenciasNoPresentadas')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_ActoAdministrativo_FK_ID">Acto administrativo</label>
			<select name="SC_ActoAdministrativo_FK_ID" id="SC_ActoAdministrativo_FK_ID" class="form-control" style="font-size: 0.9em;">
				@foreach($actoadministrativo as $actoadministrativo)
				<option value="{{$actoadministrativo->SC_ActoAdministrativoSanciones_PK_Id}}">{{$actoadministrativo->SC_ActoAdministrativoSanciones_DescripcionHechos}}</option>
				@endforeach
			</select>
			@error('SC_ActoAdministrativo_FK_ID')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_PlanMejoramiento">Plan de mejoramiento:</label>
			<input type="file" 
			name="SC_PlanMejoramiento" 
			id="SC_PlanMejoramiento" 
			class="form-control" >
			@error('SC_PlanMejoramiento')
				<small>{{$message}}</small>
			@enderror
		</div>
		<button type="submit" class="btn btn-success2">Crear</button>
	</form>
</div>
@endsection