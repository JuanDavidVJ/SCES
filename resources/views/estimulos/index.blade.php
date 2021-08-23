@extends('layouts.base')
@section('title', 'Lista de estimulos')
@section('content') 
@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
<div class="container">
	<h1>Listado de estimulos otorogados</h1>
	<div class="row">
		@foreach($estimulos as $estimulo)
		<table class="table table-dark table-striped">
      		<thead>
		        <tr style="font-size: 1.5em;">
		          <th scope="col">Aprendiz</th>
		          <th scope="col">Estimulos reconocidos</th>
		          <th scope="col">Descripcion</th>
		          <th scope="col">fecha</th>
		          <th scope="col">Tipo</th>
		          <th scope="col">Accion</th>
		        </tr>
        		<tr >
        		  <td>{{$estimulo->SC_Aprendiz_FK_ID}}</td>
		          <td>{{$estimulo->SC_Estimulos_Reconocimiento}}</td>
		          <td>{{$estimulo->SC_Estimulos_DescripcionEstimulo}}</td>
		          <td>{{$estimulo->SC_Estimulos_Fecha}}</td>
		          <td>{{$estimulo->SC_TipoEstimulos_FK_ID}}</td>
		          
		          <td scope="col">
		          	<button type="button" class="btn btn-success"><a style="color: black; text-decoration: none;" href="/estimulos/{{$estimulo->SC_Estimulos_PK_ID}}">ver</a></button>
		          	<button type="button" class="btn btn-warning"> <a style="color: black; text-decoration: none;" href="/estimulos/{{$estimulo->SC_Estimulos_PK_ID}}/edit" >Modificar</a></button>
		          	<form class="delete d-inline" action="/estimulos/{{$estimulo->SC_Estimulos_PK_ID}}" method="post">
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
