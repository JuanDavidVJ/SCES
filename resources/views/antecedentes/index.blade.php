@extends('layouts.base')
@section('title', 'Listado de Antecedentes')
@section('content')
    <div class="container">

        <h1>Listado de Antecedentes</h1>
        <form>
            <div class="input-group mb-3">
                <input type="search" class="form-control" placeholder="Ingresar descripción"
                    aria-label="Recipient's username" aria-describedby="button-addon2" name="search" id="inputbuscar">
                <div class="input-group-append">
                    <button class="btn btn-outline-success pl-5 pr-5 ml-2" type="submit" id="button-addon2">Buscar</button>
                </div>
            </div>
        </form>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <table class="table table-striped">
            <tr>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha</th>
                <th scope="col">Aprendiz</th>
                <th scope="col">Opciones</th>
            </tr>
            @foreach ($antecedentes as $antecedente)
                <tr>
                    <td>{{ $antecedente->SC_Antecedentes_Descripcion }}</td>
                    <td>{{ $antecedente->SC_Antecedentes_Fecha }}</td>
                    <td>{{ $antecedente->SC_Aprendiz_FK_ID }}</td>
                    <td>
                        <a href="/antecedentes/{{ $antecedente->SC_Antecedentes_PK_ID }}" class="btn btn-outline-default p-0"><i
                                class="fas fa-eye"></i></a>
                    </td>
                </tr>

            @endforeach
        </table>
    </div>
@endsection