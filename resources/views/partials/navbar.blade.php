<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>SCES</title>
    <link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰</label>
            </div>
            <div class="logo">
                <h1 class="title">SCES</h1>
            </div>
            <nav class="menu">
                <a href="/">Inicio</a>
                <a href="#">SofiaPlus</a>
                <a href="#">Territorium</a>
                <a href="login.html">Cerrar Sesión</a>
            </nav>
        </div>
    </header>
    <div class="capa"></div>
    <!--	--------------->
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <ul>
                    <li><a href="#">Ficha</a>
                        <ul>
                            <li><a href="/fichas/create">Nueva Ficha</a></li>
                            <li><a href="/fichas">Ver Fichas</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Aprendices</a>
                        <ul>
                            <li><a href="/aprendices/create">Crear Aprendiz</a></li>
                            <li><a href="/aprendices">Ver Aprendices</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Condicionamiento Matricula</a>
                        <ul>
                            <li><a href="/condicionamientos/create">Nuevo Condicionamiento</a></li>
                            <li><a href="/condicionamientos">Ver Condicionamientos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Comités</a>
                        <ul>
                            <li><a href="/ActaComite/create">Crear Comité</a></li>
                            <li><a href="/ActaComite">Ver Comités</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Acto Administrativo</a>
                        <ul>
                            <li><a href="/actoadministrativo/create">Nuevo Acto Administrativo</a></li>
                            <li><a href="/actoadministrativo">Ver Actos Administrativos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Beneficios de estimulo</a>
                        <ul>
                            <li><a href="">Opción 1</a></li>
                            <li><a href="">Ver</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Novedades</a>
                        <ul>
                            <li><a href="">Opción 1</a></li>
                            <li><a href="">Ver</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Antecedentes</a>
                        <ul>
                            <li><a href="">Opción 1</a></li>
                            <li><a href="">Ver</a></li>
                        </ul>
                    </li>
                    <li><a href="https://www.sena.edu.co/es-co/transparencia/ProyectoNorma/Reglamento_del_Aprendiz_del_Servicio_Nacional_de_Aprendizaje%E2%80%93SENA.pdf"
                            target="blank">Reglamento</a></li>
                    <li><a href="#">Plan de mejoramiento</a>
                        <ul>
                            <li><a href="">Opción 1</a></li>
                            <li><a href="">Ver</a></li>
                        </ul>
                    </li>
                    <li class="impugnaciones"><a href="#">Impugnaciones</a>
                        <ul>
                            <li><a href="/impugnaciones/create">Nueva Impugnacion</a></li>
                            <li><a href="/impugnaciones">Ver Impugnaciones</a></li>
                        </ul>
                    </li>
                    <li class=""><a href="#">Evidencias</a>
                        <ul>
                            <li><a href="/evidencias/create">Nueva Evidencia</a></li>
                            <li><a href="/evidencias">Ver Evidencias</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
    <hr>

</body>

</html>
