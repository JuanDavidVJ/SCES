@extends('layouts.base')
@section('title', 'Listado de Impugnaciones')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/fichas/estilos.css') }}">
</head>
<h1>Listado de Impugnaciones</h1>
	@if(session('status'))
		<p class="alert alert-success">
			{{ session('status') }}
		</p>
	@endif

	    @foreach($impugnaciones as $impugnacion)
			<table class="table table-striped">
		        <tr>
		          	<th scope="col">Descripción</th>
		          	<th scope="col">Nombre</th>
		            <th scope="col">Opciones</th>
		          </tr>
		            <tr class="campos">
		              	<td>{{ $impugnacion->SC_Impugnacion_DescripcionApelacion }}</td>
		              	<td class="nombre">{{ $impugnacion->SC_Comite_FK_ID }}</td>
		              	<td>
		              		<a href="/impugnaciones/{{ $impugnacion->SC_Impugnacion_PK_ID }}" class="btn btn-outline-dark"></i>Ver</a>
		              		<a href="/impugnaciones/{{ $impugnacion->SC_Impugnacion_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
		              		<form class="delete d-inline" action="/impugnaciones/{{ $impugnacion->SC_Impugnacion_PK_ID }}" method="post">
		              			@method('DELETE')
		              			@csrf
		              			<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
		              		</form>


		              	</td>
		            </tr>
      		</table>
      	@endforeach

@endsection
