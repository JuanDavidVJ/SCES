@extends('layouts.base')
@section('title', 'Detalles de ficha')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card text-center" style="width: 40rem;">
      <div class="card-body">
        <h3 class="card-title" id="h3show">Ficha N° {{ $ficha->SC_Ficha_NumeroFicha }}</h3>
      </div>
        <table class="table table-responsive table-hover " id="tableshow">
      			<tbody>
						 <tr>
            				<th class="thshow">Nombre Programa</th>
            				<td class="tdshow">{{ $ficha->SC_Ficha_NombreProgramaFormacion }}</td>
        				</tr>
                        <tr>
            				<th class="thshow">Gestor de Grupo</th>
            				<td class="tdshow">{{ $ficha->usuario->name }}</td>
        				</tr>
                        <tr>
            				<th class="thshow">Fecha Inicio</th>
            				<td class="tdshow">{{ $ficha->SC_Ficha_FechaInicio }}</td>
        				</tr>
                        <tr>
            				<th class="thshow">Fecha Final</th>
            				<td class="tdshow">{{ $ficha->SC_Ficha_FechaFin }}</td>
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
                        <span>La siguiente acción eliminará la ficha: <br> Ficha N° {{ $ficha->SC_Ficha_NumeroFicha }}</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                        <form class="delete d-inline" action="/fichas/{{ $ficha->SC_Ficha_PK_ID }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form> 
                    </div>
                 </div>
                </div>
            </div>
        
        
        <a href="/fichas/{{ $ficha->SC_Ficha_PK_ID }}/edit" class="btn btn-outline-warning"><i class="fas fa-wrench"></i></a>
        <a href="/fichas" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
      </div>
    </div>
    </div>
</div>
@endsection