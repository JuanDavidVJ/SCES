@extends('layouts.base')
@section('title', 'Lista de estimulos')
@section('content') 

<div class="container">
	<h1>Listado de estimulos otorgados</h1>

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
		            <th scope="col">Aprendiz</th>
		            <th scope="col">Estimulos reconocidos</th>
		            <th scope="col">Descripcion</th>
		            <th scope="col">fecha</th>
		            <th scope="col">Tipo</th>
		            <th scope="col">Accion</th>
		         </tr>
               @foreach($estimulos as $estimulo)
                  <tr >
                        <td>{{$estimulo->SC_Aprendiz_FK_ID}}</td>
                        <td>{{$estimulo->SC_Estimulos_Reconocimiento}}</td>
                        <td>{{$estimulo->SC_Estimulos_DescripcionEstimulo}}</td>
                        <td>{{$estimulo->SC_Estimulos_Fecha}}</td>
                        <td>{{$estimulo->SC_TipoEstimulos_FK_ID}}</td>
                        <td>
					            <a href="/estimulos/{{$estimulo->SC_Estimulos_PK_ID}}" class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
                        </td>		         	
                  </tr>
               @endforeach
		</table>
	</div>
</div>
@endsection 
