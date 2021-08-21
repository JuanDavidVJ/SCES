@extends('layouts.base')
@section('title', 'Crear Acto administrativo')
@section('content') 
<div class="container">

	<h1>Crear Acto administrativo</h1>
	
	<form action="/actoadministrativo" method="post"enctype="multipart/form-data" id="formulario">
		@csrf
       <div class="form-group">
			<label for="SC_ActoAdministrativoSanciones_DescripcionHechos">Descripcion</label>
			<textarea class="form-control" rows="2"name="SC_ActoAdministrativoSanciones_DescripcionHechos" 
			id="SC_ActoAdministrativoSanciones_DescripcionHechos" 
			class="form-control" 
			value="{{old('SC_ActoAdministrativoSanciones_DescripcionHechos')}}"></textarea>
			@error('SC_ActoAdministrativoSanciones_DescripcionHechos')
				<small>{{$message}}</small>
			@enderror
		</div>
		<div class="form-group">
			<label for="SC_ActoAdministrativoSanciones_PresentaDescargos">Descargos</label>
			<input type="text" 
			name="SC_ActoAdministrativoSanciones_PresentaDescargos" 
			id="SC_ActoAdministrativoSanciones_PresentaDescargos" 
			class="form-control" 
			value="{{old('SC_ActoAdministrativoSanciones_PresentaDescargos')}}">
			@error('SC_ActoAdministrativoSanciones_PresentaDescargos')
				<small>{{$message}}</small>
			@enderror
		</div>
		<div class="form-group">
			<label for="SC_ActoAdministrativoSanciones_Pruebas">Pruebas</label>
			<input type="file" 
			name="SC_ActoAdministrativoSanciones_Pruebas" 
			id="SC_ActoAdministrativoSanciones_Pruebas" 
			class="form-control" >
			@error('SC_ActoAdministrativoSanciones_Pruebas')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor">Grado de responsabilidad del autor</label>
			<input type="text" 
			name="SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor" 
			id="SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor" 
			class="form-control" 
			value="{{old('SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor')}}">
			@error('SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor')
				<small>{{$message}}</small>
			@enderror
		</div>
		<div class="form-group">
			<label for="SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion">Número de llamados de atención</label>
			<input type="number" 
			name="SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion" 
			id="SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion" 
			class="form-control" 
			value="{{old('SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion')}}">
			@error('SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion')
				<small>{{$message}}</small>
			@enderror
		</div>
		<div class="form-group">
			<label for="SC_ActoAdministrativoSanciones_Fecha">Fecha</label>
			<input type="date" 
			name="SC_ActoAdministrativoSanciones_Fecha" 
			id="SC_ActoAdministrativoSanciones_Fecha" 
			class="form-control" 
			value="{{old('SC_ActoAdministrativoSanciones_Fecha')}}">
			@error('SC_ActoAdministrativoSanciones_Fecha')
				<small>{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_Comite_FK_ID">Comite relacionado</label>
			<select name="SC_Comite_FK_ID" id="SC_Comite_FK_ID" class="form-control">
				@foreach($comite as $comite)
				<option value="{{$comite->SC_Comite_PK_ID}}">{{$comite->SC_Comite_DescripcionHechos}}</option>
				@endforeach
			</select>
			@error('SC_Comite_FK_ID')
				<small>{{$message}}</small>
			@enderror
		</div>
		<button type="submit" class="btn btn-success mb-5"id="btncrear">Crear</button>
	</form>
</div>
@endsection 
