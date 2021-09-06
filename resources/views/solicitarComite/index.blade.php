@extends('layouts.base')
@section('title', 'Listado de Solicitudes')
@section('content')

<div class="container">
	@if(session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif

    <h1>Listado de Solicitudes</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Fecha</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Aprendiz</th>
          <th scope="col">Instructor</th>
          <th scope="col">Accion</th>
        </tr>
        @foreach($solicitudes as $solicitud)
          <tr>
              <td>{{ $solicitud->SC_SolicitarComite_Fecha }}</td>
              <td>{{ $solicitud->SC_SolicitarComite_Descripcion }}</td>
              <td>{{ $solicitud->aprendiz->SC_Aprendiz_Nombres }}</td>
              <td>{{ $solicitud->usuario->SC_Usuarios_Nombre }}</td>
              <td><a href="/solicitarComite/{{ $solicitud->SC_SolicitarComite_ID }}" class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
              </td>
          </tr> 
        @endforeach
            </table>
    </div>
  </div>
@endsection