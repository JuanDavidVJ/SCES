@extends('layouts.base')
@section('title', 'Detalles de Acta')
@section('content')

<div class="container d-flex justify-content-center">

    <div class="card text-center" style="width: 40rem;">
          <div class="card-body">
            <h3 class="card-title" id="h3show">Código N° {{ $actacomite->SC_ActaComite_PK_ID}}</h3>
        </div>

            <table class="table table-responsive table-hover " id="tableshow">
    <tbody>
          <tr>
            <th class="thshow">Nombre Acta</th>
            <td class="tdshow">{{ $actacomite->SC_ActaComite_Nombre }}</td>
         </tr>  
         <tr>
            <th class="thshow">Ciudad</th>
            <td class="tdshow">{{ $actacomite->SC_ActaComite_Ciudad}}</td>
         </tr>
         <tr>
            <th class="thshow">Fecha</th>
            <td class="tdshow"> {{ $actacomite->SC_ActaComite_Fecha}}</td>
         </tr>  
         <tr>
            <th class="thshow">Hora Inicio</th>
            <td class="tdshow">{{ $actacomite->SC_ActaComite_HoraInicio }}</td>
         </tr>  
         <tr>
            <th class="thshow">Hora Fin</th>
            <td class="tdshow">{{ $actacomite->SC_ActaComite_HoraFin }}</td>
         </tr>  
         <tr>
            <th class="thshow">Asistentes</th>
            <td class="tdshow">{{ $actacomite->SC_ActaComite_Asistentes}}</td>
         </tr> 
         <tr>
            <th class="thshow">Declaración Aprendiz</th>
            <td class="tdshow">{{ $actacomite->SC_ActaComite_DeclaracionesAprendiz }}</td>
         </tr> 
         <tr>
            <th class="thshow">Declaración Aprendiz</th>
            <td class="tdshow">{{ $actacomite->SC_ActaComite_DeclaracionesResponsable}}</td>
         </tr>
         <tr>
            <th class="thshow">Declaraciones Otros</th>
            <td class="tdshow">{{ $actacomite->SC_ActaComite_DeclaracionesOtros}}</td>
         </tr> 
         <tr>
            <th class="thshow">Descargos</th>
            <td class="tdshow">{{ $actacomite->SC_ActaComite_Descargos}}</td>
         </tr> 
         <tr>
            <th class="thshow">Decisión</th>
            <td class="tdshow">{{ $actacomite->SC_ActaComite_Decision}}</td>
         </tr> 
         <tr>
            <th class="thshow">Citación</th>
            <td class="tdshow">{{ $actacomite->SC_Citacion_FK}}</td>
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

@endsection

