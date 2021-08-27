@extends('layouts.base')
@section('title', 'Detalles de Aprendiz')
@section('content')
<div class="container d-flex justify-content-center">
             <div class="card text-center" style="width: 40rem;">
                <div class="card-body">
                <h3 class="card-title">{{ $aprendiz->SC_Aprendiz_Nombres }} {{$aprendiz->SC_Aprendiz_Apellidos}}</h3>
                <h5 class="card-subtitle mb-2">Documento: <span class="text-muted">{{ $aprendiz->SC_Aprendiz_Documento }}</span></h5>
                <h6 class="card-text">Correo: <span class="text-muted">{{ $aprendiz->SC_Aprendiz_Correo }}</span></h6>
                <h6 class="card-text">Contacto: {{ $aprendiz->SC_Aprendiz_NumeroContacto }}</h6>
                <h6 class="card-text">Ficha: {{ $aprendiz->SC_Ficha_PK_ID }}</h6>
                <h6 class="card-text">Contrato Aprendizaje: {{ $aprendiz->SC_Aprendiz_ContratoAprendizajeo }}</>
                <h6 class="card-text">Empresa: {{ $aprendiz->SC_Aprendiz_Empresa }}</h6>
                

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
                        <span>La siguiente acción eliminará al aprendiz: <br> {{ $aprendiz->SC_Aprendiz_Nombres }} {{$aprendiz->SC_Aprendiz_Apellidos}}</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                        <form class="delete d-inline" action="/aprendices/{{ $aprendiz->SC_Aprendiz_PK_ID }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form> 
                    </div>
                    </div>
                </div>
                </div>

                



                <a href="/aprendices/{{ $aprendiz->SC_Aprendiz_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
                <a href="/aprendices" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
            </div>
           </div>
</div>
@endsection
