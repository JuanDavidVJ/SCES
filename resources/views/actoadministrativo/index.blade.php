@extends('layouts.base')
@section('title', 'Lista de Actos A. Sanciones')
@section('content') 
<div class="container">
	<h1>Actos Administrativos Sanciones</h1>
  <div class="input-group mb-3">
	<form class="form-inline my-2 my-lg-0 float-right">
		<input type="search" class="form-control" placeholder="Ingresar Descripción" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
		<div class="input-group-append">
			<button class="btn btn-outline-success pl-5 pr-5 ml-2" type="submit" id="button-addon2">Buscar</button>
		</div>
    </form>
	</div>
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
  <table class="table table-striped">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Descripción</th>
      <th scope="col">Descargos</th>
      <th scope="col">Fecha</th>
      <th scope="col">Opciones</th>
    </tr>
    @foreach($actoas as $actoas)
        		<tr>
        		  <td>{{$actoas->SC_ActoAdministrativoSanciones_PK_Id}}</td>
                  <td class="descripcion">{{$actoas->SC_ActoAdministrativoSanciones_DescripcionHechos}}</td>
                  <td class="descripcion">{{$actoas->SC_ActoAdministrativoSanciones_PresentaDescargos}}</td>
		          <td>{{$actoas->SC_ActoAdministrativoSanciones_Fecha}}</td>

	                <td scope="col">
			          	<a href="/actoadministrativo/{{$actoas->SC_ActoAdministrativoSanciones_PK_Id}}" class="btn btn-outline-default"><i class="fas fa-eye"></i></a>
			         </td>
                </tr>
			
                @endforeach
		</table>
</div>
@endsection 
