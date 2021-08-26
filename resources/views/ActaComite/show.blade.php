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
                            <span>La siguiente acción eliminará el comité: <br> Código N° {{ $actacomite->SC_ActaComite_Codigo}}</span>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                        <form class="delete d-inline" action="/ActaComite/{{ $actacomite->SC_ActaComite_PK_ID }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <a href="/ActaComite/{{ $actacomite->SC_ActaComite_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
            <a href="/ActaComite" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
        </div>
    </div>
</div>
@endsection

