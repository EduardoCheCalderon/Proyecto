<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Patitas Felices</title>

    <!-- BOOTSTRAP Y JAVASCRIPT-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <!-- Style CSS -->
    <link href="css/style_login.css" rel="stylesheet">
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    
</head>
<body>
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="titulo my-5 display-5 fw-bold ls-tight">
                    Patitas Felices
                    </h1>
                    <p class="mb-4 opacity-70 text-light">
                    Bienvenido a "Patitas Felices"! La estetica perruna y gatuna que hará feliz a tu mascota. Inicia sesión para acceder a nuestros servicios de baño, corte de pelo, y mimos personalizados para consentir a tus queridas mascotas. Sus patitas estarán en las mejores manos!
                    </p>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                            <div class="card bg-glass">
                                <div class="card-body px-4 py-5 px-md-5">
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <h1 class="my-5 display-5 fw-bold ls-tight">
                                            Iniciar sesión
                                        </h1>
                                        <br>
                                    <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form3Example3" name="email" class="form-control" placeholder="Ingrese su correo electronico"/>
                                            <label class="form-label" for="form3Example3">Correo electronico</label>
                                        </div>
                                    <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example4" name="password" class="form-control" placeholder="Ingrese su contraseña"/>
                                            <label class="form-label" for="form3Example4">Contraseña</label>
                                        </div>
                                    <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block mx-auto">
                                        Iniciar sesión
                                        </button>
                                        <br>
                                        <p class="message mx-auto text-center">¿No tienes una cuenta? <a href="register">Registrar cuenta</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    <!-- Section: Design Block -->
</body>
</html>