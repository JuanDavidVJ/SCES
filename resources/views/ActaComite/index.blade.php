@extends('layouts.base')
@section('title', 'Actas Comités')
@section('content')
<div class="container">
	<h1 class="mt-3">Listado de actas</h1>
  @if(session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif
	<table class="table table-striped">
		<tr>
			<th scope="col">Codigo</th>
			<th scope="col">Descripcion</th>
			<th scope="col">Estado</th>
			<th scope="col">Numero solicitud</th>
			<th scope="col">Acción</th>
		</tr>
		@foreach($ActaComite as $actacomite)
			  <tr>
				<td>{{$actacomite->SC_ActaComite_Codigo}}</td>
				<td>{{$actacomite->SC_ActaComite_Descripcion}}</td>
				<td>{{$actacomite->SC_ActaComite_Estado}}</td>
				<td>{{$actacomite->SC_ActaComite_NumeroSolicitud}}</td>
				<td>
					<a href="/ActaComite/{{$actacomite->SC_ActaComite_PK_ID}}" class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
				  </td>
				  </tr>		  
					@endforeach
	  </table>
</div>
@endsection
