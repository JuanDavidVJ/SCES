@extends('layouts.base')
@section('title', 'Detalles de Aprendiz')
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('estilos/show.css') }}">
</head>
    <h1>Detalle Aprendiz</h1>
             <div class="detalles">
                <div class="titulo">
                <p class="h5">{{ $aprendiz->SC_Aprendiz_Nombres }} {{$aprendiz->SC_Aprendiz_Apellidos}}</p>
                </div>
                <div class="contenido">
                <p class="h5">Documento: {{ $aprendiz->SC_Aprendiz_Documento }}</p>
                <p class="h5">Correo: {{ $aprendiz->SC_Aprendiz_Correo }}</p>
                <p class="h5">Contacto: {{ $aprendiz->SC_Aprendiz_NumeroContacto }}</p>
                <p class="h5">Ficha: {{ $aprendiz->SC_Ficha_PK_ID }}</p>
                <p class="h5">Contrato Aprendizaje: {{ $aprendiz->SC_Aprendiz_ContratoAprendizajeo }}</p>
                <p class="h5">Empresa: {{ $aprendiz->SC_Aprendiz_Empresa }}</p>
                <p class="h5">Comité: {{ $aprendiz->SC_Comite_FK_ID }}</p>
                </div>
                <div class="botones">
                <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                <a href="/aprendices/{{ $aprendiz->SC_Aprendiz_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
                <a href="/aprendices" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
                </div>

           </div>
@endsection