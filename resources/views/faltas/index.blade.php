@extends('layouts.base')
@section('title','Faltas')
@section('content')
<div class="container">
<h1 class="mt-3">Listado de faltas</h1>
<form>
        <div class="input-group mb-3">
		<input type="search" class="form-control" placeholder="Ingresar apoyo" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
		<div class="input-group-append">
			<button class="btn btn-outline-success pl-5 pr-5 ml-2" type="submit" id="button-addon2">Buscar</button>
		</div>
	    </div>
    </form>

@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Apoyo no superado</th>
            <th scope="col">Estrategia no superada</th>
            <th scope="col">Tipo falta</th>
            <th scope="col">Infringió</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($faltas as $falta)
        <tr>
            <td>{{ $falta->SC_Falta_PK_ID }}</td>
            <td>{{ $falta->SC_Falta_ApoyoNoSuperado }}</td>
            <td>{{ $falta->SC_Falta_EstrategiaNoSuperada }}</td>
            <td>{{ $falta->tipoFalta->SC_TipoFalta_Descripcion }}</td>
            <td>Artículo {{ $falta->reglamento->SC_Reglamento_Articulo }} No. {{ $falta->reglamento->SC_Reglamento_Numeral }}</td>
            <td>
                <a href="/faltas/{{ $falta->SC_Falta_PK_ID }}"class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
		    </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
