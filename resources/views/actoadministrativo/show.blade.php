@extends('layouts.base')
@section('title', 'Mostrar Acto')
@section('content') 

<head>
	<link rel="stylesheet" href="{{ asset('estilos/show.css') }}">
</head>
	<h1 id="tituloacto">Detalles del Acto administrativo sanciones</h1>

		 <div class="detallesactoadministrativo">
                <div class="contenidoactoadministrativo">

					<p class="h5">ID: {{$actoas->SC_ActoAdministrativoSanciones_PK_Id}}</p>
					<p class="h5">Descripcion hechos: {{$actoas->SC_ActoAdministrativoSanciones_DescripcionHechos}}</p>
		         
		            <p class="h5">Descargos: {{$actoas->SC_ActoAdministrativoSanciones_PresentaDescargos}} </p>
		         
		            <p class="h5">Pruebas: 
		             <a href="{{asset('/archivos/actoadministrativo/'.$actoas->SC_ActoAdministrativoSanciones_Pruebas)}}" target="_blank">Ver</a></p>

		            <p class="h5">grado de responsabilidad: {{$actoas->SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor}}</h2>
		            <p class="h5">Numero de llamados de atencion: {{$actoas->SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion}}</p>
		          
		            <p class="h5">fecha: {{$actoas->SC_ActoAdministrativoSanciones_Fecha}}</p>
		          
                    <p class="h5">Comite relacionado: {{$actoas->SC_Comite_FK_ID}}</p>
                    <div class="botonesactoadministrativo">
		       
		            <form class="delete d-inline" action="/actoadministrativo/{{$actoas->SC_ActoAdministrativoSanciones_PK_Id}}" method="post">
					  @method('DELETE')
					  @csrf
					  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
				   </form>

			       <a href="/actoadministrativo/{{$actoas->SC_ActoAdministrativoSanciones_PK_Id}}/edit"class="btn btn-warning" ><i class="fas fa-wrench"></i></a>

			<a href="/actoadministrativo" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>

		</div>
	</div>
@endsection 
