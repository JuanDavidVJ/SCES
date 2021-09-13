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
			<input type="search" class="form-control" placeholder="Ingresar razón" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
			<div class="input-group-append">
				<button class="btn btn-outline-success pl-5 pr-5 ml-2" type="submit" id="button-addon2">Buscar</button>
			</div>
		</div>
	</form>
		<table class="table table-striped">
			<tr>
					<th scope="col">Aprendiz</th>
					<th scope="col">Razón del Estimulo</th>
					<th scope="col">fecha</th>
					<th scope="col">Accion</th>
			</tr>
				@foreach($estimulos as $estimulo)
						<tr >
								<td>{{$estimulo->aprendiz->SC_Aprendiz_Nombres}} {{$estimulo->aprendiz->SC_Aprendiz_Apellidos}}</td>
								<td style="width:40%">{{$estimulo->SC_Estimulos_Razon}}</td>
								<td>{{$estimulo->SC_Estimulos_Fecha}}</td>
								<td>
							<a href="/estimulos/{{$estimulo->SC_Estimulos_PK_ID}}" class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
								</td>
						</tr>
				@endforeach
		</table>
</div>
@endsection 
