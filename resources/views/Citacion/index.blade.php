@extends('layouts.base')
@section('title', 'Lista de Citaciones')
@section('content') 
<div class="container">
	<h1>Listado de Citaciones</h1>
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif

	<form>
		<div class="input-group mb-3">
		<input type="search" class="form-control" placeholder="Ingresar descripción" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
		<div class="input-group-append">
			<button class="btn btn-outline-success pl-5 pr-5 ml-2" type="submit" id="button-addon2">Buscar</button>
		</div>
		</div>
    </form>
	
	<div class="row">
		<table class="table table-striped">
			<tr>
				<th scope="col">Acta Comite</th>
				<th scope="col">Fecha</th>
				<th scope="col">Hora</th>
				<th scope="col">Lugar</th>
				<th scope="col">Ciudad</th>
				<th scope="col">Centro</th>
				<th scope="col">Comite</th>
			</tr>
			@foreach($Citacion as $citacion)
				<tr >
               <td>{{$citacion->SC_ActaComite_FK_ID}}</td>
               <td>{{$citacion->SC_Citacion_FechaCitacion}}</td>
               <td>{{$citacion->SC_Citacion_Hora}}</td>
               <td>{{$citacion->SC_Citacion_Lugar}}</td>
               <td>{{$citacion->SC_Citacion_Ciudad}}</td>
               <td>{{$citacion->SC_Citacion_Centro}}</td>
               <td>{{$citacion->SC_Comite_FK_ID}}</td>
               <td>
                  <a href="/Citacion/{{$citacion->SC_CitacionPK_Id}}" class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
               </td>		         	
				</tr>
			@endforeach
		</table>
	</div>
<!--
	<div class="row">
		@foreach($Citacion as $citacion)
		<table class="table table-dark table-striped" style="text-align: justify;">
      		<thead>
		        <tr style="font-size: 1.5em;">
		          <th scope="col">Acta Comite</th>
		          <th scope="col">Fecha</th>
		          <th scope="col">Hora</th>
		          <th scope="col">Lugar</th>
		          <th scope="col">Ciudad</th>
		          <th scope="col">Centro</th>
                  <th scope="col">Comite</th>
		        </tr>
        		<tr >
        		  <td>{{$citacion->SC_ActaComite_FK_ID}}</td>
		          <td>{{$citacion->SC_Citacion_FechaCitacion}}</td>
		          <td>{{$citacion->SC_Citacion_Hora}}</td>
		          <td>{{$citacion->SC_Citacion_Lugar}}</td>
		          <td>{{$citacion->SC_Citacion_Ciudad}}</td>
                  <td>{{$citacion->SC_Citacion_Centro}}</td>
		          <td>{{$citacion->SC_Comite_FK_ID}}</td>
		          
		          <td scope="col">
		          	<button type="button" class="btn btn-success"><a style="color: black; text-decoration: none;" href="/Citacion/{{$citacion->SC_CitacionPK_Id}}">ver</a></button>
		          	<button type="button" class="btn btn-warning"><a style="color: black; text-decoration: none;" href="/Citacion/{{$citacion->SC_CitacionPK_Id}}/edit" >Modificar</a></button>
		          	<form class="delete d-inline" action="/Citacion/{{$citacion->SC_CitacionPK_Id}}" method="post">
					@method('DELETE')
					@csrf
					<button type="submit" class="btn btn-danger">Eliminar</button>					
			 		</form>          
		      	  </td>
       			</tr>
			
		</thead>
		</table>
		@endforeach
	</div>-->
</div>
@endsection 
