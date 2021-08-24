@extends('layouts.base')
@section('title', 'Mostrar estimulos')
@section('content') 
<div class="container d-flex justify-content-center">

	<div class="card text-center" style="width: 40rem;">

		<div class="card-body">
			 		<h3>{{$estimulos->SC_Aprendiz_FK_ID}}</h3>
		          <h3 class="card-title">{{$estimulos->SC_Estimulos_Reconocimiento}}</h3>
		          <h5 class="card-text">{{$estimulos->SC_Estimulos_DescripcionEstimulo}}</h5>
		          <h5 class="card-text">{{$estimulos->SC_Estimulos_Fecha}}</h5>
		          <h5 class="card-text">{{$estimulos->SC_TipoEstimulos_FK_ID}}</h5>

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
                        <span>La siguiente acción eliminará el siguiente estimulo: <br> {{$estimulos->SC_Estimulos_Reconocimiento}}</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                        <form class="delete d-inline" action="/estimulos/{{$estimulos->SC_Estimulos_PK_ID}}" method="post">
												@method('DELETE')
												@csrf
												<button type="submit" class="btn btn-danger">Eliminar</button>
											</form>
                    </div>
                    </div>
                </div>
                </div>
							
							<a class="btn btn-warning" href="/estimulos/{{$estimulos->SC_Estimulos_PK_ID}}/edit" ><i class="fas fa-wrench"></i></a>
							<a class="btn btn-outline-dark" href="/estimulos" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
		</div>
	</div>
</div>
@endsection 
