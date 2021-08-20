@extends('layouts.base')
@section('title', 'Listado de Evidencias')
@section('content')
<div class="container">

	<h1>Listado de Evidencias</h1>
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
	<table class="table table-striped">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Descripción</th>
			<th scope="col">Nombre Comité</th>
			<th scope="col">Plan de Mejoramiento</th>
			<th scope="col">Opciones</th>
		</tr>
		@foreach($evidencias as $evidencia)
			<tr>
				<td>{{$evidencia->SC_Evidencias_PK_ID}}</td>
				<td>{{$evidencia->SC_Evidencias_Descripcion}}</td>
				<td>{{$evidencia->SC_Comite_FK_ID}}</td>
				<td>{{$evidencia->SC_PlanMejoramiento_FK_ID}}</td>
				<td>
				<a href="/evidencias/{{$evidencia->SC_Evidencias_PK_ID}}" class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
				</td>
			</tr>

		@endforeach
		</table>
</div>
@endsection
