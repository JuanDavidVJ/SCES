@extends('layouts.base')
@section('title', 'Mostrar Acto')
@section('content') 
<div class="container d-flex justify-content-center">
		 <div class="card text-center" style="width: 40rem;">
					<div class="card-body">

					<h3 class="card-title">ID N°: {{$actoas->SC_ActoAdministrativoSanciones_PK_Id}}</h3>
					<h6 class="card-text">Descripcion hechos: {{$actoas->SC_ActoAdministrativoSanciones_DescripcionHechos}}</h6>
					<h6 class="card-text">Descargos: {{$actoas->SC_ActoAdministrativoSanciones_PresentaDescargos}} </h6>
				
					<h6 class="card-text">Pruebas: 
						<a href="{{asset('/archivos/actoadministrativo/'.$actoas->SC_ActoAdministrativoSanciones_Pruebas)}}" target="_blank">Ver</a></h6>

					<h6 class="card-text">grado de responsabilidad: {{$actoas->SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor}}</h6>
					<h6 class="card-text">Numero de llamados de atencion: {{$actoas->SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion}}</h6>
					<h6 class="card-text">fecha: {{$actoas->SC_ActoAdministrativoSanciones_Fecha}}</h6>
					<h6 class="card-text">Comite relacionado: {{$actoas->SC_Comite_FK_ID}}</h6>
					<a href="/actoadministrativo/{{$actoas->SC_ActoAdministrativoSanciones_PK_Id}}/edit"class="btn btn-warning" ><i class="fas fa-wrench"></i></a>
					<form class="delete d-inline" action="/actoadministrativo/{{$actoas->SC_ActoAdministrativoSanciones_PK_Id}}" method="post">
						@method('DELETE')
						@csrf
						<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
					</form>
					<a href="/actoadministrativo" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>

		</div>
	</div>
</div>
@endsection 