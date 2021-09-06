@extends('layouts.base')
@section('title', 'Mostrar Acto')
@section('content') 
<div class="container d-flex justify-content-center">
		 <div class="card text-center" style="width: 40rem;">
					<div class="card-body">
					<h3 class="card-title" id="h3show">ID N°: {{$actoas->SC_Notificacion_ID}}</h3>
					
					<table class="table table-responsive table-hover " id="tableshow">
      					<tbody>
          					<tr>
            					<th class="thshow">Acta de comite</th>
            					<td>{{$actoas->SC_ActaComite_FK}}</td>
        				    </tr>
							<tr>
            					<th class="thshow">Tipo de plan </th>
            					<td>{{$actoas->SC_Notificacion_TipoPlan->SC_TipoPlan_Descripcion}}</td>
        				    </tr>
        				    <tr>
            					<th class="thshow">Tipo de notificacion </th>
            					<td>{{$actoas->SC_TipoNotificacion_FK->SC_TipoNotificacion_Descripcion}}</td>
        				    </tr>
							<tr>
            					<th class="thshow">Plan</th>
            					<td><a href="{{asset('/archivos/actoadministrativo/'.$actoas->SC_Notificacion_Plan)}}" target="_blank">Ver</a></td>
        				    </tr>
							<tr>
            					<th class="thshow">Sugerencias</th>
            					<td> {{$actoas->SC_Notificacion_Sugerencia}}</td>
        				    </tr>
							<tr>
            					<th class="thshow">Notificacion instructor</th>
            					<td>{{$actoas->SC_Notificacion_Instructor}}</td>
						    </tr>
							<tr>
            					<th class="thshow">Fecha Inicial</th>
            					<td>{{$actoas->SC_Notificacion_FechaInicial}}</td>
        				    </tr>
        				    <tr>
            					<th class="thshow">Fecha limite</th>
            					<td>{{$actoas->SC_Notificacion_FechaLimite }}</td>
        				    </tr>
							</tbody>

						</table>
					<div id="botones">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#alertDelete">
					<i class="fas fa-trash-alt"></i>
					</button>
					<!-- Modal -->
						<div class="modal fade" id="alertDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title text-center" id="alertDeleteLabel">Confirmación de eliminación</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
										<span>La siguiente acción eliminará el acto administrativo: <br> ID N°: {{$actoas->SC_Notificacion_ID}}</span>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
										<form class="delete d-inline" action="/actoadministrativo/{{$actoas->SC_Notificacion_ID}}" method="post">
										@method('DELETE')
										@csrf
										<button type="submit" class="btn btn-danger">Eliminar</button>
									</form>
								</div>
								</div>
						</div>
						</div>
					
					<a href="/actoadministrativo/{{$actoas->SC_Notificacion_ID}}/edit"class="btn btn-warning" ><i class="fas fa-wrench"></i></a>
					<a href="/actoadministrativo" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>

		</div>
	</div>
	</div>
</div>
@endsection 
