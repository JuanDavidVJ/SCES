@extends('layouts.base')
@section('title', 'Detalles de Usuario')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card text-center" style="width: 60rem;">
      <div class="card-body">
        <h3 class="card-title" id="h3show">{{ $usuarios->username }}</h3>
      </div>
        <table class="table table-responsive table-hover " id="tableshow">
      			<tbody>
              <tr>
                <th class="thshow">Nombre</th>
                <td class="tdshow">{{ $usuarios->name }}</td>
              </tr>
              <tr>
                <th class="thshow">Documento</th>
                <td class="tdshow">{{ $usuarios->documento }}</td>
              </tr>
              <tr>
                <th class="thshow">Nombre</th>
                <td class="tdshow">{{ $usuarios->name }}</td>
              </tr>
              <tr>
                <th class="thshow">Correo</th>
                <td class="tdshow">{{ $usuarios->email }}</td>
              </tr>
              <tr>
                <th class="thshow">Contraseña</th>
                <td class="tdshow">{{ $usuarios->password }}</td>
              </tr>
              <tr>
                <th class="thshow">Tipo de Usuario</th>
                <td class="tdshow">{{ $usuarios->tipoUsuario }}</td>
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
                        <span>La siguiente acción eliminará el usuario: <br> <strong>{{ $usuarios->username }}</strong> </span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                        <form class="delete d-inline" action="/RegistrarUsuarios/{{ $usuarios->id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    </div>
                 </div>
                </div>
            </div>
        <a href="/RegistrarUsuarios/{{ $usuarios->id }}/edit" class="btn btn-outline-warning"><i class="fas fa-wrench"></i></a>
        <a href="/RegistrarUsuarios" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
      </div>
    </div>
    </div>
</div>
@endsection