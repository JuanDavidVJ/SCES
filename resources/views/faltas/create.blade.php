@extends('layouts.base')
@section('title','Crear faltas')
@section('content')
<div class="container">
    <h1>Crear falta</h1>
    <form action="/faltas" method="POST" enctype="multipart/form-data" id="formulario">
        @csrf
        
        <div class="form-group">
            <label for="apoyoNoSuperado">Apoyo no superado</label>
            <input type="text" class="form-control" id="apoyoNoSuperado" name="apoyoNoSuperado" value="{{ old('apoyoNoSuperado') }}">
            @error('apoyoNoSuperado')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="estrategiaNoSuperada">Estrategia no superada</label>
            <input type="text" class="form-control" id="estrategiaNoSuperada" name="estrategiaNoSuperada" value="{{ old('estrategiaNoSuperada') }}">
            @error('estrategiaNoSuperada')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="actividadesNoRealizadasAprendiz">Actividades no realizadas por el Aprendiz</label>
            <input type="text" class="form-control" id="actividadesNoRealizadasAprendiz" name="actividadesNoRealizadasAprendiz" value="{{ old('actividadesNoRealizadasAprendiz') }}">
            @error('actividadesNoRealizadasAprendiz')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="documentosAnteriores">Url documentos Anteriores</label>
            <input type="text" class="form-control-file" id="documentosAnteriores" name="documentosAnteriores">
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
            <input type="text" class="form-control" id="actuacionAprendiz" name="actuacionAprendiz" value="{{ old('actuacionAprendiz') }}">
            @error('actuacionAprendiz')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="tipoFalta">Tipo de falta</label>
            <select class="form-control" id="tipoFalta" name="tipoFalta">
                @foreach($tipoFaltas as $tipoFalta)
                    <option value="{{ $tipoFalta->SC_TipoFalta_PK_ID }}">{{ $tipoFalta->SC_TipoFalta_Descripcion }}</option>
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
                    <option value="{{ $reglamento->SC_Reglamento_PK_ID }}">Articulo {{ $reglamento->SC_Reglamento_Articulo }} No.{{ $reglamento->SC_Reglamento_Numeral }}</option>
                @endforeach
            </select>
            @error('reglamento')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Crear</button>
    </form>
    </div>
@endsection
