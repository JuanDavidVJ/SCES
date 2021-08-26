@extends('layouts.base')
@section('title', 'Mostrar Citacion')
@section('content')
<div class="container d-flex justify-content-center">

	<div class="card text-center" style="width: 40rem;">		

		<div class="card-body">

			<h3>{{$citacion->SC_ActaComite_FK_ID}}</h3>
			<h4>{{$citacion->SC_Citacion_FechaCitacion}}</h4>
			<h4>{{$citacion->SC_Citacion_Hora}}</h4>
			<h4>{{$citacion->SC_Citacion_Lugar}}</h4>
			<h4>{{$citacion->SC_Citacion_Ciudad}}</h4>
			<h4>{{$citacion->SC_Citacion_Centro}}</h4>
			<h4>{{$citacion->SC_Comite_FK_ID}}</h4>
			
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
							<span>La siguiente acción eliminará la siguiente citación: <br> {{$citacion->SC_CitacionPK_Id}}</span>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
							<form class="delete d-inline" action="/Citacion/{{$citacion->SC_CitacionPK_Id}}" method="post">
								@method('DELETE')
								@csrf
								<button type="submit" class="btn btn-danger">Eliminar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
							
			<a class="btn btn-warning" href="/Citacion/{{$citacion->SC_CitacionPK_Id}}/edit" ><i class="fas fa-wrench"></i></a>
			<a class="btn btn-outline-dark" href="/Citacion" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>

			<!--<form class="delete d-inline" action="/Citacion/{{$citacion->SC_CitacionPK_Id}}" method="post">
					@method('DELETE')
					@csrf
					<button type="submit" class="btn btn-danger">Eliminar</button>					
			 		</form>

			<button type="button" class="btn btn-warning"> <a style="color: black; text-decoration: none;" href="/Citacion/{{$citacion->SC_CitacionPK_Id}}/edit">Modificar</a></button>
			<a href="/Citacion" class="btn btn-outline-dark">ver Citaciones</a>-->
		</div>
	</div>
</div>
@endsection 
