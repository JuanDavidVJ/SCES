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
		          	<th scope="col">Foto</th>
		            <th scope="col">Aprendiz</th>
		            <th scope="col">Descripcion</th>
		            <th scope="col">Habilidades</th>
		            <th scope="col">Observaciones</th>
		            <th scope="col">Fecha</th>
		            <th scope="col">Tipo</th>
		            <th scope="col">Accion</th>
		          </tr>
				  @foreach($novedades as $novedad)
		            <tr>
		            	<td><img src="{{ asset('images/novedades/' . $novedad->SC_Novedades_Foto) }}" style="width: 50%"></td>
		              	<td>{{ $novedad->aprendiz->SC_Aprendiz_Documento }}</td>
		              	<td>{{ $novedad->SC_Novedades_Descripcion }}</td>
		              	<td>{{ $novedad->SC_Novedades_HabilidadesDestrezas }}</td>
		              	<td>{{ $novedad->SC_Novedades_Observaciones }}</td>
		              	<td>{{ $novedad->SC_Novedades_Fecha }}</td>
		              	<td>{{ $novedad->SC_TipoNovedades_FK_ID }}</td>
		              	<td>
			                <form class="delete d-inline" action="/novedades/{{ $novedad->SC_Novedades_PK_ID  }}" method="post">
		              			@method('DELETE')
		              			@csrf
		              			<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
		              		</form> 
							<a href="/novedades/{{ $novedad->SC_Novedades_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
							<a href="/novedades/{{ $novedad->SC_Novedades_PK_ID }}" class="btn btn-outline-dark"></i>Ver</a>
		              	</td>
		            </tr> 
				@endforeach
		  </table>
	</div>
@endsection