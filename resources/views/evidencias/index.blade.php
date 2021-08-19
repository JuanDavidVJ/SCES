@extends('layouts.base')
@section('title', 'Listado de Evidencias')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/index.css') }}">
</head>

	<h1>Listado de Evidencias</h1>
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
		@foreach($evidencias as $evidencia)
		<table class="table table-striped"class="table">
      		<thead>
		        <tr>
		          <th scope="col">ID</th>
		          <th scope="col">Descripción</th>
		          <th scope="col">Nombre Comité</th>
		          <th scope="col">Plan de Mejoramiento</th>
		          <th scope="col">Opciones</th>
		        </tr>
        		<tr class="campos">
        		  <td>{{$evidencia->SC_Evidencias_PK_ID}}</td>
                  <td class="descripcion">{{$evidencia->SC_Evidencias_Descripcion}}</td>
		          <td>{{$evidencia->SC_Comite_FK_ID}}</td>
		          <td>{{$evidencia->SC_PlanMejoramiento_FK_ID}}</td>

	                <td scope="col">
			          	<a href="/evidencias/{{$evidencia->SC_Evidencias_PK_ID}}" class="btn btn-outline-dark">ver</a>

			            <a href="/evidencias/{{$evidencia->SC_Evidencias_PK_ID}}/edit"class="btn btn-warning" ><i class="fas fa-wrench"></i></a>

			           <form class="delete d-inline" action="/evidencias/{{$evidencia->SC_Evidencias_PK_ID}}" method="post">
						@method('DELETE')
						@csrf
						<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

				 		</form>
			         </td>
                </tr>

		</thead>
		</table>
		@endforeach
@endsection
