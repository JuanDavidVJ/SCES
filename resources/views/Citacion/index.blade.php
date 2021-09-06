@extends('layouts.base')
@section('title', 'Lista de Citaciones')
@section('content') 
<div class="container">
	<h1>Listado de Citaciones</h1>
	<form>
		<div class="input-group mb-3">
			<input type="search" class="form-control" placeholder="Ingresar descripción" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
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
				<th scope="col">Fecha</th>
				<th scope="col">Hora</th>
				<th scope="col">Lugar</th>
				<th scope="col">Ciudad</th>
				<th scope="col">Centro</th>
				<th scope="col">N° Acta</th>
			</tr>
			@foreach($Citacion as $citacion)
				<tr >
               <td>{{$citacion->SC_Citacion_FechaCitacion}}</td>
               <td>{{$citacion->SC_Citacion_Hora}}</td>
               <td>{{$citacion->SC_Citacion_Lugar}}</td>
               <td>{{$citacion->SC_Citacion_Ciudad}}</td>
			   <td>{{$citacion->SC_Citacion_Centro}}</td>
			   <td>{{$citacion->SC_Citacion_NumeroActa}}</td>
               <td>
                  <a href="/Citacion/{{$citacion->SC_CitacionPK_Id}}" class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
               </td>
				</tr>
			@endforeach
		</table>
	</div>
@endsection
