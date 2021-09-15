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
                        <form action="{{ route('login') }}" method="post" class="formulario">
                            @csrf
                        <h3>Inicio de Sesión</h3>

                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user" id="i"></i></span>
                                </div>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Nombre de Usuario" required>

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key" id="i"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Contraseña" required>
                            </div>
                            <div class="form-group">
                                <!--<input type="submit" value="Iniciar Sesión" class="btn float-right login_btn">-->
                                <button type="submit" class="button">Iniciar Sesión</button>
                            </div>
                        </form>
                        <div class="card-footer">
                         <div class="d-flex justify-content-center links">
                            <a class="link-login" style="color: white">¿Olvidé mi contraseña?</a>
                        </div> 
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
