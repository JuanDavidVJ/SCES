@extends('layouts.base')
@section('title', 'Actas Comités')
@section('content')
<div class="container">
	<h1 class="mt-3">Listado de actas</h1>

	<div class="input-group mb-3">
	<form class="form-inline my-2 my-lg-0 float-right">
		<input type="search" class="form-control" placeholder="Ingresar el Código" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
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
			<th scope="col">Codigo</th>
			<th scope="col">Descripcion</th>
			<th scope="col">Estado</th>
			<th scope="col">Numero solicitud</th>
			<th scope="col">Acción</th>
		</tr>
		@foreach($ActaComite as $actacomite)
			  <tr>
				<td>{{$actacomite->SC_ActaComite_Codigo}}</td>
				<td>{{$actacomite->SC_ActaComite_Descripcion}}</td>
				<td>{{$actacomite->SC_ActaComite_Estado}}</td>
				<td>{{$actacomite->SC_ActaComite_NumeroSolicitud}}</td>
				<td>
					<a href="/ActaComite/{{$actacomite->SC_ActaComite_PK_ID}}" class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
				  </td>
				  </tr>		  
					@endforeach
	  </table>
</div>
@endsection
