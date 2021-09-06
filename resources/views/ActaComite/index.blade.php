@extends('layouts.base')
@section('title', 'Listado de Actas')
@section('content')
	<h1>Listado de actas</h1>
	<div class="row">
		@foreach($ActaComite as $actacomite)
		<table class="table table-dark table-striped" style="text-align: justify;">
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
@endsection
