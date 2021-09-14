@extends('layouts.base')
@section('title', 'Listado de Usuarios')
@section('content')
<div class="container">
	<h1 class="mb-3">Listado de Usuarios</h1>
		@if(session('status'))
			<p class="text-center alert alert-success">
				{{ session('status') }}
			</p>
		@endif
		<table class="table table-striped">
			<tr>
				<th scope="col">Username</th>
				<th scope="col">Nombre</th>
				<th scope="col">Correo</th>
				<th scope="col">Tipo Usuario</th>
				<th scope="col">Acción</th>
			</tr>
				@foreach($usuarios as $usuario)
				<tr>
						<td>{{ $usuario->username }}</td>
						<td>{{ $usuario->name }}</td>
						<td>{{ $usuario->email }}</td>
						<td>{{ $usuario->tipoUsuario }}</td>
						<td>
							<a href="/RegistrarUsuarios/{{ $usuario->id }}" class="btn btn-outline-default text-center p-0"><i class="fas fa-eye"></i></a>
						</td>
					</tr> 
				@endforeach
		</table>
	</div>
@endsection