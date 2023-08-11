@extends('layout/Template')

@section('title', 'Pagina Principal')

@section('header')

@endsection

@section('Navbar')
    
@endsection

@section('Contenido')
<!-- Carrusel -->
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/Carrusel/carrusel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-white">Mis mascotas</h1>
                <h5 class="text-white">¡Echemos un vistazo!</h5>
                <a href="/Mascotas" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Ir</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/Carrusel/carrusel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-white">Servicios</h1>
                <h5 class="text-white">Aquí se encuentran todos los servicios que tenemos disponibles.</h5>
                <a href="/Servicios" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Ir</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/Carrusel/carrusel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-white">Productos</h1>
                <h5 class="text-white">Si no conoces que productos usamos, da click en el botón y te daremos más información de ello.</h5>
                <a href="/Herramientas" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Ir</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<br><br>

<!-- Información -->
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-5">
            <img class="img-fluid w-100" src="img/informacion.jpg" alt="">
        </div>
        <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
            <h4 class="text-secondary mb-3">¿Por qué nosotros?</h4>
            <h1 class="display-4 mb-4"><span class="text-primary">Cuidado especial</span> en mascotas</h1>
            <p class="mb-4">Contamos con un cuidado sumamente dedicado y personalizado, donde cada mascota es tratada como parte de nuestra familia.</p>
            <div class="row py-2">
                <div class="col-6">
                    <div class="d-flex align-items-center mb-4">
                        <h1 class="flaticon-cat font-weight-normal text-secondary m-0 mr-3"></h1>
                        <h5 class="text-truncate m-0">Los mejores en la industria</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center mb-4">
                        <h1 class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"></h1>
                        <h5 class="text-truncate m-0">Servicios de aseo</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center">
                        <h1 class="flaticon-care font-weight-normal text-secondary m-0 mr-3"></h1>
                        <h5 class="text-truncate m-0">Productos saludables</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center">
                        <h1 class="flaticon-dog font-weight-normal text-secondary m-0 mr-3"></h1>
                        <h5 class="text-truncate m-0">Soporte técnico</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>

<!-- Miembros de equipo -->
<div class="container mt-5 pt-5 pb-3">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-secondary mb-3">Miembros de Equipo</h4>
        <h1 class="display-4 m-0">Conoce a <span class="text-primary">nuestro equipo</span></h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="img/perfil-equipo.png" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light">
                        <h5>Mollie Ross</h5>
                        <i>Founder & CEO</i>
                    </div>
                    <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="img/perfil-equipo.png" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light">
                        <h5>Jennifer Page</h5>
                        <i>Chef Executive</i>
                    </div>
                    <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="img/perfil-equipo.png" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light">
                        <h5>Kate Glover</h5>
                        <i>Doctor</i>
                    </div>
                    <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="img/perfil-equipo.png" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light">
                        <h5>Lilly Fry</h5>
                        <i>Trainer</i>
                    </div>
                    <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonios -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-secondary mb-3">Opiniones</h4>
        <h1 class="display-4 m-0"><span class="text-primary">Nuestros clientes</span> dicen...</h1>
    </div>
    <div class="row pb-3">
        <div class="col-lg-4 mb-4">
            <div class="card border-0 mb-2">
                <img class="card-img-top" src="img/perfil-equipo.png" alt="">
                <div class="card-body bg-light p-4">
                    <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>
                    <i>Profession</i>
                    <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum sit vero stet justo</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 mb-2">
                <img class="card-img-top" src="img/perfil-equipo.png" alt="">
                <div class="card-body bg-light p-4">
                    <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>
                    <i>Profession</i>
                    <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum sit vero stet justo</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 mb-2">
                <img class="card-img-top" src="img/perfil-equipo.png" alt="">
                <div class="card-body bg-light p-4">
                    <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>
                    <i>Profession</i>
                    <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum sit vero stet justo</p>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('Footer')
    
@endsection