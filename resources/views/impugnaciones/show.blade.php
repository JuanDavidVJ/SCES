@extends('layouts.base')
@section('title', 'Detalles de Impugnación')
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('estilos/fichas/estilos.css') }}">
</head>
    <h1>Detalle Impugnación</h1>
             <div class="detalles">
                <div class="titulo">
                <p class="h5">Impugnación</p>
                </div>
                <div class="contenido">
                <p class="h5">Descripción: {{ $impugnaciones->SC_Impugnacion_DescripcionApelacion }}</p>
                <p class="h5">Sanción: {{ $impugnaciones->SC_Comite_FK_ID }}</p>
                </div>
                <div class="botones">
                    <form class="delete d-inline" action="/impugnaciones/{{$impugnaciones->SC_Impugnacion_PK_ID}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                <a href="/impugnaciones/{{ $impugnaciones->SC_Impugnacion_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
                <a href="/impugnaciones" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
                </div>

           </div>
@endsection
