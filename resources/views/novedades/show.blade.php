@extends('layouts.base')
@section('title', 'Detalles de jugador')
@section('content')
<div class="container d-flex justify-content-center">
		 <div class="card text-center" style="width: 40rem;">

        
        <div class="card-body">
            <h3 class="card-title">ID: {{ $novedad->SC_Aprendiz_FK_ID }}</h3>
            <h5 class="card-subtitle mb-2 text-muted">Descripción: {{ $novedad->SC_Novedades_Descripcion }}</h5>
            <h6 class="card-text">Habilidades: {{ $novedad->SC_Novedades_HabilidadesDestrezas }}</h6>
            <h6 class="card-text">Observaciones: {{ $novedad->SC_Novedades_Observaciones }}</h6>
            <h6 class="card-text">Fecha: {{ $novedad->SC_Novedades_Fecha }}</h6>
            <h6 class="card-text">Tipo: {{ $novedad->SC_TipoNovedades_FK_ID }}</h6>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#alertDelete">
            <i class="fas fa-trash-alt"></i>
            </button>

            <!-- Modal -->
                <div class="modal fade" id="alertDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="alertDeleteLabel">Confirmación de eliminación</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span>La siguiente acción eliminará la novedad: </span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                        <form class="delete d-inline" action="/novedades/{{ $novedad->SC_Novedades_PK_ID  }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form> 
                    </div>
                    </div>
                </div>
                </div>
                <a href="/novedades/{{ $novedad->SC_Novedades_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
                <a href="/novedades" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
                </div>
        </div>
    </div>
@endsection