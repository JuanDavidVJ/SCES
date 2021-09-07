@extends('layouts.base')
@section('title', 'Lista de Actos A. Sanciones')
@section('content') 
<div class="container">
	<h1>Notificaciones</h1>
	<form>
  <div class="input-group mb-3">
		<input type="search" class="form-control" placeholder="Ingresar Descripción" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
		<div class="input-group-append">
			<button class="btn btn-outline-success pl-5 pr-5 ml-2" type="submit" id="button-addon2">Buscar</button>
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
      <th scope="col">ID</th>
      <th scope="col">Acta Comite</th>
      <th scope="col">Tipo plan</th>
      <th scope="col">Tipo notificacion</th>
      <th scope="col">Opciones</th>
    </tr>
    @foreach($actoas as $actoas)
        		<tr>
        		  <td>{{$actoas->SC_Notificacion_ID}}</td>
                  <td class="descripcion">{{$actoas->SC_ActaComite_FK}} </td>
                  <td class="descripcion">{{$actoas->SC_Notificacion_TipoPlan}}</td>
		          <td>{{$actoas->SC_TipoNotificacion_FK}}</td>

	                <td scope="col">
			          	<a href="/actoadministrativo/{{$actoas->SC_Notificacion_ID}}" class="btn btn-outline-default"><i class="fas fa-eye"></i></a>
			         </td>
                </tr>
			
                @endforeach
		</table>
</div>
@endsection 
