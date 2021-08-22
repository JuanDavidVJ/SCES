@extends('layouts.base')
@section('title', 'Detalles de Llamados de Atención')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card text-center" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title">ID N°: {{ $llamados->SC_Llamado_Atencion_PK_ID }}</h5>
                <h6 class="card-text">Descripción: {{ $llamados->SC_Llamado_Atencion_Descripcion }}</h6>
                <h6 class="card-text">Fecha: {{ $llamados->SC_Llamado_Atencion_Fecha }}</h6>
                <h6 class="card-text">Evidencias no presentadas: {{ $llamados->SC_Llamado_Atencion_EvidenciasNoPresentadas }}</h6>
                <h6 class="card-text">Acto Administrativo: {{ $llamados->SC_ActoAdministrativoSanciones_FK_ID }}</h6>
                <a href="/llamadosAtencion/{{ $llamados->SC_Llamado_Atencion_PK_ID }}/edit" class="btn btn-warning"><i
                        class="fas fa-wrench"></i></a>
                <form class="delete d-inline" action="/llamadosAtencion/{{  $llamados->SC_Llamado_Atencion_PK_ID }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form>
                <a href="/llamadosAtencion" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
            </div>
        </div>
    </div>
@endsection
