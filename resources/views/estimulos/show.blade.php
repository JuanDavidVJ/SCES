@extends('layouts.base')
@section('title', 'Mostrar estimulos')
@section('content')
<br>
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
</div>
@endsection 
