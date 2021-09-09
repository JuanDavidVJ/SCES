@extends('layouts.base')
@section('title', 'Mostrar Recurso de Reposición')
@section('content')
<div class="container d-flex justify-content-center">

	<div class="card text-center" style="width: 40rem;">

		<div class="card-body">
            <h3 class="card-title" id="h3show">Recurso N° {{$recursos->SC_Recursos_ID}}</h3>
		</div>

			<table class="table table-responsive table-hover " id="tableshow">
    <tbody>
          <tr>
            <th class="thshow">Fecha: </th>
            <td class="tdshow">{{$recursos->SC_Recursos_FechaGenerado}}</td>
         </tr>
		 <tr>
            <th class="thshow">Fecha Limite: </th>
            <td class="tdshow">{{$recursos->SC_Recursos_FechaLimite}}</td>
         </tr>
		 <tr>
            <th class="thshow">Radicado: </th>
            <td class="tdshow">{{$recursos->SC_Recursos_Radicado}}</td>
         </tr>
		 <tr>
            <th class="thshow">Evidencias: </th>
            <td class="tdshow">{{$recursos->SC_Recursos_Evidencias}}</td>
         </tr>
		 <tr>
            <th class="thshow">Acta Comité: </th>
            <td class="tdshow">{{$recursos->actoComites->SC_ActaComite_Nombre}}</td>
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
							<span>La siguiente acción eliminará la siguiente reposición: <br> {{$recursos->SC_Recursos_ID}}</span>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
							<form class="delete d-inline" action="/recursosReposicion/{{$recursos->SC_Recursos_ID}}" method="post">
								@method('DELETE')
								@csrf
								<button type="submit" class="btn btn-danger">Eliminar</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<a class="btn btn-warning" href="/recursosReposicion/{{$recursos->SC_Recursos_ID}}/edit" ><i class="fas fa-wrench"></i></a>
			<a class="btn btn-outline-dark" href="/recursosReposicion" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
		</div>
	</div>
  </div>
</div>
</div>
@endsection
