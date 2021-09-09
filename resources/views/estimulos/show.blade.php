@extends('layouts.base')
@section('title', 'Mostrar estimulos')
@section('content') 
<div class="container d-flex justify-content-center">

	<div class="card text-center" style="width: 40rem;">

		<div class="card-body">
			<h3 id="h3show">N° Documento {{$estimulos->aprendiz->SC_Aprendiz_Documento}}</h3>
					<table class="table table-responsive table-hover " id="tableshow">
      					<tbody>
						  <tr>
            					<th class="thshow">Aprendiz</th>
            					<td class="tdshow">{{$estimulos->aprendiz->SC_Aprendiz_Nombres}} {{$estimulos->aprendiz->SC_Aprendiz_Apellidos}} </td>
        				    </tr>
							<tr>
            					<th class="thshow">Ficha</th>
            					<td class="tdshow">{{$estimulos->ficha->SC_Ficha_NumeroFicha}}</td>
        				    </tr>
							<tr>
            					<th class="thshow">Reporta</th>
            					<td class="tdshow">{{$estimulos->SC_Estimulos_Reporta}}</td>
        				    </tr>
          					<tr>
            					<th class="thshow">Razón</th>
            					<td class="tdshow">{{$estimulos->SC_Estimulos_Razon}}</td>
        				    </tr>
							<tr>
            					<th class="thshow">Detalles</th>
            					<td class="tdshow">{{$estimulos->SC_Estimulos_Detalles}}</td>
        				    </tr>
							<tr>
            					<th class="thshow">Fecha</th>
            					<td class="tdshow">{{$estimulos->SC_Estimulos_Fecha}}</td>
        				    </tr>
							<tr>
            					<th class="thshow">Tipo</th>
            					<td class="tdshow">{{$estimulos->tipoestimulos->SC_TipoEstimulos_Descripcion}}</td>
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
							<span>La siguiente acción eliminará el  estimulo {{$estimulos->SC_Estimulos_PK_ID}} del aprendiz: <br> {{$estimulos->aprendiz->SC_Aprendiz_Nombres}} {{$estimulos->aprendiz->SC_Aprendiz_Apellidos}}</span>
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
