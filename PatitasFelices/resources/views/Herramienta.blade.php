@extends('layout/Template')

@section('title', 'Nosotros')

@section('header')
    
@endsection

@section('Navbar')
    
@endsection

@section('Contenido')
    <div class="container-fluid bg-light pt-5 pb-4">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Nuestros servicios</h4>
                <h1 class="display-4 m-0">Baño</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Baño/champu_hipoalergenico.jpg" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Champú hipoalergénico</h5>
                            <p class="card-text">Es una excelente opción para las mascotas con pieles sensibles o alergias, ya que proporciona una limpieza suave y efectiva sin causar irritaciones.</p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Baño/acondicionador_hipoalergenico.jpg" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Acondicionador hipoalergénico</h5>
                            <p class="card-text">Con una hidratación suave sin ser agresivo con la piel, ingredientes suaves y naturales, y por supuesto, dermatológicamente probado.</p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Baño/secadora.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Secador de pelo</h5>
                            <p class="card-text">Un secador específico para mascotas puede ser útil para secar a los animales rápidamente después del baño.</p>
                        </div>
                        <br>
                    </div>
                </div>  
            </div>
            <br>
            <div class="d-flex flex-column text-center mb-5">
                <h1 class="display-4 m-0">Corte de pelo</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Corte_pelo/afeitadora.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Máquina de afeitar</h5>
                            <p class="card-text">Es una herramienta fundamental para el corte de pelo. Existen modelos específicos para mascotas, con diferentes cuchillas según el tipo de pelaje y el largo deseado.</p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Corte_pelo/cuchillas.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Cuchillas intercambiables</h5>
                            <p class="card-text">Permiten ajustar la longitud del corte y se adaptan a las cortadoras. Vienen en diferentes números que indican la longitud del pelo resultante.</p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Corte_pelo/peines_cardado.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Peines de cardado</h5>
                            <p class="card-text">Ayudan a eliminar el pelo muerto y nudos, especialmente en mascotas con pelaje denso.</p>
                        </div>
                        <br>
                    </div>
                </div>  
            </div>
            <br>
            <div class="d-flex flex-column text-center mb-5">
                <h1 class="display-4 m-0">Corte de uñas</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Corte_uña/guillotina.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Cortaúñas de guillotina</h5>
                            <p class="card-text">Este tipo de cortaúñas tiene un orificio en el que se coloca la uña de la mascota. Recomendamos usar este cortaúñas en perros y gatos pequeños o medianos.</p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Corte_uña/tijera.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Cortaúñas de tipo tijera</h5>
                            <p class="card-text">Los cortaúñas de tipo tijera se asemejan a unas tijeras regulares, pero cuentan con cuchillas especialmente diseñadas para cortar las uñas de las mascotas. Estos cortaúñas son adecuados para perros de todos los tamaños y son especialmente útiles para aquellos con uñas más gruesas y resistentes.</p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Corte_uña/esmeril.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Esmeril para uñas</h5>
                            <p class="card-text">Es una herramienta eléctrica que permite lijar las uñas de las mascotas en lugar de cortarlas. Es una opción más segura para los dueños de mascotas menos experimentados, ya que reduce el riesgo de cortar la uña demasiado corta.</p>
                        </div>
                        <br>
                    </div>
                </div>  
            </div>
            <br>
            <div class="d-flex flex-column text-center mb-5">
                <h1 class="display-4 m-0">Lavado dental</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Lavado_dental/dedales.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Dedales o cepillos de dedo</h5>
                            <p class="card-text">: Estas herramientas son una alternativa al cepillado tradicional y son útiles para los animales que no se sienten cómodos con un cepillo de dientes. Los dedales se colocan en el dedo del dueño y se utilizan para frotar suavemente los dientes y encías del animal.</p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Lavado_dental/enjuague.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Enjuague bucal para mascotas</h5>
                            <p class="card-text">Los enjuagues bucales para mascotas pueden ayudar a reducir la acumulación de placa y proporcionar un aliento más fresco.</p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Lavado_dental/espuma.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Espumas dentales</h5>
                            <p class="card-text">Estas opciones pueden ser útiles para limpiar los dientes y encías de las mascotas que no toleran bien el cepillado. Las toallitas o espumas dentales se aplican directamente en los dientes y se pueden usar para limpiar y refrescar la boca de la mascota.</p>
                        </div>
                        <br>
                    </div>
                </div>  
            </div>
            <br>
            <div class="d-flex flex-column text-center mb-5">
                <h1 class="display-4 m-0">Limpieza de oídos</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Limpieza_oido/solucion-oidos.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Solución de limpieza de oídos</h5>
                            <p class="card-text">Una solución limpiadora de oídos específicamente formulada para mascotas es un elemento fundamental en el proceso de limpieza. Esta solución generalmente contiene ingredientes suaves que ayudan a disolver el cerumen, suciedad y desechos acumulados en el canal auditivo sin irritar la piel sensible de la mascota.</p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Limpieza_oido/solucion-oido-hipoalergenico.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Solución de limpieza de oídos hipoalergénica</h5>
                            <p class="card-text">Están libres de fragancias, colorantes y otros ingredientes potencialmente irritantes que podrían causar molestias en las mascotas. En su lugar, contienen componentes suaves y naturales que ayudan a disolver el cerumen y la suciedad acumulados sin causar problemas cutáneos.</p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/Limpieza_oido/pinza.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Pinzas para cerumen</h5>
                            <p class="card-text">Estas pinzas, especialmente diseñadas para mascotas, pueden ser útiles para eliminar cuidadosamente trozos de cerumen o acumulaciones persistentes en el oído externo, siempre con precaución para no dañar el canal auditivo.</p>
                        </div>
                        <br>
                    </div>
                </div>  
            </div>
            <br>
            <div class="d-flex flex-column text-center mb-5">
                <h1 class="display-4 m-0">Spa</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/spa/hidromasaje.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Baño de hidromasaje</h5>
                            <p class="card-text">Un baño equipado con chorros de agua relajantes que ayudan a limpiar y masajear a la mascota, aliviando la tensión muscular y mejorando la circulación.</p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/spa/aromaterapia.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Aromaterapia</h5>
                            <p class="card-text">Aceites esenciales naturales que pueden ayudar a relajar y calmar a las mascotas durante el tratamiento de spa.</p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/Herramientas/spa/balsamo.png" alt="">
                        </div>
                        <div class="card-body text-center p-0">
                            <h5 class="card-title">Bálsamo para patas y nariz</h5>
                            <p class="card-text">Un producto suavizante y humectante que ayuda a proteger y cuidar las almohadillas de las patas y la nariz de las mascotas.</p>
                        </div>
                        <br>
                    </div>
                </div>  
            </div>
        </div>
    </div>
@endsection

@section('Footer')
    
@endsection