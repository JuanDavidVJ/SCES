@extends('layouts.base')
@section('title','Detalle falta')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card text-center" style="width: 40rem;padding:13px;">
        
            <!-- <img src="{{ asset('documents/faltas/'. $falta->SC_Falta_UrlDocumentosAnteriores) }}" style=" width: auto;height: 100%;margin-left: -10px;"> -->
       
            <div class="card-body">
            <h6 class="card-text">Apoyo no superado: {{ $falta->SC_Falta_ApoyoNoSuperado }}</h6>
            <h6 class="card-text">Estrategia no Superada: {{ $falta->SC_Falta_EstrategiaNoSuperada }}</h6>
            <h6 class="card-text">Actividades no realizadas por el Aprendiz: {{ $falta->SC_Falta_ActividadesRealizadasAprendiz }}</h6>
            <h6 class="card-text"> Url Documentos Anteriores: {{ $falta->SC_Falta_UrlDocumentosAnteriores }}</p>
            <h6 class="card-text">Actuación Aprendiz: {{ $falta->SC_Falta_ActuacionAprendiz }}</p>
            <h6 class="card-text">Infracción: Artículo {{ $falta->reglamento->SC_Reglamento_Articulo }} No.{{ $falta->reglamento->SC_Reglamento_Numeral }}</p>
            <h6 class="card-text">Tipo Falta: {{ $falta->tipoFalta->SC_TipoFalta_Descripcion }}</p>

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
                        <span>La siguiente acción eliminará la falta: <br> {{ $aprendiz->SC_Aprendiz_Nombres }} {{$aprendiz->SC_Aprendiz_Apellidos}}</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                        <form class="delete d-inline" action="/faltas/{{ $falta->SC_Falta_PK_ID }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    </div>
                    </div>
                </div>
                </div>
            
            
            <a href="/faltas/{{ $falta->SC_Falta_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
            
            <a href="/faltas" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
        </div>
    </div>

@endsection
    
