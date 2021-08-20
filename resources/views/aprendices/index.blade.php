@extends('layouts.base')
@section('title', 'Listado de Aprendices')
@section('content')
<div class="container">
	<h1 class="mt-3">Listado de Aprendices</h1>
		@if(session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
		@endif
		<table class="table table-striped">
				<tr>
					<th scope="col">Nombres</th>
					<th scope="col">Apellidos</th>
					<th scope="col">Documento</th>
					<th scope="col">Ficha</th>
					<th scope="col">Accion</th>
				</tr>
					@foreach($aprendices as $aprendiz)
						<tr class="">
								<td>{{ $aprendiz->SC_Aprendiz_Nombres }}</td>
								<td>{{ $aprendiz->SC_Aprendiz_Apellidos }}</td>
								<td>{{ $aprendiz->SC_Aprendiz_Documento}}</td>
								<td>{{ $aprendiz->SC_Ficha_PK_ID }}</td>
								<td>
									<a href="/aprendices/{{ $aprendiz->SC_Aprendiz_PK_ID }}" class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
								</td>
						</tr> 
				@endforeach
						</table>
</div>
@endsection