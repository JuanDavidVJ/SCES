@extends('layouts.base')
@section('title', 'Lista de Actos A. Sanciones')
@section('content') 
<head>
	<link rel="stylesheet" href="{{ asset('estilos/index.css') }}">
</head>

	<h1 id="tituloacto">Listado de Acto Administrativos de Sanciones</h1>
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
		@foreach($actoas as $actoas)
		<table class="table table-striped"class="table">
      		<thead>
		        <tr>
		          <th scope="col">ID</th>
		          <th scope="col">Descripción</th>
		          <th scope="col">Descargos</th>
		          <th scope="col">Fecha</th>
		          <th scope="col">Opciones</th>
		        </tr>
        		<tr class="campos">
        		  <td>{{$actoas->SC_ActoAdministrativoSanciones_PK_Id}}</td>
                  <td class="descripcion">{{$actoas->SC_ActoAdministrativoSanciones_DescripcionHechos}}</td>
                  <td class="descripcion">{{$actoas->SC_ActoAdministrativoSanciones_PresentaDescargos}}</td>
		          <td>{{$actoas->SC_ActoAdministrativoSanciones_Fecha}}</td>

	                <td scope="col">
			          	<a href="/actoadministrativo/{{$actoas->SC_ActoAdministrativoSanciones_PK_Id}}" class="btn btn-outline-dark">ver</a>

			            <a href="/actoadministrativo/{{$actoas->SC_ActoAdministrativoSanciones_PK_Id}}/edit"class="btn btn-warning" ><i class="fas fa-wrench"></i></a>

			           <form class="delete d-inline" action="/actoadministrativo/{{$actoas->SC_ActoAdministrativoSanciones_PK_Id}}" method="post">
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
