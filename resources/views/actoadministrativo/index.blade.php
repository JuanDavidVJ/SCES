@extends('layouts.base')
@section('title', 'Lista de Actos A. Sanciones')
@section('content') 
<div class="container">
	<h1>Actos Administrativos Sanciones</h1>
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
