@extends('layouts.base')
@section('title', 'Mostrar Citacion')
@section('content')
<div class="container d-flex justify-content-center">

	<div class="card text-center" style="width: 40rem;">		

		<div class="card-body">
            <h3 class="card-title" id="h3show">Citación N° {{$citacion->SC_CitacionPK_Id}}</h3>
		</div>

			<table class="table table-responsive table-hover " id="tableshow">
    <tbody>
          <tr>
            <th class="thshow">Fecha</th>
            <td class="tdshow">{{$citacion->SC_Citacion_FechaCitacion}}</td>
         </tr>
		 <tr>
            <th class="thshow">Hora</th>
            <td class="tdshow">{{$citacion->SC_Citacion_Hora}}</td>
         </tr>
		 <tr>
            <th class="thshow">Lugar</th>
            <td class="tdshow">{{$citacion->SC_Citacion_Lugar}}</td>
         </tr>
		 <tr>
            <th class="thshow">Ciudad</th>
            <td class="tdshow">{{$citacion->SC_Citacion_Ciudad}}</td>
         </tr>
		 <tr>
            <th class="thshow">Centro</th>
            <td class="tdshow">{{$citacion->SC_Citacion_Centro}}</td>
         </tr>
		 <tr>
            <th class="thshow">N° Acta</th>
            <td class="tdshow">{{$citacion->SC_Citacion_NumeroActa}}</td>
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
</div>
</div>
@endsection 
