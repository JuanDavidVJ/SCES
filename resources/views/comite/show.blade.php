@extends('layouts.base')
@section('title', 'Mostrar Comite')
@section('content') 
<div class="container d-flex justify-content-center">
	<h1>Detalles del comite</h1>
  <div class="card text-center" style="width: 40rem;">		
	  <div class="card-body">
      <h3 class="card-title">Comité N°: {{$comite->SC_Comite_PK_ID}}</h3>
        <h5 class="card-subtitle mb-2">{{$comite->SC_Comite_DescripcionHechos}}</h5>
          <h6 class="card-text">{{$comite->SC_Comite_DescripcionHecho}}</h6>
          <h6 class="card-text">{{$comite->SC_Comite_Testigos}}</h6>
          <h6 class="card-text">{{$comite->SC_Comite_Observacion}}</h6>
          <h6 class="card-text">{{$comite->SC_Usuarios_FK_ID}}</h6>
          <h6 class="card-text">{{$comite->SC_Falta_FK_ID}}</h6>

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
                      <form class="delete d-inline" action="/Comite/{{$comite->SC_Comite_PK_ID}}" method="post">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                      </form> 
                  </div>
                </div>
            </div>
          </div>
          
			<a href="/Comite/{{$comite->SC_Comite_PK_ID}}/edit"><i class="fas fa-wrench"></i></a>
			<a href="/Comite" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
		</div>
	</div>
</div>
@endsection 
