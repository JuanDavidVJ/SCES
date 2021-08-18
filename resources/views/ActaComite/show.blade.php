@extends('layouts.base')
@section('title', 'Detalles de Acta')
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('estilos/show.css') }}">
</head>
    <div class="detalles">
          <div class="titulo">
            <p class="h3">Código: {{ $actacomite->SC_ActaComite_Codigo}}</p>
          </div>
          <div class="contenido">
            <p class="h5">Descripción: {{ $actacomite->SC_ActaComite_Descripcion }}</p>
            <p class="h5">Estado: {{ $actacomite->SC_ActaComite_Estado }}</p>
			<p class="h5">Numero de solicitud: {{ $actacomite->SC_ActaComite_NumeroSolicitud}}</p>
            <p class="h5">Motivo:{{ $actacomite->SC_ActaComite_Motivo }}</p>
            <p class="h5">Testigos: {{ $actacomite->SC_ActaComite_Testigos }}</p>
            <p class="h5">Antecedentes: {{ $actacomite->SC_ActaComite_EnviarCitacionAntecedentes }}</p>
            <form class="delete d-inline" action="/ActaComite/{{ $actacomite->SC_ActaComite_PK_ID }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>       
                <a href="/ActaComite/{{ $actacomite->SC_ActaComite_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
            <a href="/ActaComite" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
          </div>
        </div>
    </div>
@endsection

