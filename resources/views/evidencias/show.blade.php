@extends('layouts.base')
@section('title', 'Detalles de Evidencias')
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('estilos/fichas/estilos.css') }}">
</head>
    <h1>Detalle Evidencia</h1>
             <div class="detalles">
                <div class="titulo">
                <p class="h5">Evidencia</p>
                </div>
                <div class="contenido">
                <p class="h5">ID: {{ $evidencia->SC_Evidencias_PK_ID }}</p>
                <p class="h5">Descripción: {{ $evidencia->SC_Evidencias_Descripcion }}</p>
                <p class="h5">Detalles: {{ $evidencia->SC_Evidencias_Detalle }}</p>
                <p class="h5">Archivo: {{ $evidencia->SC_Evidencias_Archivo }}</p>
                <p class="h5">Comité: {{ $evidencia->SC_Comite_FK_ID }}</p>
                <p class="h5">Plan de Mejoramiento: {{ $evidencia->SC_PlanMejoramiento_FK_ID }}</p>
                </div>
                <div class="botones">
                    <form class="delete d-inline" action="/evidencias/{{$evidencia->SC_Evidencias_PK_ID}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                <a href="/evidencias/{{ $evidencia->SC_Evidencias_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
                <a href="/evidencias" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
                </div>

           </div>
@endsection
