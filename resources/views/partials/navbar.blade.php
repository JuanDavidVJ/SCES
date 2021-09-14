<div class="wrapper">
    {{-- <!-- Sidebar  --> --}}
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Sistema de Comité y Evaluación</h3>
            <strong>SCES</strong>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="#solicitudcomite" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-users"></i>
                    Solicitud Comité
                </a>
                <ul class="collapse list-unstyled" id="solicitudcomite">
                    <li>
                        <a href="/solicitarComite/create">Crear Solicitud</a>
                    </li>
                    <li>
                        <a href="/solicitarComite">Ver Solicitud</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#Citacion" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-calendar-alt"></i>
                    Citación
                </a>
                <ul class="collapse list-unstyled" id="Citacion">
                    <li>
                        <a href="/Citacion/create">Crear</a>
                    </li>
                    <li>
                        <a href="/Citacion">Ver </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#Actacomite" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-hourglass-start"></i>
                    Acta Comite
                </a>
                <ul class="collapse list-unstyled" id="Actacomite">
                    <li>
                        <a href="/ActaComite/create">Crear</a>
                    </li>
                    <li>
                        <a href="/ActaComite">Ver </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#administrativo" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-toolbox"></i>
                    Notificaciones
                </a>
                <ul class="collapse list-unstyled" id="administrativo">
                    <li>
                        <a href="/actoadministrativo/create">Crear</a>
                    </li>
                    <li>
                        <a href="/actoadministrativo">Ver </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#recursos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-pencil-alt"></i>
                    Recursos de Reposición
                </a>
                <ul class="collapse list-unstyled" id="recursos">
                    <li>
                        <a href="/recursosReposicion/create">Crear</a>
                    </li>
                    <li>
                        <a href="/recursosReposicion">Ver</a>
                    </li>
                </ul>
            </li>
            <!-- <li>
                <a href="#impugnaciones" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-university"></i>
                    Impugnaciones
                </a>
                <ul class="collapse list-unstyled" id="impugnaciones">
                    <li>
                        <a href="/impugnaciones/create">Crear</a>
                    </li>
                    <li>
                        <a href="/impugnaciones">Ver </a>
                    </li>
                </ul>
            </li>-->

            <li>
                <a href="#estimulos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-bookmark"></i>
                    Estimulos
                </a>
                <ul class="collapse list-unstyled" id="estimulos">
                    <li>
                        <a href="/estimulos/create">Crear</a>
                    </li>
                    <li>
                        <a href="/estimulos">Ver </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#ficha" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-copy"></i>
                    Ficha
                </a>
                <ul class="collapse list-unstyled" id="ficha">
                    <li>
                        <a href="/fichas/create">Crear Ficha</a>
                    </li>
                    <li>
                        <a href="/fichas">Ver Fichas</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#aprendices" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-user-graduate"></i>
                    Aprendices
                </a>
                <ul class="collapse list-unstyled" id="aprendices">
                    <li>
                        <a href="/aprendices/create">Crear Aprendices</a>
                    </li>
                    <li>
                        <a href="/aprendices">Ver Aprendices</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#RegistroUsuarios" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-user-tie"></i>
                    Registrar Usuarios
                </a>
                <ul class="collapse list-unstyled" id="RegistroUsuarios">
                    <li>
                        <a href="/RegistrarUsuarios/create">Crear Usuario</a>
                    </li>
                    <li>
                        <a href="/RegistrarUsuarios">Ver Usuarios</a>
                    </li>
                </ul>
            </li>
            <li>
                <a  href="{{ asset('manuales/Reglamento.pdf') }}" target="_blank">
                <i class="fas fa-book"></i>
                    Reglamento Aprendiz
                </a>
            </li>

            
        </ul>
        <ul class="list-unstyled CTAs text-center">
            <h6 class="card-title">Desarrollado por <br> ADSI 2068676©<br> Regional Caldas <br>2021</h6>
        </ul>
    </nav>

    {{-- <!-- Page Content  --> --}}
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-outline-light" style="background: #FF8138">
                    <i class="fas fa-align-left"></i>
                </button>
                <a class="navbar-brand ml-2 font-weight-bolder" href="/">SENA</a>
                <span class="navbar-text">
                    @if(Auth::user()->tipoUsuario == 3)
                        Gestor de comite
                    @endif
                </span>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i
                                    class="fas fa-user"></i> {{ Auth::user()->name }}</a>
                        </li>
                    </ul>
                    <a class="nav-link " href="#"></a>
                    <form class="form-inline my-2 my-lg-0" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerrar sesión</button>
                    </form>
                </div>

            </div>
        </nav>
