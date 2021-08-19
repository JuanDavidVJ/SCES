@extends('layouts.base')
@section('title', 'Modificar Acto')
@section('content') 
<head>
	<link rel="stylesheet" href="{{ asset('estilos/edit.css') }}">
</head>
	<h1 id="tituloacto">Modificar Acto administrativo sanciones </h1>
	<form action="/actoadministrativo/{{$actoas->SC_ActoAdministrativoSanciones_PK_Id}}" method="post" enctype="multipart/form-data" id="formularioactoadministrativo">
		@method('PUT')
		@csrf

		<div class="form-group">
			<label for="SC_ActoAdministrativoSanciones_DescripcionHechos">Descripción</label>
			<input type="text" 
			name="SC_ActoAdministrativoSanciones_DescripcionHechos" 
			id="SC_ActoAdministrativoSanciones_DescripcionHechos" 
			class="form-control" 
			value="{{$actoas->SC_ActoAdministrativoSanciones_DescripcionHechos}}">
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
			value="{{$actoas->SC_ActoAdministrativoSanciones_PresentaDescargos}}">
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
			value="{{$actoas->SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor}}">
			@error('SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor')
				<small>{{$message}}</small>
			@enderror
		</div>
		<div class="form-group">
			<label for="SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion">Número de llamados de atención</label>
			<input type="num" 
			name="SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion" 
			id="SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion" 
			class="form-control" 
			value="{{$actoas->SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion}}">
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
			value="{{$actoas->SC_ActoAdministrativoSanciones_Fecha}}">
			@error('SC_ActoAdministrativoSanciones_Fecha')
				<small>{{$message}}</small>
			@enderror
		</div>


		<div class="form-group">
			<label for="SC_Comite_FK_ID">Comite relacionado</label>
			<select name="SC_Comite_FK_ID" id="SC_Comite_FK_ID" class="form-control">
				@foreach($comite as $comite)
				<option value="{{$comite->SC_Comite_PK_ID}}" @if($comite->SC_Comite_PK_ID == $actoas->SC_Comite_FK_ID) selected @endif >{{$comite->SC_Comite_DescripcionHechos}}</option>
				@endforeach
			</select>
			@error('SC_Comite_FK_ID')
				<small>{{$message}}</small>
			@enderror
		</div>

		
		<button type="submit" class="btn btn-success" id="btnactualizar">Actualizar</button>
	</form>
@endsection 