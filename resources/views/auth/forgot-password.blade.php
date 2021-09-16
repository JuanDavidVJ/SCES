@extends('layouts.login-register')
@section('title', 'Inicio de Sesión')
@section('content')
<body style="background-image: url(estilos/img/fondo_login.jpg);">
<div class="capa">
        
    </div>
    

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
        <div id="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card-login2">
                    <div class="card-body">
                        <form action="{{ route('password.email') }}" method="post" class="formulario">
                            @csrf
                            @if(session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                        <h4>¡No te preocupes! Escribe tu email <br> y restablece tu contraseña</h4>

                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope" id="i"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Ingresa tu Email" required>

                            </div>
                            <div class="form-group">
                                <!--<input type="submit" value="Iniciar Sesión" class="btn float-right login_btn">-->
                                <button type="submit" class="button">Restablecer Contraseña</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <footer>
           <h3>SCES</h3>
            &copy; Desarrollado Por ADSI-2068676
        </footer>
        </body>
@endsection