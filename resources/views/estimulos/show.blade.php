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

							<a class="btn btn-warning" href="/estimulos/{{$estimulos->SC_Estimulos_PK_ID}}/edit" ><i class="fas fa-wrench"></i></a>
							<form class="delete d-inline" action="/estimulos/{{$estimulos->SC_Estimulos_PK_ID}}" method="post">
							@method('DELETE')
							@csrf
							<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
							</form>

							<a class="btn btn-outline-dark" href="/estimulos" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
		</div>
	</div>
</div>
@endsection 
