@extends('layouts.base')
@section('title', 'Detalles de ficha')
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('estilos/fichas/estilos.css') }}">
</head>
    <h1>Detalle Ficha</h1>
             <div class="detalles">
                <div class="titulo">
                <p class="h5">{{ $ficha->SC_Ficha_NombreProgramaFormacion }}</p>
                </div>
                <div class="contenido">
                <p class="h5">Número Ficha: {{ $ficha->SC_Ficha_NumeroFicha }}</p>
                <p class="h5">Fecha Inicio: {{ $ficha->SC_Ficha_FechaInicio }}</p>
                <p class="h5">Fecha Final: {{ $ficha->SC_Ficha_FechaFin }}</p>
                </div>
                <div class="botones">
                <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                <a href="/fichas/{{ $ficha->SC_Ficha_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
                <a href="/fichas" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
                </div>

           </div>
@endsection