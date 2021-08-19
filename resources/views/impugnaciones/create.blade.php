@extends('layouts.base')
@section('title', 'Crear Impugnación')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('estilos/fichas/estilos.css') }}">
    </head>
    <h1>Crear Impugnación</h1>
    <form action="/impugnaciones" method="post" enctype="multipart/form-data" id="formulario">
        @csrf
        <div class="form-group">
            <label for="SC_Comite_FK_ID">Sancion por la cual quiere colocar un derecho de reposicion: </label>
            <select name="SC_Comite_FK_ID" id="SC_Comite_FK_ID" class="form-control" style="font-size: 0.9em;">
                @foreach ($comites as $comite)
                    <option value="{{ $comite->SC_Comite_PK_ID }}">{{ $comite->SC_Comite_DescripcionHechos }}</option>
                @endforeach
            </select>
            @error('SC_Comite_FK_ID')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="SC_Impugnacion_DescripcionApelacion">Argumento: </label>
            <input type="text" class="form-control" id="SC_Impugnacion_DescripcionApelacion"
                name="SC_Impugnacion_DescripcionApelacion" value="{{ old('SC_Impugnacion_DescripcionApelacion') }}">
            @error('SC_Impugnacion_DescripcionApelacion')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-success" id="btncrear">Crear Impugnación</button>
    </form>
@endsection
