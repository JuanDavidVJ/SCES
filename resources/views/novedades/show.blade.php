@extends('layouts.base')
@section('title', 'Detalles de jugador')
@section('content')
<div class="container d-flex justify-content-center">
		 <div class="card text-center" style="width: 40rem;">
            <img src="{{ asset('images/novedades/' . $novedad->SC_Novedades_Foto) }}" style="width: 100%">
        </div>
        <div class="card text-center" style="width: 40rem;">
            <h5>Aprendiz:</h5>
            <p>{{ $novedad->SC_Aprendiz_FK_ID }}</p>
            <h6>Descripción:</h6>
            <p>{{ $novedad->SC_Novedades_Descripcion }}</p>
            <h6>Habilidades:</h6>
            <p>{{ $novedad->SC_Novedades_HabilidadesDestrezas }}</p>
            <h5>Observaciones:</h5>
            <p>{{ $novedad->SC_Novedades_Observaciones }}</p>
            <h6>Fecha:</h6>
            <p>{{ $novedad->SC_Novedades_Fecha }}</p>
            <h6>Tipo:</h6>
            <p>{{ $novedad->SC_TipoNovedades_FK_ID }}</p>

            <form class="delete d-inline" action="/novedades/{{ $novedad->SC_Novedades_PK_ID  }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form> 
                <a href="/novedades/{{ $novedad->SC_Novedades_PK_ID }}/edit" class="btn btn-warning"><i
                        class="fas fa-wrench"></i></a>
            <a href="/novedades" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
        </div>
    </div>
@endsection