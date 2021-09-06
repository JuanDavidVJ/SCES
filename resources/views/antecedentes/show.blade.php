@extends('layouts.base')
@section('title', 'Detalles de Antecedente')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card text-center" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title">ID N°: {{ $antecedentes->SC_Antecedentes_PK_ID }}</h5>
                <h6 class="card-text">Descripción: {{ $antecedentes->SC_Antecedentes_Descripcion }}</h6>
                <h6 class="card-text">Habilidades y Destrezas: {{ $antecedentes->SC_Antecedentes_HabilidadesDestrezas }}</h6>
                <h6 class="card-text">Observaciones: {{ $antecedentes->SC_Antecedentes_Observaciones }}</h6>
                <h6 class="card-text">Fecha: {{ $antecedentes->SC_Antecedentes_Fecha }}</h6>
                <h6 class="card-text">Foto: <a
                        href="{{ asset('images/antecedentes/' . $antecedentes->SC_Antecedentes_Foto) }}"
                        target="_blank">Ver</a> </h6>
                <h6 class="card-text">Aprendiz: {{ $antecedentes->SC_Aprendiz_FK_ID }}</h6>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#alertDelete">
                    <i class="fas fa-trash-alt"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="alertDelete" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-center" id="alertDeleteLabel">Confirmación de eliminación</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span>La siguiente acción eliminará la evidencia: <br> ID N°:
                                    {{ $antecedentes->SC_Antecedentes_PK_ID }}</span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                                <form class="delete d-inline" action="/antecedentes/{{ $antecedentes->SC_Antecedentes_PK_ID }}"
                                    method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="/antecedentes/{{ $antecedentes->SC_Antecedentes_PK_ID }}/edit" class="btn btn-warning"><i
                        class="fas fa-wrench"></i></a>
                <a href="/antecedentes" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
            </div>
        </div>
    </div>
@endsection
