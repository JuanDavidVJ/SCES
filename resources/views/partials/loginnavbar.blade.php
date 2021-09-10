
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <div class="col-sm-1">
                    <img src="{{ asset('estilos/img/logoSena.png') }}" class="img-fluid d-none d-sm-block">
                </div>
                <a class="navbar-brand ml-2 font-weight-bolder">SCES - Sistema de Comité de Evaluación y Seguimiento SENA</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                    </ul>
                    <a class="nav-link" href="/">Inicio</a>
                    <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                    <a class="nav-link" href="{{ route('register') }}">Registrarme</a>
                </div>

            </div>
        </nav>
