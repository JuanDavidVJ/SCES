@extends('layouts.base')
@section('title', 'Lista de comités')
@section('content') 
<div class="container">
  <h1>Listado de Comites</h1>
  <form>
		<div class="input-group mb-3">
		<input type="search" class="form-control" placeholder="Descripción del comité" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
		<div class="input-group-append">
			<button class="btn btn-outline-success pl-4 pr-4 ml-2" type="submit" id="button-addon2">Buscar</button>
		</div>
		</div>
    </form>
  @if(session('status'))
      <div class="alert alert-success">
        {{session('status')}}
      </div>
    @endif
    <table class="table table-striped">
        <tr>
          <th scope="col">Descripcion Hechos</th>
          <th scope="col">Testigos</th>
          <th scope="col">Observacion</th>
          <th scope="col">Usuario</th>
        </tr>
        @foreach($Comite as $comite)
          <tr >
            <td>{{$comite->SC_Comite_DescripcionHechos}}</td>
            <td>{{$comite->SC_Comite_Testigos}}</td>
            <td>{{$comite->SC_Comite_Observacion}}</td>
            <td>{{$comite->usuario->SC_Usuarios_Documento}}</td>
            <td scope="col">
              <a class="btn btn-outline-default p-0" href="/estimulos/{{$estimulo->SC_Estimulos_PK_ID}}"><i class="fas fa-eye"></i></a>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
</div>
@endsection 
