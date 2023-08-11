<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- BOOTSTRAP Y JAVASCRIPT-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @yield('header')
        <div class="container-fluid">
            <div class="row py-3 px-lg-5">
                <div class="col-lg-4">
                    <a href="" class="navbar-brand d-none d-lg-block">
                        <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Patitas</span>Felices</h1>
                    </a>
                </div>
                <div class="col-lg-8 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <div class="d-inline-flex flex-column text-center pr-3 border-right">
                            <h6>Horario</h6>
                            <p class="m-0">8:00AM - 5:00PM</p>
                        </div>
                        <div class="d-inline-flex flex-column text-center px-3 border-right">
                            <h6>Correo Electrónico</h6>
                            <p class="m-0">patitasfelices._@gmail.com</p>
                        </div>
                        <div class="d-inline-flex flex-column text-center pl-3">
                            <h6>Teléfono</h6>
                            <p class="m-0">+52 981 123 4567</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('Navbar')
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="Inicio">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="Nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Herramientas">Herramientas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Citas">Citas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Mascotas">Mascotas</a>
                        </li>
                    </ul>
                </div>
                <form action="{{url('welcome')}}" method="POST">
                        @csrf
                        <a class="btn btn-lg btn-primary px-3 d-none d-lg-block" href="#" onclick="this.closest('form').submit()">Cerrar Sesión</i></a>
                    </form>
            </div>
        </nav>
    </div>

    @yield('Contenido')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <footer>
        @yield('footer')
        <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
            <div class="row pt-5">
                <div class="col-lg-4 col-md-12 mb-5">
                    <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Patitas</span>Felices</h1>
                    <p class="m-0">"Patitas Felices" es una empresa de estética canina y felina que 
                        ofrece servicios de baño, corte de pelo, limpieza de oídos, uñas y tratamientos 
                        para el pelaje. Su equipo de profesionales expertos se enfoca en el 
                        bienestar y la comodidad de las mascotas, utilizando productos de calidad y 
                        brindando atención personalizada en un ambiente seguro y tranquilo.</p>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <h5 class="text-primary mb-4">Ubicación</h5>
                            <p><i class="fa fa-map-marker-alt mr-2"></i>Calle "La Quinta", San José, Campeche, Campeche</p>
                            <p><i class="fa fa-phone-alt mr-2"></i>+52 981 123 4567</p>
                            <p><i class="fa fa-envelope mr-2"></i>patitasfelices._@gmail.com</p>
                            <div class="d-flex justify-content-start mt-4">
                                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="text-primary mb-4">Links</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="/home"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                                <a class="text-white mb-2" href="/Nosotros"><i class="fa fa-angle-right mr-2"></i>Nosotros</a>
                                <a class="text-white mb-2" href="/Servicios"><i class="fa fa-angle-right mr-2"></i>Servicios</a>
                                <a class="text-white mb-2" href="Herramientas"><i class="fa fa-angle-right mr-2"></i>Herramientas</a>
                                <a class="text-white" href="/Cliente"><i class="fa fa-angle-right mr-2"></i>Cuenta</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="text-primary mb-4">Horario</h5>
                            <p>Lunes: 8:00 am - 5:00 pm</p>
                            <p>Martes: 8:00 am - 5:00 pm</p>
                            <p>Miércoles: 8:00 am - 5:00 pm</p>
                            <p>Jueves: 8:00 am - 5:00 pm</p>
                            <p>Viernes: 8:00 am - 5:00 pm</p>
                            <p>Sábado: 10:00 am - 3:00 pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>