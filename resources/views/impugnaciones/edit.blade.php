@extends('layouts.base')
@section('title', 'Modificar Impugnacion')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>

    <div class="container">
        <h1>Modificar Impugnación</h1>
        <form action="/impugnaciones/{{ $impugnaciones->SC_Impugnacion_PK_ID }}" method="post"
            enctype="multipart/form-data" id="formulario">
            @method('PUT')
            @csrf

            <div class="form-group">
              <span class="input-group-text" for="SC_Comite_FK_ID">Sancion por la cual quiere colocar un derecho de reposicion: </span>
                <select name="SC_Comite_FK_ID" id="SC_Comite_FK_ID" class="form-control" style="font-size: 0.9em;">
                    @foreach ($comites as $comite)
                        <option value="{{ $comite->SC_Comite_PK_ID }}" @if ($comite->SC_Comite_PK_ID == $impugnaciones->SC_Comite_FK_ID) selected @endif>
                            {{ $comite->SC_Comite_DescripcionHechos }}</option>
                    @endforeach
                </select>
                @error('SC_Comite_FK_ID')
                <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
              <span class="input-group-text" for="SC_Impugnacion_DescripcionApelacion">Argumento: </span>
                <input type="text" class="form-control" id="SC_Impugnacion_DescripcionApelacion"
                    name="SC_Impugnacion_DescripcionApelacion"
                    value="{{ $impugnaciones->SC_Impugnacion_DescripcionApelacion }}">
                @error('SC_Impugnacion_DescripcionApelacion')
                <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-success" id="btn">Actualizar </button>
        </form>
    </div>
@endsection
