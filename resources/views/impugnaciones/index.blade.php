@extends('layouts.base')
@section('title', 'Listado de Impugnaciones')
@section('content')
    <div class="container">
        <h1>Listado de Impugnaciones</h1>
        <form>
            <div class="input-group mb-3">
            <input type="search" class="form-control" placeholder="Ingresar descripción" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
            <div class="input-group-append">
                <button class="btn btn-outline-success pl-5 pr-5 ml-2" type="submit" id="button-addon2">Buscar</button>
            </div>
            </div>
        </form>

        @if (session('status'))
            <p class="alert alert-success">
                {{ session('status') }}
            </p>
        @endif

        <table class="table table-striped">
            <tr>
                <th scope="col">Descripción</th>
                <th scope="col">Nombre</th>
                <th scope="col">Opciones</th>
            </tr>
            @foreach ($impugnaciones as $impugnacion)
                <tr>
                    <td>{{ $impugnacion->SC_Impugnacion_DescripcionApelacion }}</td>
                    <td class="nombre">{{ $impugnacion->SC_Comite_FK_ID }}</td>
                    <td>
                        <a href="/impugnaciones/{{ $impugnacion->SC_Impugnacion_PK_ID }}"
                            class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
