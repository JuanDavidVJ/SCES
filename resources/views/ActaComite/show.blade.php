@extends('layouts.base')
@section('title', 'Detalles de Acta')
@section('content')
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
@endsection

