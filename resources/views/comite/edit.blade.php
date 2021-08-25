@extends('layouts.base')
@section('title', 'Modificar Comite')
@section('content') 
<div class="container">
	<h1>Modificar Comite</h1>
	<form action="/comite/{{$Comite->SC_Comite_PK_ID}}" method="post" enctype="multipart/form-data">
		@method('PUT')
		@csrf

		<div class="form-group">
			<label for="SC_Comite_DescripcionHechos">Descripcion Hechos</label>
			<input type="text" name="SC_Comite_DescripcionHechos" id="SC_Comite_DescripcionHechos" class="form-control" value="{{$Comite->SC_Comite_DescripcionHechos}}">
			@error('SC_Comite_DescripcionHechos')
				<small style="color: red">{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_Comite_DescripcionHecho">Descripcion Hecho</label>
			<input type="text" name="SC_Comite_DescripcionHecho" id="SC_Comite_DescripcionHecho" class="form-control" value="{{$Comite->SC_Comite_DescripcionHecho}}">
			@error('SC_Comite_DescripcionHecho')
				<small style="color: red">{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_Comite_Testigos">Testigos</label>
			<input type="text" name="SC_Comite_Testigos" id="SC_Comite_Testigos" class="form-control" value="{{$Comite->SC_Comite_Testigos}}">
			@error('SC_Comite_Testigos')
				<small style="color: red">{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_Comite_Observacion">Observacion</label>
			<input type="text" name="SC_Comite_Observacion" id="SC_Comite_Observacion" class="form-control" value="{{$Comite->SC_Comite_Observacion}}">
			@error('SC_Comite_Observacion')
				<small style="color: red">{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_Usuarios_FK_ID">Usuario</label>
			<select name="SC_Usuarios_FK_ID" id="SC_Usuarios_FK_ID" class="form-control" style="font-size: 0.9em;">
				@foreach($Usuario as $Usuario)
				<option value="{{$Usuario->SC_Usuarios_ID}}" @if($Usuario->SC_Usuarios_FK_ID == $Usuario->SC_Usuarios_FK_ID) selected @endif>{{$Usuario->SC_Usuarios_Documento}}</option>
				@endforeach
			</select>
			@error('SC_Usuarios_FK_ID')
				<small style="color: red">{{$message}}</small>
			@enderror
		</div>

		<div class="form-group">
			<label for="SC_Falta_FK_ID">Falta</label>
			<select name="SC_Falta_FK_ID" id="SC_Falta_FK_ID" class="form-control" style="font-size: 0.9em;">
				@foreach($Falta as $Falta)
				<option value="{{$Falta->SC_Falta_PK_ID}}" @if($Falta->SC_Falta_FK_ID == $Falta->SC_Falta_FK_ID) selected @endif>{{$Falta->SC_Falta_EstrategiaNoSuperada}}</option>
				@endforeach
			</select>
			@error('SC_Falta_FK_ID')
				<small style="color: red">{{$message}}</small>
			@enderror
		</div>
		
		<button type="submit" class="btn btn-success">Actualizar</button>
	</form>
</div>
@endsection 
