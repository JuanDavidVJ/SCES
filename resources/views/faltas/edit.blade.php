@extends('layouts.base')
@section('title','Modificar falta')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>

<div class="container mb-5">
    <h1>Editar falta</h1>
    <form action="/faltas/{{ $falta->SC_Falta_PK_ID }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="form-group">
         <span class="input-group-text" for="SC_Falta_ApoyoNoSuperado">Apoyo no superado</span>
            <input type="text" class="form-control" id="SC_Falta_ApoyoNoSuperado" name="SC_Falta_ApoyoNoSuperado" value="{{ $falta->SC_Falta_ApoyoNoSuperado }}">
            @error('SC_Falta_ApoyoNoSuperado')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
         <span class="input-group-text" for="SC_Falta_EstrategiaNoSuperada">Estrategia no superada</span>
            <input type="text" class="form-control" id="SC_Falta_EstrategiaNoSuperada" name="SC_Falta_EstrategiaNoSuperada" value="{{ $falta->SC_Falta_EstrategiaNoSuperada }}">
            @error('SC_Falta_EstrategiaNoSuperada')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
          <span class="input-group-text" for="SC_Falta_ActividadesRealizadasAprendiz">Actividades no realizadas por el Aprendiz</span>
            <input type="text" class="form-control" id="SC_Falta_ActividadesRealizadasAprendiz" name="SC_Falta_ActividadesRealizadasAprendiz" value="{{ $falta->SC_Falta_ActividadesRealizadasAprendiz }}">
            @error('SC_Falta_ActividadesRealizadasAprendiz')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
          <span class="input-group-text" for="SC_Falta_UrlDocumentosAnteriores">Url documentos Anteriores</span>
            <input type="text" class="form-control" id="SC_Falta_UrlDocumentosAnteriores" name="SC_Falta_UrlDocumentosAnterioress" value="{{ $falta->SC_Falta_UrlDocumentosAnteriores }}">
            @error('SC_Falta_UrlDocumentosAnteriores')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <!-- ______________________________________________________ -->
        <!-- 
            If is a file

            <div class="form-group">
                <label for="documentosAnteriores">Documentos Anteriores</label>
                <input type="file" class="form-control-file" id="documentosAnteriores" name="documentosAnteriores">
                @error('documentosAnteriores')
                    <small>{{ $message }}</small>
                @enderror
            </div>    
        -->
        <div class="form-group">
         <span class="input-group-text" for="SC_Falta_ActuacionAprendiz">Actuación del aprendiz</span>
            <input type="text" class="form-control" id="SC_Falta_ActuacionAprendiz" name="SC_Falta_ActuacionAprendiz" value="{{ $falta->SC_Falta_ActuacionAprendiz }}">
            @error('SC_Falta_ActuacionAprendiz')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
          <span class="input-group-text" for="SC_TipoFalta_FK_ID">Tipo de falta</span>
            <select class="form-control" id="SC_TipoFalta_FK_ID" name="SC_TipoFalta_FK_ID">
                @foreach($tipoFaltas as $tipoFalta)
                    <option value="{{ $tipoFalta->SC_TipoFalta_PK_ID }}" @if($tipoFalta->SC_TipoFalta_PK_ID == $falta->SC_TipoFalta_FK_ID) selected @endif>{{ $tipoFalta->SC_TipoFalta_Descripcion }}</option>
                @endforeach
            </select>
            @error('SC_TipoFalta_FK_ID')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
          <span class="input-group-text" for="SC_Reglamento_FK_ID">Infringió</span>
            <select class="form-control" id="SC_Reglamento_FK_ID" name="SC_Reglamento_FK_ID">
                @foreach($reglamentos as $reglamento)
                    <option value="{{ $reglamento->SC_Reglamento_PK_ID }}" @if($reglamento->SC_Reglamento_PK_ID == $falta->SC_Reglamento_FK_ID) selected @endif>Articulo {{ $reglamento->SC_Reglamento_Articulo }} No.{{ $reglamento->SC_Reglamento_Numeral }}</option>
                @endforeach
            </select>
            @error('SC_Reglamento_FK_ID')
                <small>{{ $message }}</small>
            @enderror
        </div>
        
        
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
