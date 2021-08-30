@extends('layouts.base')
@section('title', 'Mostrar Plan Mejoramiento')
@section('content') 
<div class="container d-flex justify-content-center">

	<div class="card text-center" style="width: 40rem;">

		<div class="card-body">
				<h3 class="card-title">ID N°: {{$planm->SC_PlanMejoramiento_PK_ID}}</h3>
				<h5 class="card-subtitle mb-2 text-muted">Descripcion: {{$planm->SC_PlanMejoramiento_Descripcion}}</h5>
				<h6 class="card-text">Fecha: {{$planm->SC_PlanMejoramiento_Fecha}}</h6>
        <h6 class="card-text">Fecha Maxima: {{$planm->SC_PlanMejoramiento_FechaMaxima}}</h6>
        
        <h6 class="card-text">Acto administrativo: {{$planm->acto->SC_ActoAdministrativoSanciones_DescripcionHechos}}</h6>
        <h6 class="card-text">Plan de mejoramiento: <a href="{{asset('/archivos/planmejoramiento/'.$planm->SC_PlanMejoramiento)}}" target="_blank">Ver</h6>

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
                      <span>La siguiente acción eliminará el comité: <br> Comité N°: {{$comite->SC_Comite_PK_ID}}</span>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                      <form class="delete d-inline" action="/planmejoramiento/{{$planm->SC_PlanMejoramiento_PK_ID}}" method="post">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                      </form> 
                  </div>
                </div>
            </div>
          </div>
        <a href="/planmejoramiento/{{$planm->SC_PlanMejoramiento_PK_ID}}/edit" class="btn btn-outline-warning"><i class="fas fa-wrench"></i></a>
        <a href="/planmejoramiento" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
		</div>
	</div>
</div>
@endsection 
