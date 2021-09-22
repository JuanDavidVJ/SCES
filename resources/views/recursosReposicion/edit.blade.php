@extends('layouts.base')
@section('title', 'Editar Reposición')
@section('content')
<div class="container">
	<h1>Modificar Reposición</h1>
	<form action="/recursosReposicion/{{$recursos->SC_Recursos_ID }}" method="post"  enctype="multipart/form-data">
        @method('PUT')
		@csrf
		<div class="form-group">
			<span class="input-group-text" for="SC_Recursos_FechaGenerado">Fecha: </span>
			<input type="date" name="SC_Recursos_FechaGenerado" id="SC_Recursos_FechaGenerado" class="form-control" value="{{ $recursos->SC_Recursos_FechaGenerado }}">
			@error('SC_Recursos_FechaGenerado')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_Recursos_FechaLimite">Fecha Limite: </span>
			<input type="date" name="SC_Recursos_FechaLimite" id="SC_Recursos_FechaLimite" class="form-control" value="{{$recursos->SC_Recursos_FechaLimite}}">
			@error('SC_Recursos_FechaLimite')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_Recursos_Radicado">Radicado: </span>
			<input type="text" name="SC_Recursos_Radicado" id="SC_Recursos_Radicado" class="form-control" value="{{$recursos->SC_Recursos_Radicado}}">
			@error('SC_Recursos_Radicado')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="Evidencias">Evidencias: </span>
			<input type="file" name="Evidencias" id="Evidencias" class="form-control" value="{{$recursos->Evidencias}}">
			@error('Evidencias')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
			<span class="input-group-text" for="SC_Recursos_Decision">Decison tomada para el recurso: </span>
			<input type="text" name="SC_Recursos_Decision" id="SC_Recursos_Decision" class="form-control" value="{{$recursos->SC_Recursos_Decision}}">
			@error('SC_Recursos_Decision')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<div class="form-group">
			<span class="input-group-text" for="SC_ActaComite_FK">Acta Comité</span>
			<select name="SC_ActaComite_FK" id="SC_ActaComite_FK" class="form-control" style="font-size: 0.9em;">
				@foreach($actas as $acta)
				<option value="{{$acta->SC_ActaComite_PK_ID}}" @if ($acta->SC_ActaComite_PK_ID == $recursos->SC_ActaComite_FK) selected
                @endif>{{$acta->SC_ActaComite_Nombre}}</option>
				@endforeach
			</select>
			@error('SC_Fichas_FK_ID')
			<small style="color: red;">{{ $message }}</small>
			@enderror
		</div>

		<button type="submit" class="btn btn-success" id="btncrear">Actualizar</button>
	</form>
</div>
@endsection
