@extends('layouts.base')
@section('title', 'Detalles de Acta')
@section('content')
<div class="container d-flex justify-content-center">

    <div class="card text-center" style="width: 40rem;">
          <div class="card-body">
            <h3 class="card-title">Código N° {{ $actacomite->SC_ActaComite_Codigo}}</h3>
            <h6 class="card-text">Descripción: {{ $actacomite->SC_ActaComite_Descripcion }}</h6>
            <h6 class="card-text">Estado: {{ $actacomite->SC_ActaComite_Estado }}</h6>
			<h6 class="card-text">Numero de solicitud: {{ $actacomite->SC_ActaComite_NumeroSolicitud}}</h6>
            <h6 class="card-text">Motivo:{{ $actacomite->SC_ActaComite_Motivo }}</h6>
            <h6 class="card-text">Testigos: {{ $actacomite->SC_ActaComite_Testigos }}</h6>
            <h6 class="card-text">Antecedentes: {{ $actacomite->SC_ActaComite_EnviarCitacionAntecedentes }}</h6>
            <a href="/ActaComite/{{ $actacomite->SC_ActaComite_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
            <form class="delete d-inline" action="/ActaComite/{{ $actacomite->SC_ActaComite_PK_ID }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>       
            <a href="/ActaComite" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
        </div>
    </div>
</div>
@endsection

