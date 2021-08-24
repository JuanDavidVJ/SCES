@extends('layouts.base')
@section('title', 'Crear Antecedente')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
    </head>

    <div class="container">
        <h1>Nuevo Antecedente</h1>
        <form action="/antecedentes" method="post" enctype="multipart/form-data" id="formulario">
            @csrf
            <div class="form-group">
                <span class="input-group-text" for="SC_Antecedentes_Descripcion">Descripcion Antecedente: </span>
                <input type="text" class="form-control" id="SC_Antecedentes_Descripcion" name="SC_Antecedentes_Descripcion">
                @error('SC_Antecedentes_Descripcion')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <span class="input-group-text" for="SC_Antecedentes_HabilidadesDestrezas">Habilidades y Destrezas: </span>
                <input type="text" class="form-control" id="SC_Antecedentes_HabilidadesDestrezas"
                    name="SC_Antecedentes_HabilidadesDestrezas">
                @error('SC_Antecedentes_HabilidadesDestrezas')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <span class="input-group-text" for="SC_Antecedentes_Observaciones">Observaciones: </span>
                <input type="text" class="form-control" id="SC_Antecedentes_Observaciones"
                    name="SC_Antecedentes_Observaciones">
                @error('SC_Antecedentes_Observaciones')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <span class="input-group-text" for="SC_Antecedentes_Fecha">Fecha: </span>
                <input type="date" class="form-control" id="SC_Antecedentes_Fecha" name="SC_Antecedentes_Fecha">
                @error('SC_Antecedentes_Fecha')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <span class="input-group-text" for="SC_Antecedentes_Foto">Foto: </span>
                <input type="file" name="SC_Antecedentes_Foto" id="SC_Antecedentes_Foto" class="form-control">
                @error('SC_Antecedentes_Foto')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <span class="input-group-text" for="SC_Aprendiz_FK_ID">Aprendiz: </span>
                <select name="SC_Aprendiz_FK_ID" id="SC_Aprendiz_FK_ID" class="form-control" style="font-size: 0.9em;">
                    @foreach ($aprendices as $aprendiz)
                        <option value="{{ $aprendiz->SC_Aprendiz_PK_ID }}">{{ $aprendiz->SC_Aprendiz_Documento }} - {{ $aprendiz->SC_Aprendiz_Nombres }}
                        </option>
                    @endforeach
                </select>
                @error('SC_Aprendiz_FK_ID')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-success" id="btncrear">Crear Antecedentes</button>
        </form>
    </div>
@endsection
