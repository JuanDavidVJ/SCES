@extends('layouts.base')
@section('title', 'Listado de fichas')
@section('content')
<div class="container">
	<h1 class="mb-3">Listado de fichas</h1>
		@if(session('status'))
			<p class="text-center alert alert-success">
				{{ session('status') }}
			</p>
		@endif
		<table class="table table-striped">
			<tr>
				<th scope="col">Número de ficha</th>
				<th scope="col">Nombre</th>
				<th scope="col">Opciones</th>
			</tr>
			@foreach($fichas as $ficha)
			<tr class="p-3">
					<td class="text text-center">{{ $ficha->SC_Ficha_NumeroFicha }}</td>
					<td class="p-3">{{ $ficha->SC_Ficha_NombreProgramaFormacion }}</td>
					<td>
						<a href="/fichas/{{ $ficha->SC_Ficha_PK_ID }}" class="btn btn-outline-default text-center p-0"><i class="fas fa-eye"></i></a>
					</td>
				</tr> 
				@endforeach
						</table>
</div>
@endsection