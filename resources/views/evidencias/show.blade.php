@extends('layouts.base')
@section('title', 'Detalles de Evidencias')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card text-center" style="width: 40rem;">
       <div class="card-body">
       <h5 class="card-title">ID N°: {{ $evidencia->SC_Evidencias_PK_ID }}</h5>
       <h6 class="card-text">Descripción: {{ $evidencia->SC_Evidencias_Descripcion }}</h6>
       <h6 class="card-text">Detalles: {{ $evidencia->SC_Evidencias_Detalle }}</h6>
       <h6 class="card-text">Archivo: <a href="{{asset('archivos/evidencias/'.$evidencia->SC_Evidencias_Archivo )}}" target="_blank">Ver</a> </h6>
       <h6 class="card-text">Comité: {{ $evidencia->SC_Comite_FK_ID }}</h6>
       <h6 class="card-text">Plan de Mejoramiento: {{ $evidencia->SC_PlanMejoramiento_FK_ID }}</h6>
       <a href="/evidencias/{{ $evidencia->SC_Evidencias_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
        <form class="delete d-inline" action="/evidencias/$evidencia->SC_Evidencias_PK_ID}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
        </form>
       <a href="/evidencias" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
       </div>
  </div>
</div>
@endsection