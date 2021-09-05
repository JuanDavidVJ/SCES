@extends('layouts.base')
@section('title', 'Listado de Actas')
@section('content')
<div class="container">
	<h1>Listado de Actas</h1>
	<div class="input-group mb-3">
	<input type="search" class="form-control" placeholder="Ingresar Descripción" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
		<div class="input-group-append">
			<button class="btn btn-outline-success pl-5 pr-5 ml-2" type="submit" id="button-addon2">Buscar</button>
		</div>
		</div>
		@foreach($ActaComite as $actacomite)
		<table class="table table-striped">
			<thead>
			  <tr style="font-size: 1.5em;">
				<th scope="col">Numero del acta</th>
				<th scope="col">Nombre</th>
				<th scope="col">Ciudad</th>
				<th scope="col">Fecha</th>
				<th scope="col">Hora de Inicio</th>
				<th scope="col">Hora de Fin</th>
				<th scope="col">Asistentes</th>
			  </tr>
			  <tr>
			 	<td>{{$actacomite->SC_Citacion_FK}}</td>
				<td>{{$actacomite->SC_ActaComite_Nombre}}</td>
				<td>{{$actacomite->SC_ActaComite_Ciudad}}</td>
				<td>{{$actacomite->SC_ActaComite_Fecha}}</td>
				<td>{{$actacomite->SC_ActaComite_HoraInicio}}</td>
				<td>{{$actacomite->SC_ActaComite_HoraFin}}</td>
				<td>{{$actacomite->SC_ActaComite_Asistentes}}</td>	
				<td scope="col">
					<button type="button" class="btn btn-success"><a style="color: black; text-decoration: none;" href="/ActaComite/{{$actacomite->SC_ActaComite_PK_ID}}">ver</a></button>
					<button type="button" class="btn btn-warning"> <a style="color: black; text-decoration: none;" href="/ActaComite/{{$actacomite->SC_ActaComite_PK_ID}}/edit" >Modificar</a></button>
					<form class="delete d-inline" action="/ActaComite/{{$actacomite->SC_ActaComite_PK_ID}}" method="post">
				  @method('DELETE')
				  @csrf
				  <button type="submit" class="btn btn-danger">Eliminar</button>				  
				   </form>				
				  </td>
				  </tr>		  
	  </thead>
	  </table>
		@endforeach
	</div>
</div>
@endsection
