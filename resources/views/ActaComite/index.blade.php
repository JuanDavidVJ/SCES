@extends('layouts.base')
@section('title', 'Actas Comités')
@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('estilos/index.css') }}">
</head>
	<h1 class="mt-5">Listado de actas</h1>
  @if(session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif
		@foreach($ActaComite as $actacomite)
		<table class="table table-striped">
			<thead>
			  <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Estado</th>
          <th scope="col">Numero solicitud</th>
          <th scope="col">Acción</th>
			  </tr>
      </thead>
      <tbody>
			  <tr class="campos">
				<td>{{$actacomite->SC_ActaComite_Codigo}}</td>
				<td>{{$actacomite->SC_ActaComite_Descripcion}}</td>
				<td>{{$actacomite->SC_ActaComite_Estado}}</td>
				<td>{{$actacomite->SC_ActaComite_NumeroSolicitud}}</td>
				<td scope="col">
					<a href="/ActaComite/{{$actacomite->SC_ActaComite_PK_ID}}" class="btn btn-outline-dark">ver</a>
					<a href="/ActaComite/{{$actacomite->SC_ActaComite_PK_ID}}/edit" class="btn btn-warning" ><i class="fas fa-wrench"></i></a>
					<form class="delete d-inline" action="/ActaComite/{{$actacomite->SC_ActaComite_PK_ID}}" method="post">
				  @method('DELETE')
				  @csrf
				  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>				  
				   </form>				
				  </td>
				  </tr>		  
      </tbody>
	  </table>
		@endforeach
@endsection
