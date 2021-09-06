@extends('layouts.base')
@section('title', 'Listado Plan Mejoramiento')
@section('content')
<div class="container">
	<h1>Listado Planes de mejoramiento</h1>
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Descripcion</th>
					<th scope="col">Fecha</th>
					<th scope="col">Fecha Maxima</th>
					

					<th scope="col">Accion</th>
				</tr>
				@foreach($planm as $planm)
        		<tr >
        		  <td>{{$planm->SC_PlanMejoramiento_Descripcion}}</td>
        		  <td>{{$planm->SC_PlanMejoramiento_Fecha}}</td>
		          <td>{{$planm->SC_PlanMejoramiento_FechaMaxima}}</td>
		          
		          <td>
		          	<a href="/planmejoramiento/{{$planm->SC_PlanMejoramiento_PK_ID}}"><i class="fas fa-eye"></i></a>
		      	  </td>
       			 </tr>
		@endforeach
		</table>
	</div>
	</div>
@endsection