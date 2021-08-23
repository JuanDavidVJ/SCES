@extends('layouts.base')
@section('title', 'Detalles de ficha')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card text-center" style="width: 40rem;">
      <div class="card-body">
        <h3 class="card-title">Ficha N° {{ $ficha->SC_Ficha_NumeroFicha }}</h3>
        <h5 class="card-subtitle mb-2 text-muted">{{ $ficha->SC_Ficha_NombreProgramaFormacion }}</h5>
        <h6 class="card-text">Fecha de Inicio: {{ $ficha->SC_Ficha_FechaInicio }}</h6>
        <h6 class="card-text mb-3">Fecha de Final: {{ $ficha->SC_Ficha_FechaInicio }}</h6>
            <form class="delete d-inline" action="/fichas/{{ $ficha->SC_Ficha_PK_ID }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form> 
        
        <a href="/fichas/{{ $ficha->SC_Ficha_PK_ID }}/edit" class="btn btn-outline-warning"><i class="fas fa-wrench"></i></a>
        <a href="/fichas" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
      </div>
    </div>
</div>
@endsection