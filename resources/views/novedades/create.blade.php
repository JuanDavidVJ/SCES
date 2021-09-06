@extends('layouts.base')
@section('title', 'Crear Novedad')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>

    <div class="container">
        <h1>Crear Novedad</h1>
        <form action="/novedades" method="post" enctype="multipart/form-data" id="formulario">
            @csrf
            <div class="form-group">
              <span class="input-group-text" for="SC_Novedades_Fecha">Fecha</span>
                <input type="date" class="form-control" id="SC_Novedades_Fecha" name="SC_Novedades_Fecha"
                    value="{{ old('SC_Novedades_Fecha') }}">
                @error('SC_Novedades_Fecha')
                <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
             <span class="input-group-text" for="SC_TipoNovedades_FK_ID">Tipo de novedad</span>
                <select name="SC_TipoNovedades_FK_ID" id="SC_TipoNovedades_FK_ID" class="form-control">
                    @foreach ($tiponovedades as $tiponovedad)
                        <option value="{{ $tiponovedad->SC_TipoNovedades_PK_ID }}">
                            {{ $tiponovedad->SC_TipoNovedades_Descripcion }}</option>
                    @endforeach
                </select>
                @error('SC_TipoNovedades_FK_ID')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
             <span class="input-group-text" for="SC_Aprendiz_FK_ID">Aprendiz</span>
                <select name="SC_Aprendiz_FK_ID" id="SC_Aprendiz_FK_ID" class="form-control" style="font-size: 0.9em;">
                    @foreach ($aprendices as $aprendiz)
                        <option value="{{ $aprendiz->SC_Aprendiz_PK_ID }}">{{ $aprendiz->SC_Aprendiz_Documento }} - {{$aprendiz->SC_Aprendiz_Nombres}} {{$aprendiz->SC_Aprendiz_Apellidos}}</option>
                    @endforeach
                </select>
                @error('SC_Aprendiz_FK_ID')
                <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
            <span class="input-group-text" for="SC_Novedades_Motivo">Motivo Solicitud</span>
                <textarea class="form-control" rows="2"name="SC_Novedades_Motivo" id="SC_Novedades_Motivo"value="{{old('SC_Novedades_Motivo')}}"></textarea>
                @error('SC_Novedades_Motivo')
                <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Crear Novedad</button>
        </form>
    </div>
@endsection
