@extends('layouts.base')
@section('title','Modificar falta')
@section('content')
<div class="container mb-5">
    <h1>Editar falta</h1>
    <form action="/faltas/{{ $falta->SC_Falta_PK_ID }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="apoyoNoSuperado">Apoyo no superado</label>
            <input type="text" class="form-control" id="apoyoNoSuperado" name="apoyoNoSuperado" value="{{ $falta->SC_Falta_ApoyoNoSuperado }}">
            @error('apoyoNoSuperado')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="estrategiaNoSuperada">Estrategia no superada</label>
            <input type="text" class="form-control" id="estrategiaNoSuperada" name="estrategiaNoSuperada" value="{{ $falta->SC_Falta_EstrategiaNoSuperada }}">
            @error('estrategiaNoSuperada')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="actividadesNoRealizadasAprendiz">Actividades no realizadas por el Aprendiz</label>
            <input type="text" class="form-control" id="actividadesNoRealizadasAprendiz" name="actividadesNoRealizadasAprendiz" value="{{ $falta->SC_Falta_ActividadesRealizadasAprendiz }}">
            @error('actividadesNoRealizadasAprendiz')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="documentosAnteriores">Url documentos Anteriores</label>
            <input type="text" class="form-control-file" id="documentosAnteriores" name="documentosAnteriores" value="{{ $falta->SC_Falta_UrlDocumentosAnteriores }}">
            @error('documentosAnteriores')
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
            <label for="actuacionAprendiz">Actuación del aprendiz</label>
            <input type="text" class="form-control" id="actuacionAprendiz" name="actuacionAprendiz" value="{{ $falta->SC_Falta_ActuacionAprendiz }}">
            @error('actuacionAprendiz')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="tipoFalta">Tipo de falta</label>
            <select class="form-control" id="tipoFalta" name="tipoFalta">
                @foreach($tipoFaltas as $tipoFalta)
                    <option value="{{ $tipoFalta->SC_TipoFalta_PK_ID }}" @if($tipoFalta->SC_TipoFalta_PK_ID == $falta->SC_TipoFalta_FK_ID) selected @endif>{{ $tipoFalta->SC_TipoFalta_Descripcion }}</option>
                @endforeach
            </select>
            @error('tipoFalta')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="reglamento">Infringió</label>
            <select class="form-control" id="reglamento" name="reglamento">
                @foreach($reglamentos as $reglamento)
                    <option value="{{ $reglamento->SC_Reglamento_PK_ID }}" @if($reglamento->SC_Reglamento_PK_ID == $falta->SC_Reglamento_FK_ID) selected @endif>Articulo {{ $reglamento->SC_Reglamento_Articulo }} No.{{ $reglamento->SC_Reglamento_Numeral }}</option>
                @endforeach
            </select>
            @error('reglamento')
                <small>{{ $message }}</small>
            @enderror
        </div>
        
        
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
