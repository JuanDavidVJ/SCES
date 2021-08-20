@extends('layouts.base')
@section('title', 'Detalles de Impugnación')
@section('content')
<div class="container d-flex justify-content-center">
  <div class="card text-center" style="width: 40rem;">
    <div class="card-body">
    <h5 class="card-title">Descripción: {{ $impugnaciones->SC_Impugnacion_DescripcionApelacion }}</h5>
    <p class="h5">Sanción: {{ $impugnaciones->SC_Comite_FK_ID }}</p>
    <a href="/impugnaciones/{{ $impugnaciones->SC_Impugnacion_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
        <form class="delete d-inline" action="/impugnaciones/{{$impugnaciones->SC_Impugnacion_PK_ID}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
        </form>
        <a href="/impugnaciones" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
    </div>
</div>
</div>
@endsection
