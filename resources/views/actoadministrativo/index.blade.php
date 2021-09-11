@extends('layouts.base')
@section('title', 'Lista de Actos A. Sanciones')
@section('content') 
<div class="container">
	<h1>Notificaciones</h1>
	<form>
  <div class="input-group mb-3">
		<input type="search" class="form-control" placeholder="Ingresar Fecha" aria-label="Recipient's username" aria-describedby="button-addon2" name="search"id="inputbuscar">
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
<<<<<<< HEAD
      <th scope="col">Fecha Inicial</th>
      <th scope="col">Fecha Limite</th>
      <th scope="col">Forma de envió</th>
      <th scope="col">Funcionarió a cargo</th>
=======
      <th scope="col">ID</th>
      
      <th scope="col">Tipo plan</th>
      <th scope="col">Tipo notificacion</th>
>>>>>>> 35da892697719878ff9c54b4b6bdc9be3955fde7
      <th scope="col">Opciones</th>
    </tr>
	@if(count($actoas)<=0)
					<tr>
						<td>No hay resultados</td>
					</tr>
	@else
    @foreach($actoas as $actoas)
        		<tr>
<<<<<<< HEAD
        		  <td class="descripcion">{{$actoas->SC_Notificacion_FechaInicial}}</td>
                  <td class="descripcion">{{$actoas->SC_Notificacion_FechaLimite}} </td>
                  <td class="descripcion">{{$actoas->SC_Notificacion_Forma}}</td>
		          <td class="descripcion">{{$actoas->SC_Notificacion_Funcionario }}</td>
=======
        		  <td>{{$actoas->SC_Notificacion_ID}}</td>
        		 
				

                  <td class="descripcion">{{$actoas->TipoP->SC_TipoPlan_Descripcion}}</td>
		          <td>{{$actoas->TipoN->SC_TipoNotificacion_Descripcion }}</td>
>>>>>>> 35da892697719878ff9c54b4b6bdc9be3955fde7

	                <td scope="col">
			          	<a href="/actoadministrativo/{{$actoas->SC_Notificacion_ID}}" class="btn btn-outline-default"><i class="fas fa-eye"></i></a>
			         </td>
                </tr>
			
                @endforeach
				@endif
		</table>
</div>
@endsection 
