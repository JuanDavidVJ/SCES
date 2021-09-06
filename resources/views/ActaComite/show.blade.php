@extends('layouts.base')
@section('title', 'Detalles de Acta')
@section('content')
<<<<<<< HEAD
    <div class="row">
        <div class="col-sm-8">
            <h5>Numero del acta:</h5>
            <p>{{ $actacomite->SC_Citacion_FK}}</p>
            <h5>Nombre:</h5>
            <p>{{ $actacomite->SC_ActaComite_Nombre }}</p>
            <h5>Ciudad:</h5>
            <p>{{ $actacomite->SC_ActaComite_Ciudad }}</p>
            <h5>Fecha:</h5>
			<p>{{ $actacomite->SC_ActaComite_Fecha}}</p>
            <h5>Hora de Inicio:</h5>
            <p>{{ $actacomite->SC_ActaComite_HoraInicio }}</p>
            <h5>Hora de Fin:</h5>
            <p>{{ $actacomite->SC_ActaComite_HoraFin }}</p>
            <h5>Declaraciones del Aprendiz:</h5>
            <p>{{ $actacomite->SC_ActaComite_DeclaracionesAprendiz }}</p>
            <h5>Declaraciones del responsable a comité:</h5>
            <p>{{ $actacomite->SC_ActaComite_DeclaracionesOtros }}</p>
            <h5>Otras declaraciones:</h5>
            <p>{{ $actacomite->SC_ActaComite_DeclaracionesResponsable }}</p>
            <h5>Asistentes:</h5>
            <p>{{ $actacomite->SC_ActaComite_Asistentes }}</p>
            <h5>Descargos del Aprendiz:</h5>
            <p>{{ $actacomite->SC_ActaComite_Descargos }}</p>
            <h5>Desición:</h5>
            <p>{{ $actacomite->SC_ActaComite_Decision }}</p>
                <a href="/ActaComite/{{ $actacomite->SC_ActaComite_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
                <form class="delete d-inline" action="/ActaComite/{{ $actacomite->SC_ActaComite_PK_ID }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>       
            <a href="/ActaComite" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
        </div>
    </div>
=======
<div class="container d-flex justify-content-center">

    <div class="card text-center" style="width: 40rem;">
          <div class="card-body">
            <h3 class="card-title" id="h3show">Código N° {{ $actacomite->SC_ActaComite_Codigo}}</h3>
        </div>

            <table class="table table-responsive table-hover " id="tableshow">
    <tbody>
          <tr>
            <th class="thshow">Descripción</th>
            <td>{{ $actacomite->SC_ActaComite_Descripcion }}</td>
         </tr>  
         <tr>
            <th class="thshow">Estado</th>
            <td>{{ $actacomite->SC_ActaComite_Estado }}</td>
         </tr>
         <tr>
            <th class="thshow">Número Solicitud</th>
            <td> {{ $actacomite->SC_ActaComite_NumeroSolicitud}}</td>
         </tr>  
         <tr>
            <th class="thshow">Motivo</th>
            <td>{{ $actacomite->SC_ActaComite_Motivo }}</td>
         </tr>  
         <tr>
            <th class="thshow">Testigos</th>
            <td>{{ $actacomite->SC_ActaComite_Testigos }}</td>
         </tr>  
         <tr>
            <th class="thshow">Antecedentes</th>
            <td>{{ $actacomite->SC_ActaComite_EnviarCitacionAntecedentes }}</td>
         </tr> 
         

         </tbody>

</table>



            <div id="botones">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#alertDelete">
                <i class="fas fa-trash-alt"></i>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="alertDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="alertDeleteLabel">Confirmación de eliminación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <span>La siguiente acción eliminará el comité: <br> Código N° {{ $actacomite->SC_ActaComite_Codigo}}</span>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                        <form class="delete d-inline" action="/ActaComite/{{ $actacomite->SC_ActaComite_PK_ID }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <a href="/ActaComite/{{ $actacomite->SC_ActaComite_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
            <a href="/ActaComite" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
        </div>
    </div>
    </div>
</div>
>>>>>>> 2a0056e2e9f0d44b21e3f8f39f4127e1faa42e54
@endsection

