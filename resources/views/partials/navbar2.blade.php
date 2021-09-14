<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Landing Page SCES</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('estilos/landing_page.css') }}">
</head>

<body>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-light m-0" style="background-color:#FA771C;">
        <div class="container">
            <a class="navbar-brand" href="/">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://oferta.senasofiaplus.edu.co/sofia-oferta/">Sofia Plus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <header class="main-header">
        <div class="background-overlay text-white py-5">
            <div class="container">
                <div class="row d-flex h-100">
                    <div class="col-sm-6 text-center justify-content-center align-self-center">
                        <h1>
                            COMITE DE EVALUACIÓN Y SEGUIMIENTO
                        </h1>


                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('estilos/img/logoSena.png') }}" class="img-fluid d-none d-sm-block">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ABOUT -->


    <div id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>Comite de evalución y de seguimiento<br></h2>
                        <p>El Comité de Evaluación y Seguimiento se reunirá por lo menos una vez cada trimestre, y cada
                            vez que sea necesario para la aplicación del procedimiento.
                            Este comité realizará seguimiento a programas de formación afines tecnológicamente, en
                            espacios en los que puedan interactuar varios grupos de aprendices de especialidades
                            afines.<br>
                            Sesión del Comité de Evaluación y Seguimiento

                            Llegada la fecha y hora de la sesión del Comité, se debe verificar si hay quórum o no para
                            sesionar y decidir. A continuación el Coordinador Académico o el integrante de la comunidad
                            educativa que haya sido invitado, expondrá el caso a tratar.Posteriormente, se oirá en
                            descargos al aprendiz o aprendices citados

                        </p>
                        <a href="{{ asset('manuales/manual usuario.pdf') }}" target="_blank">Manual de usuario</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img
                                src="https://1.bp.blogspot.com/-c3eGfRfDk7s/Xe6_AlK7iCI/AAAAAAAAArA/mUIwsXIevOc5s1vEtCuWAu2XLlT0evoVwCLcBGAsYHQ/s1600/PHOTO-2019-03-15-09-34-19.jpg"
                                alt="img" /></figure>
                    </div>
                    <div class="imagen">
                        <figure><img
                                src="https://www.elestudiante.com.co/wp-content/uploads/2020/02/cursos-virtuales-sena.jpg"
                                alt="img" /></figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <!-- TEAM -->
    <footer>
        <div class="container p-3">
            <div class="row text-center text-white">
                <div class="col ml-auto">
                    <p class="text-light">Servicio Nacional de Aprendizaje SENA <br>
                    Tecnólogo en Desarrollo de Sistemas de Información 2068676</p>
                    <p></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
</body>

</html>
