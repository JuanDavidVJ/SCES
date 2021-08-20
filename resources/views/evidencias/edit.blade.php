@extends('layouts.base')
@section('title', 'Modificar Evidencia')
@section('content')
<div class="container">
    <h1>Modificar Evidencia</h1>
    <form action="/evidencias/{{ $evidencia->SC_Evidencias_PK_ID }}" method="post" enctype="multipart/form-data"
        id="formulario">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="SC_Evidencias_Descripcion">Descripcion Evidencia: </label>
            <input type="text" class="form-control" id="SC_Evidencias_Descripcion" name="SC_Evidencias_Descripcion"
                value=" {{ $evidencia->SC_Evidencias_Descripcion }}">
            @error('SC_Evidencias_Descripcion')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="SC_Evidencias_Detalle">Detalles de Evidencia: </label>
            <input type="text" class="form-control" id="SC_Evidencias_Detalle" name="SC_Evidencias_Detalle"
                value=" {{ $evidencia->SC_Evidencias_Detalle }}">
            @error('SC_Evidencias_Detalle')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="SC_Evidencias_Archivo">Evidencias</label>
            <input type="file" name="SC_Evidencias_Archivo" id="SC_Evidencias_Archivo" class="form-control" value="{{ $evidencia->SC_Evidencias_Archivo }}">
            @error('SC_Evidencias_Archivo')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="SC_Comite_FK_ID">Sanción: </label>
            <select name="SC_Comite_FK_ID" id="SC_Comite_FK_ID" class="form-control" style="font-size: 0.9em;">
                @foreach ($comites as $comite)
                    <option value="{{ $comite->SC_Comite_PK_ID }}" @if ($comite->SC_Comite_PK_ID == $evidencia->SC_Evidencias_PK_ID) selected @endif>
                        {{ $comite->SC_Comite_DescripcionHechos }}</option>
                @endforeach
            </select>
            @error('SC_Comite_FK_ID')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="SC_PlanMejoramiento_FK_ID">Plan De Mejoramiento: </label>
            <select name="SC_PlanMejoramiento_FK_ID" id="SC_PlanMejoramiento_FK_ID" class="form-control"
                style="font-size: 0.9em;">
                @foreach ($plan as $plan)
                    <option value="{{ $plan->SC_PlanMejoramiento_PK_ID }}" @if ($plan->SC_PlanMejoramiento_PK_ID == $evidencia->SC_Evidencias_PK_ID) selected @endif>
                        {{ $plan->SC_PlanMejoramiento_Descripcion }}</option>
                @endforeach
            </select>
            @error('SC_PlanMejoramiento_FK_ID')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success" id="btncrear">Actualizar </button>
    </form>
</div>
@endsection
