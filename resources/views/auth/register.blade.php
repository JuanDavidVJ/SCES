@extends('layouts.login-register')
@section('title', 'Register')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- <div class="container container-register">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" name="username" class="form-control" id="username" required>
            </div>
            <div class="form-group">
                <label for="name">Nombre: </label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña: </label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="form-group">
                <label for="rol">Rol</label>
                <select name="rol" id="rol" class="form-control">
                    <option value="1">Administrador</option>
                    <option value="2">Usuario</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div> --}}

    <div class="container container-register">
        <div class="container">
            <div class="d-flex justify-content-center h-150">
                <div class="card-login">
                    <div class="card-header">
                        <h3>Registrarse</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Nombre de Usuario" required>
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="documento" class="form-control" id="documento"
                                    placeholder="Documento" required>
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Nombre Completo" required>
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Correo Electronico" required>
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Contraseña" required>
                            </div>
                            <div class="form-group">
                                <select name="tipoUsuario" id="tipoUsuario" class="form-control">
                                    <option value="1">Subdirector</option>
                                    <option value="2">Instructor</option>
                                    <option value="3">Gestor Comité</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Registrarse" class="btn float-right login_btn">
                            </div>
                        </form>
                    </div><br><br>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Ya tengo una cuenta<a href="{{ route('login') }}" class="link-login">Iniciar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
