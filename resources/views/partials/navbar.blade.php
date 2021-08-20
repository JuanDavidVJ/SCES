<div class="wrapper">
    {{--  <!-- Sidebar  -->  --}}
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Sistema de Comité y Evaluación</h3>
            <strong>SCES</strong>
        </div>

        <ul class="list-unstyled components">
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
                <a href="#condicionamiento" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-bell"></i>
                    Condicionamiento
                </a>
                <ul class="collapse list-unstyled" id="condicionamiento">
                    <li>
                        <a href="/condicionamientos/create">Crear</a>
                    </li>
                    <li>
                        <a href="/condicionamientos">Ver </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#administrativo" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-toolbox"></i>
                    Administrativo
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
                <a href="#Actacomite" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-users"></i>
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
                <a href="#evidencias" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-eye"></i>
                    Evidencias
                </a>
                <ul class="collapse list-unstyled" id="evidencias">
                    <li>
                        <a href="/evidencias/create">Crear</a>
                    </li>
                    <li>
                        <a href="/evidencias">Ver </a>
                    </li>
                </ul>
            </li>
            <li>
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
            </li>
            <li>
                <a href="#novedades" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-eye"></i>
                    Novedades
                </a>
                <ul class="collapse list-unstyled" id="novedades">
                    <li>
                        <a href="/novedades/create">Crear</a>
                    </li>
                    <li>
                        <a href="/novedades">Ver </a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="list-unstyled CTAs text-center">
            <h6 class="card-title">Desarrollado por <br> ADSI 2068676©<br> Regional Caldas <br>2021</h6>
        </ul>
    </nav>

    {{--  <!-- Page Content  -->  --}}
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-outline-light" style="background: #FF8138">
                    <i class="fas fa-align-left"></i>
                </button>
                <a class="navbar-brand ml-2 font-weight-bolder" href="/">SENA</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-user"></i> Usuario</a>
                            </li>
                        </ul>
                        <a class="nav-link " href="#"></a>
                        <form class="form-inline my-2 my-lg-0" action="" method="POST">
                            @csrf
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerrar sesión</button>
                        </form>
                    </div>
                
            </div>
        </nav>

