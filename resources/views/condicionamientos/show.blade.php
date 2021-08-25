@extends('layouts.base')
@section('title', 'Detalles de Condicionamiento')
@section('content')
<div class="container d-flex justify-content-center">
	<div class="card text-center" style="width: 40rem;">
		<div class="card-body">
		<h3 class="card-title">Condicionamiento de matricula 
			<h6 class="card-subtitile mb-2 text-muted">{{$condicionamientos->SC_CondicionamientoMatricula_PK_ID}}</h6>
					<h6 class="card-text">Descripción: {{$condicionamientos->SC_CondicionamientoMatricula_Descripcion}}</h6>
					<h6 class="card-text">Fecha: {{$condicionamientos->SC_CondicionamientoMatricula_Fecha}}</h6>
							 <h6 class="card-text">Fecha Máxima: {{$condicionamientos->SC_CondicionamientoMatricula_FechaMaxima}}</h6>
								<h6 class="card-text">Evidencias no presentadas: {{$condicionamientos->SC_CondicionamientoMatricula_EvidenciasNoPresentadas}}</h6>
								<h6 class="card-text">Acto administrativo: {{$condicionamientos->SC_Acto_Administrativo_FK_ID}}</h6>
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
                        <span>La siguiente acción eliminará el condicionamiento: <br>ID: {{$condicionamientos->SC_CondicionamientoMatricula_PK_ID}}</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                        	<form class="delete d-inline" action="/condicionamientos/{{$condicionamientos->SC_CondicionamientoMatricula_PK_ID}}" method="post">
													@method('DELETE')
													@csrf
													<button type="submit" class="btn btn-danger">Eliminar</button>
											</form>
                    </div>
                    </div>
                </div>
                </div>

								<a href="/condicionamientos/{{$condicionamientos->SC_CondicionamientoMatricula_PK_ID}}/edit" class="btn btn-warning" ><i class="fas fa-wrench"></i></a></button>
							 <a href="/condicionamientos" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
			</div>
	</div>
</div>
@endsection 
