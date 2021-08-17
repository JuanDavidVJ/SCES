@extends('layouts.base')
@section('title', 'Detalles de Condicionamiento')
@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('estilos/fichas/estilos.css') }}">
</head>

	<h1 id="titulocondicionamiento">Detalles de Condicionamiento de matricula</h1>
       <div class="detallescondicionamiento">
                <div class="contenidocondicionamiento">
				<p class="h5">Id: {{$condicionamientos->SC_CondicionamientoMatricula_PK_ID}}</p>
				<br>
				<p class="h5">Descripción: {{$condicionamientos->SC_CondicionamientoMatricula_Descripcion}}</p>
				<br>
				<p class="h5">Fecha: {{$condicionamientos->SC_CondicionamientoMatricula_Fecha}}</p>
		         <br>
		         <p class="h5">Fecha Máxima: {{$condicionamientos->SC_CondicionamientoMatricula_FechaMaxima}}</p>
		         <br>
		          <p class="h5">Evidencias no presentadas: {{$condicionamientos->SC_CondicionamientoMatricula_EvidenciasNoPresentadas}}</p>
		          <br>
		          <p class="h5">Acto administrativo: {{$condicionamientos->SC_Acto_Administrativo_FK_ID}}</p>
		        
		       <div class="botonescondicionamiento">
               <form class="delete d-inline" action="/condicionamientos/{{$condicionamientos->SC_CondicionamientoMatricula_PK_ID}}" method="post">
					@method('DELETE')
					@csrf
					<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
				</form>

			 <a href="/condicionamientos/{{$condicionamientos->SC_CondicionamientoMatricula_PK_ID}}/edit" class="btn btn-warning" ><i class="fas fa-wrench"></i></a></button>
			<a href="/condicionamientos" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
		</div>
	</div>
@endsection 
