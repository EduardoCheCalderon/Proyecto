<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF CITA</title>

    <style> *{font-family: 'Josefin Sans', sans-serif; font-family: 'Preahvihear', sans-serif; font-family: 'Varela Round', sans-serif;} thead{ background-color: grey; } td, th{padding: 5px 10px; border:  1px solid grey;} .table{border-collapse: collapse;} </style>
</head>
<body>
    <div class="container-flud">
        <div class="row">
            <div class="col-1"> </div>
            <div class="table-alum col-10" >
                <table class="table table-hover table-striped table-responsive border m-2">
                    <thead class="table table-dark">
                        <tr>
                            <th scope="col">Mascota</th>
                            <th scope="col">Servicios</th>
                            <th scope="col">Herramientas</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Comentarios</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($citas as $cita)
                            <tr>
                                <td class="text-center"> {{$cita->id_mascota}} </td>
                                <td class="text-center"> {{$cita->id_servicio}} </td>
                                <td class="text-center"> {{$cita->id_herramienta}} </td>
                                <td class="text-center"> {{$cita->fecha}} </td>
                                <td class="text-center"> {{$cita->hora}} </td>
                                <td class="text-center"> {{$cita->comentarios}} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>