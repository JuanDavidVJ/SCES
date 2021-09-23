@extends('layouts.base')
@section('title', 'Crear Notificación')
@section('content') 
<div class="container">

	<h1>Crear Notificación</h1>
	
	<form action="/actoadministrativo" method="post"enctype="multipart/form-data" id="formulario">
		@csrf

		<div class="form-group">
		   <span class="input-group-text" for="SC_ActaComite_FK">Acta de comite relacionada</span>
			<select name="SC_ActaComite_FK" id="SC_ActaComite_FK" class="form-control">
				<option selected>Seleccione el acta relacionada</option>
				@foreach($ActaC as $ActaC)
				<option value="{{$ActaC->SC_ActaComite_PK_ID}}">{{$ActaC->citacion->SC_Citacion_NumeroActa}}</option>
				@endforeach
			</select>
			@error('SC_ActaComite_FK')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

      <div class="form-group">
	      <span class="input-group-text"for="SC_Notificacion_Sugerencia">Sugerencias</span>
				<input class="form-control" name="SC_Notificacion_Sugerencia" 
				id="SC_Notificacion_Sugerencia" 
				class="form-control" 
				value="{{old('SC_Notificacion_Sugerencia')}}">
				@error('SC_Notificacion_Sugerencia')
				<small style="color: red;">{{ $message }}</small>
				@enderror
		</div>
		
		<div class="form-group">
			<span class="input-group-text" for="SC_Notificacion_FechaInicial">Fecha Inicial</span>
			<input type="date" 
			name="SC_Notificacion_FechaInicial" 
			id="SC_Notificacion_FechaInicial" 
			class="form-control" 
			value="{{old('SC_Notificacion_FechaInicial')}}">
			@error('SC_Notificacion_FechaInicial')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
		   <span class="input-group-text" for="SC_TipoNotificacion_FK">Tipo de notificacion</span>
			<select name="SC_TipoNotificacion_FK" id="SC_TipoNotificacion_FK" class="form-control" onchange="mostrar()">
				<option selected>Seleccione un tipo de notificación</option>
				@foreach($TipoN as $TipoN)
				<option value="{{$TipoN->SC_TipoNotificacion_ID}}">{{$TipoN->SC_TipoNotificacion_Descripcion}}</option>
				@endforeach
			</select>
			@error('SC_TipoNotificacion_FK')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group" id="tipo_plan" style="display: none">
		   <span class="input-group-text" for="SC_Notificacion_TipoPlan">Tipo de plan</span>
			<select name="SC_Notificacion_TipoPlan" id="SC_Notificacion_TipoPlan" class="form-control" >
				<option selected >Selecciones el tipo de plan</option>
				@foreach($TipoP as $TipoP)
				<option value="{{$TipoP->SC_TipoPlan_ID}}" selected="3">{{$TipoP->SC_TipoPlan_Descripcion}}</option>
				@endforeach
			</select>
			@error('SC_Notificacion_TipoPlan')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group" id="instructor" style="display: none">
		   <span class="input-group-text" for="SC_Notificacion_Instructor">Instructor designado para el plan de mejoramiento</span>
			<select name="SC_Notificacion_Instructor" id="SC_Notificacion_Instructor" class="form-control">
				<option selected>Seleccione un instructor</option>
				@foreach($usuario as $usuario)
				@if ($usuario->tipoUsuario == 1)<option value="{{$usuario->id }}">{{$usuario->name}}</option> @endif
				@endforeach
			</select>
			@error('SC_Notificacion_Instructor')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group" id="entrega_plan"  style="display: none">
	      <span class="input-group-text"for="SC_Notificacion_Forma">Indique la forma en la que debe entregar el plan de mejoramiento</span>
			<input class="form-control" rows="2"name="SC_Notificacion_Forma" 
			id="SC_Notificacion_Forma" 
			class="form-control" 
			value="{{old('SC_Notificacion_Forma')}}">
			@error('SC_Notificacion_Forma')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group" id="servidor_publico" style="display: none">
	      <span class="input-group-text"for="SC_Notificacion_Funcionario">Indique el servidor público ante quien debe presentarlo</span>
			<input class="form-control" rows="2"name="SC_Notificacion_Funcionario" 
			id="SC_Notificacion_Funcionario" 
			class="form-control" 
			value="{{old('SC_Notificacion_Funcionario')}}">
			@error('SC_Notificacion_Funcionario')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		
		<div class="form-group" id="fecha_limite"  style="display: none">
		  <span class="input-group-text" for="SC_Notificacion_FechaLimite">Fecha limite</span>
			<input type="date" 
			name="SC_Notificacion_FechaLimite" 
			id="SC_Notificacion_FechaLimite" 
			class="form-control" 
			value="{{old('SC_Notificacion_FechaLimite')}}">
			@error('SC_Notificacion_FechaLimite')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>


		<button type="submit" class="btn btn-success mb-5"id="btncrear">Crear Notificación</button>
	</form>
</div>
@endsection 

<script type="text/javascript">
	function mostrar(){
		var opciones = document.getElementById("SC_TipoNotificacion_FK").value 

		if (opciones == 2) {
			document.getElementById("tipo_plan").style.display = "block"
			document.getElementById("instructor").style.display = "block"
			document.getElementById("entrega_plan").style.display = "block"
			document.getElementById("servidor_publico").style.display = "block"
			document.getElementById("fecha_limite").style.display = "block"
		}else{
			document.getElementById("tipo_plan").style.display = "none"
			document.getElementById("instructor").style.display = "none"
			document.getElementById("entrega_plan").style.display = "none"
			document.getElementById("servidor_publico").style.display = "none"
			document.getElementById("fecha_limite").style.display = "none"
		}
	}
</script>