@extends('layouts.base')
@section('title', 'Detalles de Solicitud')
@section('content')
	<div class="container d-flex justify-content-center">
        <div class="card text-center" style="width: 40rem;">
          <div class="card-body">

            <h3 class="card-title" id="h3show">Solicitud N° {{$solicitar->SC_SolicitarComite_ID }}</h3>
        </div>
            <table class="table table-responsive table-hover " id="tableshow">
    <tbody>

        <tr>
           <th class="thshow">Responsable</th>
           <td class="tdshow">{{ $solicitar->SC_SolicitarComite_Responsable }}</td>
        </tr>
        <tr>
           <th class="thshow">Fecha</th>
           <td class="tdshow">{{ $solicitar->SC_SolicitarComite_Fecha }}</td>
        </tr>
        <tr>
        <tr>
           <th class="thshow">Descripción</th>
           <td class="tdshow">{{ $solicitar->SC_SolicitarComite_Descripcion }}</td>
        </tr>
        <tr>
           <th class="thshow">Testigos</th>
           <td class="tdshow">{{ $solicitar->SC_SolicitarComite_Testigos }}</td>
        </tr>
        <tr>
           <th class="thshow">Observaciones</th>
           <td class="tdshow">{{ $solicitar->SC_SolicitarComite_Observaciones }}</td>
        </tr>
        <tr>
           <th class="thshow">Anexo</th>
            <td class="tdshow" id="linkshow"><a href="{{asset('/archivos/solicitarComite/'.$solicitar->SC_SolicitarComite_Anexo)}}" target="_blank">Ver</a></td>
        </tr>
        <tr>
           <th class="thshow">Aprendiz</th>
           <td class="tdshow">{{ $solicitar->aprendiz->SC_Aprendiz_Nombres }} {{ $solicitar->aprendiz->SC_Aprendiz_Apellidos }}</td>
        </tr>
        <tr>
           <th class="thshow">Gestor de grupo</th>
           <td class="tdshow"> {{ $solicitar->usuario->name}}</td>
        </tr>
        <tr>
           <th class="thshow">Tipo de falta</th>
           <td class="tdshow"> {{ $solicitar->tipofalta->SC_TipoFalta_Descripcion }}</td>
        </tr>
        <tr>
           <th class="thshow">Gravedad de la falta</th>
           <td class="tdshow"> {{ $solicitar->gravedad->SC_Gravedad_Nombre }}</td>
        </tr>
        <tr>
           <th class="thshow">Reglamento</th>
           <td class="tdshow">{{ $solicitar->reglamento->	SC_Reglamento_Numeral }}</td>
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
                            <span>La siguiente acción eliminará la solicitud a comité: {{$solicitar->SC_SolicitarComite_ID}} </span>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                          <form class="delete d-inline"  action="/solicitarComite/{{ $solicitar->SC_SolicitarComite_ID   }}" method="post">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger">Eliminar</button>
                          </form> 
                        </div>
                      </div>
                    </div>
                 </div>
            <a href="/solicitarComite/{{ $solicitar->SC_SolicitarComite_ID  }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
            <a href="/solicitarComite" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
          </div>
        </div>
      </div>
    </div>
@endsection