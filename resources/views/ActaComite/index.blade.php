@extends('layouts.base')
@section('title', 'Listado de Actas')
@section('content')
<div class="container">
	<h1>Listado de Actas</h1>
	<form>
		<div class="input-group mb-3">
			<input type="search" class="form-control" placeholder="Ingresar Descripción" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
				<div class="input-group-append">
					<button class="btn btn-outline-success pl-5 pr-5 ml-2" type="submit" id="button-addon2">Buscar</button>
				</div>
		</div>
	</form>
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
		<table class="table table-striped">
				<tr>
					<th scope="col">Numero del acta</th>
					<th scope="col">Nombre</th>
					<th scope="col">Ciudad</th>
					<th scope="col">Asistentes</th>
					<th scope="col">Acción</th>
			  </tr>
				@foreach($ActaComite as $actacomite)
			  <tr>
					<td>{{$actacomite->citacion->SC_Citacion_NumeroActa}}</td>
					<td>{{$actacomite->SC_ActaComite_Nombre}}</td>
					<td>{{$actacomite->SC_ActaComite_Ciudad}}</td>
					<td>{{$actacomite->SC_ActaComite_Asistentes}}</td>	
					<td scope="col">
						<a href="/ActaComite/{{$actacomite->SC_ActaComite_PK_ID}}" class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
					</td>
				</tr>
				@endforeach
	  </table>
	</div>
</div>
@endsection
