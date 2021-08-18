@extends('layouts.base')
@section('title', 'Listado de Aprendices')
@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('estilos/index.css') }}">
</head>
<h1 class="mt-5">Listado de Aprendices</h1>
	@if(session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif
		@foreach($aprendices as $aprendiz)
			<table class="table table-striped">
		        <thead>
		          <tr>
		          	<th scope="col">Nombres</th>
		          	<th scope="col">Apellidos</th>
		          	<th scope="col">Documento</th>
		            <th scope="col">Ficha</th>
		            <th scope="col">Accion</th>
		          </tr>
		        </thead>
		        <tbody>
		            <tr class="campos">
		              	<td>{{ $aprendiz->SC_Aprendiz_Nombres }}</td>
		              	<td>{{ $aprendiz->SC_Aprendiz_Apellidos }}</td>
		              	<td>{{ $aprendiz->SC_Aprendiz_Documento}}</td>
		              	<td>{{ $aprendiz->SC_Ficha_PK_ID }}</td>
		              	<td>
		              		<form class="delete d-inline" action="/aprendices/{{ $aprendiz->SC_Aprendiz_PK_ID }}" method="post">
		              			@method('DELETE')
		              			@csrf
		              			<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
		              		</form> 
							<a href="/aprendices/{{ $aprendiz->SC_Aprendiz_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
							<a href="/aprendices/{{ $aprendiz->SC_Aprendiz_PK_ID }}" class="btn btn-outline-dark"></i>Ver</a>
		              	</td>
		            </tr> 
		        </tbody>
      		</table>
      	@endforeach
@endsection