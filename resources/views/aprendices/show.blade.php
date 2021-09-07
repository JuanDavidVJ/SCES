@extends('layouts.base')
@section('title', 'Detalles de Aprendiz')
@section('content')
<div class="container d-flex justify-content-center">
             <div class="card text-center" style="width: 40rem;">
             <div class="card-body">
                    <h3 class="card-title" id="h3show">{{ $aprendiz->SC_Aprendiz_Nombres }} {{$aprendiz->SC_Aprendiz_Apellidos}}</h3>
            </div>
            <table class="table table-responsive table-hover " id="tableshow">
    <tbody>

        <tr>
           <th class="thshow">Documento</th>
            <td class="tdshow">{{ $aprendiz->SC_Aprendiz_Documento }}</td>
            
        </tr>
        <tr>
           <th class="thshow">Correo</th>
           <td class="tdshow">{{ $aprendiz->SC_Aprendiz_Correo }}</td>
        </tr>
        <tr>
           <th class="thshow">Contacto</th>
           <td class="tdshow">{{ $aprendiz->SC_Aprendiz_NumeroContacto }}</td>
        </tr>
         <tr>
           <th class="thshow">Ficha</th>
           <td class="tdshow">{{ $aprendiz->SC_Ficha_PK_ID }}</td>
        </tr>
         <tr>
           <th class="thshow">Contrato de Aprendizaje</th>
           <td class="tdshow">{{ $aprendiz->SC_Aprendiz_ContratoAprendizaje }}</td>
        </tr>
         <tr>
           <th class="thshow">Empresa</th>
           <td class="tdshow">{{ $aprendiz->SC_Aprendiz_Empresa }}</td>
        </tr>
         <tr>
          
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
                        <span>La siguiente acción eliminará al aprendiz: <br> {{ $aprendiz->SC_Aprendiz_Nombres }} {{$aprendiz->SC_Aprendiz_Apellidos}}</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                        <form class="delete d-inline" action="/aprendices/{{ $aprendiz->SC_Aprendiz_PK_ID }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form> 
                    </div>
                    </div>
                </div>
                </div>

                



                <a href="/aprendices/{{ $aprendiz->SC_Aprendiz_PK_ID }}/edit" class="btn btn-warning"><i class="fas fa-wrench"></i></a>
                <a href="/aprendices" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
            </div>
           </div>
        </div>
</div>
@endsection
