@extends('layouts.base')
@section('title', 'Modificar Evidencia')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>

<div class="container">
    <h1>Modificar Evidencia</h1>
    <form action="/evidencias/{{ $evidencia->SC_Evidencias_PK_ID }}" method="post" enctype="multipart/form-data"
        id="formulario">
        @method('PUT')
        @csrf

        <div class="form-group">
        <span class="input-group-text" for="SC_Evidencias_Descripcion">Descripcion Evidencia: </span>
            <input type="text" class="form-control" id="SC_Evidencias_Descripcion" name="SC_Evidencias_Descripcion"
                value=" {{ $evidencia->SC_Evidencias_Descripcion }}">
            @error('SC_Evidencias_Descripcion')
            <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
        <span class="input-group-text" for="SC_Evidencias_Detalle">Detalles de Evidencia: </span>
            <input type="text" class="form-control" id="SC_Evidencias_Detalle" name="SC_Evidencias_Detalle"
                value=" {{ $evidencia->SC_Evidencias_Detalle }}">
            @error('SC_Evidencias_Detalle')
            <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
         <span class="input-group-text" for="SC_Evidencias_Archivo">Evidencias</span>
            <input type="file" name="SC_Evidencias_Archivo" id="SC_Evidencias_Archivo" class="form-control" value="{{ $evidencia->SC_Evidencias_Archivo }}">
            @error('SC_Evidencias_Archivo')
            <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>
       

        <button type="submit" class="btn btn-success" id="btncrear">Actualizar </button>
    </form>
</div>
@endsection
