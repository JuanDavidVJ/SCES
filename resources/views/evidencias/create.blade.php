@extends('layouts.base')
@section('title', 'Crear Evidencia')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>

    <div class="container">
        <h1>Nueva Evidencia</h1>
        <form action="/evidencias" method="post" enctype="multipart/form-data" id="formulario">
            @csrf
            <div class="form-group">
            <span class="input-group-text" for="SC_Evidencias_Descripcion">Descripcion Evidencia: </span>
                <input type="text" class="form-control" id="SC_Evidencias_Descripcion" name="SC_Evidencias_Descripcion">
                @error('SC_Evidencias_Descripcion')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
              <span class="input-group-text" for="SC_Evidencias_Detalle">Detalles de Evidencia: </span>
                <input type="text" class="form-control" id="SC_Evidencias_Detalle" name="SC_Evidencias_Detalle">
                @error('SC_Evidencias_Detalle')
                <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
             <span class="input-group-text"for="SC_Evidencias_Archivo">Evidencias</span>
                <input type="file" name="SC_Evidencias_Archivo" id="SC_Evidencias_Archivo" class="form-control">
                @error('SC_Evidencias_Archivo')
                <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
          

            <button type="submit" class="btn btn-success" id="btncrear">Crear Evidencia</button>
        </form>
    </div>
@endsection
