@extends('layouts.base')
@section('title', 'Listado de fichas')
@section('content')
<div class="container">
	<h1 class="mb-3">Listado de fichas</h1>
	<form>
		<div class="input-group mb-3">
		<input type="number" class="form-control" placeholder="Ingresar Número Ficha" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
		<div class="input-group-append">
			<button class="btn btn-outline-success pl-5 pr-5 ml-2" type="submit" id="button-addon2">Buscar</button>
		</div>
		</div>
	</form>

		@if(session('status'))
			<p class="text-center alert alert-success">
				{{ session('status') }}
			</p>
		@endif
		<table class="table table-striped">
			<tr>
				<th scope="col">Número de ficha</th>
				<th scope="col">Nombre</th>
				<th scope="col">Acción</th>
			</tr>
			@foreach($fichas as $ficha)
			<tr>
					<td>{{ $ficha->SC_Ficha_NumeroFicha }}</td>
					<td style="width:50%">{{ $ficha->SC_Ficha_NombreProgramaFormacion }}</td>
					<td>
						<a href="/fichas/{{ $ficha->SC_Ficha_PK_ID }}" class="btn btn-outline-default text-center p-0"><i class="fas fa-eye"></i></a>
					</td>
				</tr> 
				@endforeach
						</table>
</div>
@endsection