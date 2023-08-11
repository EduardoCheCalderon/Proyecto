@extends('layout/Template')

@section('title', 'Servicios')

@section('header')
    
@endsection

@section('Navbar')
    
@endsection
    
@section('Contenido')
    <div class="container-fluid bg-light pt-5 pb-4">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Precios</h4>
                <h1 class="display-4 m-0">Nuestros <span class="text-primary">Servicios</span></h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Servicios/baño.png" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .4);">
                                <h3 class="text-primary mb-3">Baño</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <p class="card-text">Mantenemos a tu mascota limpia y fresca con productos de calidad.</p>
                        </div>
                        <br>
                        <div class="card-footer border-0 p-0 text-center">
                            <button type="button" class="btn btn-primary" name="info" value="ok" > Signup Now </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Servicios/corte-de-pelo.jpg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .4);">
                                <h3 class="text-primary mb-3">Corte de pelo</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <p class="card-text">Estilistas expertos se encargan del corte personalizado de tu mascota.</p>
                        </div>
                        <br>
                        <div class="card-footer border-0 p-0 text-center">
                            <button type="button" class="btn btn-primary" name="info" value="ok" > Signup Now </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Servicios/corte-de-uñas.jpg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .4);">
                                <h3 class="text-primary mb-3">Corte de uñas</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <p class="card-text">Cortamos y limamos las uñas de tu mascota de forma segura.</p>
                        </div>
                        <br>
                        <div class="card-footer border-0 p-0 text-center">
                            <button type="button" class="btn btn-primary" name="info" value="ok" > Signup Now </button>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card border-0">
                            <div class="card-header position-relative border-0 p-0 mb-4">
                                <img class="card-img-top" src="img/Servicios/lavado-dental.png" alt="">
                                <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .4);">
                                    <h3 class="text-primary mb-3">Lavado dental</h3>
                                    <h1 class="display-4 text-white mb-0">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49
                                    </h1>
                                </div>
                            </div>
                            <div class="card-body text-center p-0">
                                <p class="card-text">Eliminamos la placa y el sarro para una buena salud dental.</p>
                            </div>
                            <br>
                            <div class="card-footer border-0 p-0 text-center">
                                <button type="button" class="btn btn-primary" name="info" value="ok" > Signup Now </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card border-0">
                            <div class="card-header position-relative border-0 p-0 mb-4">
                                <img class="card-img-top" src="img/Servicios/lavado-de-oido.png" alt="">
                                <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .4);">
                                    <h3 class="text-primary mb-3">Limpieza de oídos</h3>
                                    <h1 class="display-4 text-white mb-0">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99
                                    </h1>
                                </div>
                            </div>
                            <div class="card-body text-center p-0">
                                <p class="card-text">Realizamos una limpieza suave y segura de los oídos.</p>
                            </div>
                            <br>
                            <div class="card-footer border-0 p-0 text-center">
                                <button type="button" class="btn btn-primary" name="info" value="ok" > Signup Now </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card border-0">
                            <div class="card-header position-relative border-0 p-0 mb-4">
                                <img class="card-img-top" src="img/Servicios/spa.png" alt="">
                                <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .4);">
                                    <h3 class="text-primary mb-3">Spa</h3>
                                    <h1 class="display-4 text-white mb-0">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99
                                    </h1>
                                </div>
                            </div>
                            <div class="card-body text-center p-0">
                                <p class="card-text">Ofrecemos tratamientos relajantes y de cuidado para tu mascota.</p>
                            </div>
                            <br>
                            <div class="card-footer border-0 p-0 text-center">
                                <button type="button" class="btn btn-primary" name="info" value="ok" > Signup Now </button>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
@endsection

@section('Footer')
    
@endsection