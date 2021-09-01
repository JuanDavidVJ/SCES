@extends('layouts.base')
@section('title', 'Detalles de Solicitud')
@section('content')
	<div class="container d-flex justify-content-center">
        <div class="card text-center" style="width: 40rem;">
          <div class="card-body">
            <h3 class="card-title">Fecha: {{ $solicitar->SC_SolicitarComite_Fecha }}</h3>
            <h6>Descripción: {{ $solicitar->SC_SolicitarComite_Descripcion }}</h6>
            <h6>Testigos: {{ $solicitar->SC_SolicitarComite_Testigos }}</h6>
            <h6>Aprendiz: {{ $solicitar->aprendiz->SC_Aprendiz_Documento }}</h6>
            <h6>Observaciones: {{ $solicitar->SC_SolicitarComite_Observaciones }}</h6>
            <h6>Anexo: <a href="assets('/archivos/solicitarComite{{ $solicitar->SC_SolicitarComite_Anexo }}')" target="_blank">Ver</a></h6>
            <h6>Falta: {{ $solicitar->falta->SC_Falta_ApoyoNoSuperado  }}</h6>
            <h6>Gestor: {{ $solicitar->usuario->SC_Usuarios_Documento }}</h6>
            <h6>Instructor: {{ $solicitar->SC_Usuario_FK }}</h6>

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
                            <span>La siguiente acción eliminará la solicitud a comité: </span>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                          <form class="delete d-inline"  action="/solicitarComite/{{ $solicitar->SC_SolicitarComite_ID   }}" method="post">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger">Eliminar</button>
                          </form> 
                        </div>
                      </div>
                    </div>
                 </div>
            <a href="/solicitarComite/{{ $solicitar->SC_SolicitarComite_ID  }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
            <a href="/solicitarComite" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
          </div>
        </div>
    </div>
@endsection