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
                        <a href="#">Crear Aprendices</a>
                    </li>
                    <li>
                        <a href="#">Ver Aprendices</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#condicionamiento" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-book-open"></i>
                    Condicionamiento
                </a>
                <ul class="collapse list-unstyled" id="condicionamiento">
                    <li>
                        <a href="#">Crear</a>
                    </li>
                    <li>
                        <a href="#">Ver </a>
                    </li>
                </ul>
            </li>
        </ul>

    </nav>

    {{--  <!-- Page Content  -->  --}}
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-outline-light" style="background: #FF8138">
                    <i class="fas fa-align-left"></i>
                </button>
                <a class="navbar-brand ml-2 font-weight-bolder" href="#">SENA</a>
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

