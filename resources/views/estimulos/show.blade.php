@extends('layouts.base')
@section('title', 'Mostrar estimulos')
@section('content')
<div class="container d-flex justify-content-center">
	<div class="card text-center" style="width: 40rem;">
	   <div class="card-body">
	   <h3 class="card-title">{{ $estimulo->SC_Aprendiz_Nombres }} {{$estimulo->SC_Aprendiz_Apellidos}}</h3>
	   <h5 class="card-subtitle mb-2">Documento: <span class="text-muted">{{ $aprendiz->SC_Aprendiz_Documento }}</span></h5>
	   <h6 class="card-text">Correo: <span class="text-muted">{{ $aprendiz->SC_Aprendiz_Correo }}</span></h6>
	   <h6 class="card-text">Contacto: {{ $aprendiz->SC_Aprendiz_NumeroContacto }}</h6>
	   <h6 class="card-text">Ficha: {{ $aprendiz->SC_Ficha_PK_ID }}</h6>
	   <h6 class="card-text">Contrato Aprendizaje: {{ $aprendiz->SC_Aprendiz_ContratoAprendizajeo }}</>
	   <h6 class="card-text">Empresa: {{ $aprendiz->SC_Aprendiz_Empresa }}</h6>
	   <h6 class="card-text">Comité: {{ $aprendiz->SC_Comite_FK_ID }}</h6>
	   <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
	   <a href="/estimulos/{{ $estimulo->SC_Aprendiz_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
	   <a href="/estimulos" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
   </div>
  </div>
</div>
<!--
<div class="container">
	<h1>Detalles del estimulo </h1>
	<div class="row">
		<div class="col-8">
			 		<p>{{$estimulos->SC_Aprendiz_FK_ID}}</p>
		          <h3>{{$estimulos->SC_Estimulos_Reconocimiento}}</h3>
		          <h3>{{$estimulos->SC_Estimulos_DescripcionEstimulo}}</h3>
		          <h3>{{$estimulos->SC_Estimulos_Fecha}}</h3>
		          <h3>{{$estimulos->SC_TipoEstimulos_FK_ID}}</h3>

			<form class="delete d-inline" action="/estimulos/{{$estimulos->SC_Estimulos_PK_ID}}" method="post">
					@method('DELETE')
					@csrf
					<button type="submit" class="btn btn-danger">Eliminar</button>
			</form>

			<button type="button" class="btn btn-warning"> <a style="color: black; text-decoration: none;" href="/estimulos/{{$estimulos->SC_Estimulos_PK_ID}}/edit" >Modificar</a></button>
			<a href="/estimulos" class="btn btn-outline-dark">ver estimulos</a>
		</div>
	</div>
</div>-->
@endsection 
