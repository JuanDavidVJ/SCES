@extends('layouts.base')
@section('title', 'Listado de Novedades')
@section('content')
<div class="container">
   <h1>Listado de Novedades</h1>
	@if(session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif
		<table class="table table-striped">
		          <tr>
		          	<th scope="col">id</th>
		            <th scope="col">Aprendiz</th>
		            <th scope="col">Descripcion</th>
		            <th scope="col">Accion</th>
		          </tr>
				  @foreach($novedades as $novedad)
		            <tr>
		            	<td>{{$novedad->SC_Novedades_PK_ID}}</td>
		              	<td>{{ $novedad->aprendiz->SC_Aprendiz_Documento }}</td>
		              	<td>{{ $novedad->SC_Novedades_Descripcion }}</td>
		              	<td>
							<a href="/novedades/{{ $novedad->SC_Novedades_PK_ID }}" class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
		              	</td>
		            </tr> 
				@endforeach
		  </table>
	</div>
@endsection