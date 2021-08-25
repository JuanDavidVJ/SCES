@extends('layouts.base')
@section('title', 'Modificar Acto')
@section('content') 
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>

<div class="container">

	<h1>Modificar Acto administrativo sanciones </h1>
	<form action="/actoadministrativo/{{$actoas->SC_ActoAdministrativoSanciones_PK_Id}}" method="post" enctype="multipart/form-data" id="formularioactoadministrativo">
		@method('PUT')
		@csrf

		<div class="form-group">
		  <span class="input-group-text" for="SC_ActoAdministrativoSanciones_DescripcionHechos">Descripción</span>
			<input type="text" 
			name="SC_ActoAdministrativoSanciones_DescripcionHechos" 
			id="SC_ActoAdministrativoSanciones_DescripcionHechos" 
			class="form-control" 
			value="{{$actoas->SC_ActoAdministrativoSanciones_DescripcionHechos}}">
			@error('SC_ActoAdministrativoSanciones_DescripcionHechos')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
		  <span class="input-group-text" for="SC_ActoAdministrativoSanciones_PresentaDescargos">Descargos</span>
			<input type="text" 
			name="SC_ActoAdministrativoSanciones_PresentaDescargos" 
			id="SC_ActoAdministrativoSanciones_PresentaDescargos" 
			class="form-control" 
			value="{{$actoas->SC_ActoAdministrativoSanciones_PresentaDescargos}}">
			@error('SC_ActoAdministrativoSanciones_PresentaDescargos')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
		   <span class="input-group-text" for="SC_ActoAdministrativoSanciones_Pruebas">Pruebas</span>
			<input type="file" 
			name="SC_ActoAdministrativoSanciones_Pruebas" 
			id="SC_ActoAdministrativoSanciones_Pruebas" 
			class="form-control" >
			@error('SC_ActoAdministrativoSanciones_Pruebas')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
		   <span class="input-group-text" for="SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor">Grado de responsabilidad del autor</span>
			<input type="text" 
			name="SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor" 
			id="SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor" 
			class="form-control" 
			value="{{$actoas->SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor}}">
			@error('SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
		  <span class="input-group-text" for="SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion">Número de llamados de atención</span>
			<input type="number" 
			name="SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion" 
			id="SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion" 
			class="form-control" 
			value="{{$actoas->SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion}}">
			@error('SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
		<span class="input-group-text" for="SC_ActoAdministrativoSanciones_Fecha">Fecha</span>
			<input type="date" 
			name="SC_ActoAdministrativoSanciones_Fecha" 
			id="SC_ActoAdministrativoSanciones_Fecha" 
			class="form-control" 
			value="{{$actoas->SC_ActoAdministrativoSanciones_Fecha}}">
			@error('SC_ActoAdministrativoSanciones_Fecha')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>


		<div class="form-group">
		  <span class="input-group-text" for="SC_Comite_FK_ID">Comite relacionado</span>
			<select name="SC_Comite_FK_ID" id="SC_Comite_FK_ID" class="form-control">
				@foreach($comite as $comite)
				<option value="{{$comite->SC_Comite_PK_ID}}" @if($comite->SC_Comite_PK_ID == $actoas->SC_Comite_FK_ID) selected @endif >{{$comite->SC_Comite_DescripcionHechos}}</option>
				@endforeach
			</select>
			@error('SC_Comite_FK_ID')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		
		<button type="submit" class="btn btn-success mb-5" id="btnactualizar">Actualizar</button>
	</form>
</div>
@endsection 
