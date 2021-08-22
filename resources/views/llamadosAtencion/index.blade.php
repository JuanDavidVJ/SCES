@extends('layouts.base')
@section('title', 'Listado de Llamados de atención')
@section('content')
    <div class="container">
        <h1>Listado de Llamados de Atención</h1>
        @if (session('status'))
            <p class="alert alert-success">
                {{ session('status') }}
            </p>
        @endif

        <table class="table table-striped">
            <tr>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha</th>
                <th scope="col">Opciones</th>
            </tr>
            @foreach ($llamados as $llamado)
                <tr>
                    <td>{{ $llamado->SC_Llamado_Atencion_Descripcion }}</td>
                    <td class="nombre">{{ $llamado->SC_Llamado_Atencion_Fecha }}</td>
                    <td>
                        <a href="/llamadosAtencion/{{ $llamado->SC_Llamado_Atencion_PK_ID }}"
                            class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
