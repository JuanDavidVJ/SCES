@extends('layouts.base')
@section('title', 'Modificar Llamado de Atención')
@section('content')
    <div class="container">
        <h1>Modificar Llamado de Atención</h1>
        <form action="/llamadosAtencion/{{ $llamados->SC_Llamado_Atencion_PK_ID }}" method="post"
            enctype="multipart/form-data" id="formulario">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="SC_Llamado_Atencion_Descripcion">Descripcion: </label>
                <input type="text" class="form-control" id="SC_Llamado_Atencion_Descripcion"
                    name="SC_Llamado_Atencion_Descripcion" value="{{ $llamados->SC_Llamado_Atencion_Descripcion }}">
                @error('SC_Llamado_Atencion_Descripcion')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="SC_Llamado_Atencion_Fecha">Fecha de llamado de atención: </label>
                <input type="date" class="form-control" id="SC_Llamado_Atencion_Fecha" name="SC_Llamado_Atencion_Fecha"
                    value="{{ $llamados->SC_Llamado_Atencion_Fecha }}">
                @error('SC_Llamado_Atencion_Fecha')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="SC_Llamado_Atencion_EvidenciasNoPresentadas">Evidencias No Presentadas</label>
                <input type="text" name="SC_Llamado_Atencion_EvidenciasNoPresentadas"
                    id="SC_Llamado_Atencion_EvidenciasNoPresentadas" class="form-control"
                    value="{{ $llamados->SC_Llamado_Atencion_EvidenciasNoPresentadas }}">
                @error('SC_Llamado_Atencion_EvidenciasNoPresentadas')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="SC_ActoAdministrativoSanciones_FK_ID">Acto Administrativo: </label>
                <select name="SC_ActoAdministrativoSanciones_FK_ID" id="SC_ActoAdministrativoSanciones_FK_ID"
                    class="form-control" style="font-size: 0.9em;">
                    @foreach ($actoas as $actoa)
                        <option value="{{ $actoa->SC_ActoAdministrativoSanciones_PK_Id }}" @if ($actoa->SC_ActoAdministrativoSanciones_PK_Id == $llamados->SC_ActoAdministrativoSanciones_FK_ID) selected @endif>
                            {{ $actoa->SC_ActoAdministrativoSanciones_DescripcionHechos }}
                        </option>
                    @endforeach
                </select>
                @error('SC_ActoAdministrativoSanciones_FK_ID')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-success" id="btn">Actualizar </button>
        </form>
    </div>
@endsection
