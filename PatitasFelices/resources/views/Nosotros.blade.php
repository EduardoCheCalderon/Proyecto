@extends('layout/Template')

@section('title', 'Nosotros')

@section('header')
    
@endsection

@section('Navbar')
    
@endsection

@section('Contenido')
<div class="container py-5">
    <div class="row py-5">
        <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
            <h4 class="text-secondary mb-3">Nosotros</h4>
            <h1 class="display-4 mb-4"><span class="text-primary">Cuidado especial</span> & <span class="text-secondary">Calidad</span></h1>
            <h5 class="text-muted mb-3">Nos apasionan los animales y creemos que todas las mascotas merecen recibir un trato amoroso y cuidadoso.</h5>
            <p class="mb-4">Nuestro equipo está compuesto por expertos estilistas caninos y felinos 
                altamente capacitados, que se dedican a proporcionar un servicio de peluquería y 
                cuidado de mascotas excepcional. Nos enorgullecemos de ofrecer un ambiente relajado 
                y amigable para las mascotas, donde puedan sentirse cómodas y seguras durante su visita.</p>
            <ul class="list-inline">
                <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Profesionalismo y Experiencia</h5></li>
                <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Trato Personalizado</h5></li>
                <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Instalaciones Modernas y Seguras</h5></li>
                <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Productos de Calidad</h5></li>
            </ul>
        </div>
        <div class="col-lg-5">
            <div class="row px-3">
                <div class="col-12 p-0">
                    <img class="img-fluid w-100" src="img/Nosotros/perro.jpg" alt="">
                </div>
                <div class="col-6 p-0">
                    <img class="img-fluid w-100" src="img/Nosotros/gato1.png" alt="">
                </div>
                <div class="col-6 p-0">
                    <img class="img-fluid w-100" src="img/Nosotros/gato2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

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

<br>

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
@endsection

@section('Footer')
    
@endsection