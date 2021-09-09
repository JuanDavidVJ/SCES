@extends('layouts.base')
@section('title', 'Lista de Recursos de Reposición')
@section('content')

<div class="container">
	<h1>Listado de Recursos</h1>

	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif

	<form>
		<div class="input-group mb-3">
		<input type="search" class="form-control" placeholder="Ingresar razón" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
		<div class="input-group-append">
			<button class="btn btn-outline-success pl-5 pr-5 ml-2" type="submit" id="button-addon2">Buscar</button>
		</div>
		</div>
    </form>

	<div class="row">

		<table class="table table-striped">
		        <tr>
		            <th scope="col">Fecha</th>
		            <th scope="col">Radicado</th>
		            <th scope="col">Acta Comité</th>
		            <th scope="col">Accion</th>
		        </tr>
                @foreach($recursos as $recurso)
                  	<tr >
                        <td>{{$recurso->SC_Recursos_FechaGenerado}}</td>
                        <td style="width:40%">{{$recurso->SC_Recursos_Radicado}}</td>
                        <td>{{$recurso->actoComites->SC_ActaComite_Nombre}}</td>
                        <td>
					            <a href="/recursosReposicion/{{$recurso->SC_Recursos_ID}}" class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
                        </td>
                  	</tr>
                @endforeach
		</table>
	</div>
</div>
@endsection
