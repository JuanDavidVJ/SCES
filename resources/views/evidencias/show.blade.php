@extends('layouts.base')
@section('title', 'Detalles de Evidencias')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card text-center" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title">ID N°: {{ $evidencia->SC_Evidencias_PK_ID }}</h5>
                <h6 class="card-text">Descripción: {{ $evidencia->SC_Evidencias_Descripcion }}</h6>
                <h6 class="card-text">Detalles: {{ $evidencia->SC_Evidencias_Detalle }}</h6>
                <h6 class="card-text">Archivo: <a
                        href="{{ asset('archivos/evidencias/' . $evidencia->SC_Evidencias_Archivo) }}"
                        target="_blank">Ver</a> </h6>
                

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
                        <span>La siguiente acción eliminará la evidencia: <br> ID N°: {{ $evidencia->SC_Evidencias_PK_ID }}</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                        <form class="delete d-inline" action="/evidencias/{{  $evidencia->SC_Evidencias_PK_ID }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    </div>
                    </div>
                </div>
                </div>
                
                <a href="/evidencias/{{ $evidencia->SC_Evidencias_PK_ID }}/edit" class="btn btn-warning"><i
                        class="fas fa-wrench"></i></a>
                <a href="/evidencias" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
            </div>
        </div>
    </div>
@endsection
