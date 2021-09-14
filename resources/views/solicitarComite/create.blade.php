@extends('layouts.base')
@section('title', 'Crear Solicitud de Comite')
@section('content')
<div class="container">

	<h1>Crear Solicitud</h1>
	<form action="/solicitarComite" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
	    <span class="input-group-text" for="Responsable">Responsable</span>
	    <input type="text" class="form-control" id="Responsable" name="Responsable" value="{{ old('Responsable') }}">
	    @error('Responsable')
	    	<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <span class="input-group-text" for="Fecha">Fecha</span>
	    <input type="date" class="form-control" id="Fecha" name="Fecha" value="{{ old('Fecha') }}">
	    @error('Fecha')
	    	<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <span class="input-group-text" for="Descripcion">Descripcion</span>
	    <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="{{ old('Descripcion') }}">
	    @error('Descripcion')
	    	<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	    <span class="input-group-text" for="Testigos">Testigos</span>
	    <input type="text" class="form-control" id="Testigos" name="Testigos" value="{{ old('Testigos') }}">
	    @error('Testigos')
	    	<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>

    <div class="form-group">
			<span class="input-group-text" for="Aprendiz">Aprendiz</span>
			<select name="Aprendiz" id="Aprendiz" class="form-control">
			<option selected>Seleccione un aprendiz</option>
			@foreach($aprendices as $aprendiz)
				<option value="{{$aprendiz->SC_Aprendiz_PK_ID }}">{{$aprendiz->SC_Aprendiz_Documento }} - {{$aprendiz->SC_Aprendiz_Nombres }} {{$aprendiz->SC_Aprendiz_Apellidos }}</option>
			@endforeach
			</select>
			@error('Aprendiz')
			<small style="color: red;">{{$message}}</small>
			@enderror
		</div>

	  <div class="form-group">
	    <span class="input-group-text" for="Observaciones">Observaciones</span>
	    <input type="text" class="form-control" id="Observaciones" name="Observaciones" value="{{ old('Observaciones') }}">
	    @error('Observaciones')
	    	<small style="color: red;">{{ $message }}</small>
	    @enderror
	  </div>

	  <div class="form-group">
	  	<span class="input-group-text" for="Anexo">Anexo</span>
	  	<input type="file" class="form-control" id="Anexo" name="Anexo">
	  	@error('Anexo')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>

		<div class="form-group">
		<span class="input-group-text" for="Usuario">Gestor de grupo</span>
		<select name="Usuario" id="Usuario" class="form-control">
			<option selected>Seleccione un gestor</option>
			@foreach($usuarios as $usuario)
			 <option value="{{$usuario->id }}">{{$usuario->name}}</option>
			@endforeach
		</select>
			@error('Usuario')
				<small style="color: red;">{{$message}}</small>
			@enderror
	  </div>

	  <div class="form-group">
		<span class="input-group-text" for="TipoFalta">Tipo de falta</span>
		<select name="TipoFalta" id="TipoFalta" class="form-control">
			<option selected>Seleccione una falta</option>
			@foreach($tipofaltas as $tipofalta)
			 <option value="{{$tipofalta->SC_TipoFalta_PK_ID }}">{{$tipofalta->SC_TipoFalta_Descripcion}}</option>
			@endforeach
		</select>
			@error('Falta')
				<small style="color: red;">{{$message}}</small>
			@enderror
	  </div>

		<div class="form-group">
			<span class="input-group-text" for="Gravedad">Gravedad de la falta</span>
			<select name="Gravedad" id="Gravedad" class="form-control">
				<option selected>Seleccione un opción</option>
				@foreach($gravedad as $gravedad)
				<option value="{{$gravedad->SC_Gravedad_ID }}">{{$gravedad->SC_Gravedad_Nombre}}</option>
				@endforeach
			</select>
				@error('Gravedad')
					<small style="color: red;">{{$message}}</small>
				@enderror
	  </div>

		<div class="form-group">
			<span class="input-group-text" for="Reglamento">Reglamento</span>
			<select name="Reglamento" id="Reglamento" class="form-control" >
				<option selected>Seleccione el articulo inclumplido</option>
				@foreach($reglamento as $reglamento)
				<option value="{{$reglamento->SC_Reglamento_PK_ID }}">{{$reglamento->SC_Reglamento_Numeral}} - {{$reglamento->SC_Reglamento_Descripcion}}</option>
				@endforeach
			</select>
				@error('Reglamento')
					<small style="color: red;">{{$message}}</small>
				@enderror
	  </div>

	  <button type="submit" class="btn btn-success mb-5">Crear Solicitud</button>
	</form>
</div>
@endsection