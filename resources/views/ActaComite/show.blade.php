@extends('layouts.base')
@section('title', 'Detalles de Acta')
@section('content')
    <div class="row">
        <div class="col-sm-8">
            <h5>Numero del acta:</h5>
            <p>{{ $actacomite->SC_Citacion_FK}}</p>
            <h5>Nombre:</h5>
            <p>{{ $actacomite->SC_ActaComite_Nombre }}</p>
            <h5>Ciudad:</h5>
            <p>{{ $actacomite->SC_ActaComite_Ciudad }}</p>
            <h5>Fecha:</h5>
			<p>{{ $actacomite->SC_ActaComite_Fecha}}</p>
            <h5>Hora de Inicio:</h5>
            <p>{{ $actacomite->SC_ActaComite_HoraInicio }}</p>
            <h5>Hora de Fin:</h5>
            <p>{{ $actacomite->SC_ActaComite_HoraFin }}</p>
            <h5>Declaraciones del Aprendiz:</h5>
            <p>{{ $actacomite->SC_ActaComite_DeclaracionesAprendiz }}</p>
            <h5>Declaraciones del responsable a comité:</h5>
            <p>{{ $actacomite->SC_ActaComite_DeclaracionesOtros }}</p>
            <h5>Otras declaraciones:</h5>
            <p>{{ $actacomite->SC_ActaComite_DeclaracionesResponsable }}</p>
            <h5>Asistentes:</h5>
            <p>{{ $actacomite->SC_ActaComite_Asistentes }}</p>
            <h5>Descargos del Aprendiz:</h5>
            <p>{{ $actacomite->SC_ActaComite_Descargos }}</p>
            <h5>Desición:</h5>
            <p>{{ $actacomite->SC_ActaComite_Decision }}</p>
                <a href="/ActaComite/{{ $actacomite->SC_ActaComite_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
                <form class="delete d-inline" action="/ActaComite/{{ $actacomite->SC_ActaComite_PK_ID }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>       
            <a href="/ActaComite" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
        </div>
    </div>
@endsection

