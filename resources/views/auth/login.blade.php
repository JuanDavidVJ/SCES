@extends('layouts.login-register')
@section('title', 'Inicio de Sesión')
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

    <div class="container container-register">
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card-login2">
                    <div class="card-header">
                        <h3>Inicio de Sesión</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
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
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Contraseña" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Iniciar Sesión" class="btn float-right login_btn">
                            </div>
                        </form>
                    </div>
                    <br><br>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            No tiene una cuenta?<a href="{{ route('register') }}" class="link-login">Registrarse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
