@extends('layouts.base')
@section('title', 'Listado de Condicionamientos')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/fichas/estilos.css') }}">
</head>
	<h1 id="titulocondicionamiento">Listado de condicionamientos de matricula</h1>
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
		@foreach($condicionamientos as $condicionamientos)
		<table class="table table-striped" id="table">
      		<thead>
		        <tr>
		          <th scope="col">Descripción</th>
		          <th scope="col">Fecha</th>
		          <th scope="col">Fecha Máxima</th>
		          <th scope="col">Opciones</th>
		        </tr>
        		<tr class="campos">
        		  <td class="descripcion">{{$condicionamientos->SC_CondicionamientoMatricula_Descripcion}}</td>
        		  <td>{{$condicionamientos->SC_CondicionamientoMatricula_Fecha}}</td>
        		  
		          <td>{{$condicionamientos->SC_CondicionamientoMatricula_FechaMaxima}}</td>
		          
		          <td scope="col">
		          	<a href="/condicionamientos/{{$condicionamientos->SC_CondicionamientoMatricula_PK_ID}}"class="btn btn-outline-dark">ver</a>
		            <a href="/condicionamientos/{{$condicionamientos->SC_CondicionamientoMatricula_PK_ID}}/edit"class="btn btn-warning" ><i class="fas fa-wrench"></i></a>
		          	<form class="delete d-inline" action="/condicionamientos/{{$condicionamientos->SC_CondicionamientoMatricula_PK_ID}}" method="post">
					@method('DELETE')
					@csrf
					<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
					
			 		</form>
		         	
		          
		      	  </td>

       			 </tr>
			
		</thead>
		</table>
		@endforeach
	
@endsection 
