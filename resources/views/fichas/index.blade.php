@extends('layouts.base')
@section('title', 'Listado de fichas')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/fichas/estilos.css') }}">
</head>
<h1>Listado de fichas</h1>
	@if(session('status'))
		<p class="alert alert-success">
			{{ session('status') }}
		</p>
	@endif

	    @foreach($fichas as $ficha)
			<table class="table table-striped">
		        <tr>
		          	<th scope="col">Número de ficha</th>
		          	<th scope="col">Nombre</th>
		            <th scope="col">Opciones</th>
		          </tr>
		            <tr class="campos">
		              	<td>{{ $ficha->SC_Ficha_NumeroFicha }}</td>
		              	<td class="nombre">{{ $ficha->SC_Ficha_NombreProgramaFormacion }}</td>
		              	<td>
		              		<a href="/fichas/{{ $ficha->SC_Ficha_PK_ID }}" class="btn btn-outline-dark"></i>Ver</a>
		              		<a href="/fichas/{{ $ficha->SC_Ficha_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
		              		<form class="delete d-inline" action="/fichas/{{ $ficha->SC_Ficha_PK_ID }}" method="post">
		              			@method('DELETE')
		              			@csrf
		              			<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
		              		</form> 
							
							
		              	</td>
		            </tr> 
      		</table>
      	@endforeach
	
@endsection