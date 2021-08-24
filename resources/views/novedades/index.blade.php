@extends('layouts.base')
@section('title', 'Listado de Novedades')
@section('content')
<div class="container">
   <h1>Listado de Novedades</h1>
   <div class="input-group mb-3">
	<form class="form-inline my-2 my-lg-0 float-right">
		<input type="search" class="form-control" placeholder="Ingresar descripción" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
		<div class="input-group-append">
			<button class="btn btn-outline-success pl-5 pr-5 ml-2" type="submit" id="button-addon2">Buscar</button>
		</div>
    </form>
	</div>

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