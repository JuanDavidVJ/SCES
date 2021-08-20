@extends('layouts.base')
@section('title', 'Listado de Impugnaciones')
@section('content')
<div class="container">
  <h1>Listado de Impugnaciones</h1>
    @if(session('status'))
      <p class="alert alert-success">
        {{ session('status') }}
      </p>
    @endif
  
    <table class="table table-striped">
      <tr>
        <th scope="col">Descripción</th>
        <th scope="col">Nombre</th>
        <th scope="col">Opciones</th>
      </tr>
      @foreach($impugnaciones as $impugnacion)
          <tr>
              <td>{{ $impugnacion->SC_Impugnacion_DescripcionApelacion }}</td>
              <td class="nombre">{{ $impugnacion->SC_Comite_FK_ID }}</td>
              <td>
                <a href="/impugnaciones/{{ $impugnacion->SC_Impugnacion_PK_ID }}" class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
              </td>
          </tr>
        @endforeach
    </table>
</div>

@endsection
