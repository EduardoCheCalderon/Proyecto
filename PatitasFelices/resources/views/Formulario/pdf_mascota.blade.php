<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style> *{font-family: 'Josefin Sans', sans-serif; font-family: 'Preahvihear', sans-serif; font-family: 'Varela Round', sans-serif;} thead{ background-color: grey; } td, th{padding: 5px 10px; border:  1px solid grey;} .table{border-collapse: collapse;} </style>

    <title>PDF MASCOTA</title>
</head>
<body>
    <div class="container-flud">
        <div class="row">
            <div class="col-1"> </div>
            <div class="table-alum col-10" >
                <table class="table table-hover table-striped table-responsive border m-2">
                    <thead class="table table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Especie</th>
                            <th scope="col">Raza</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Observaciones</th>
                            <th scope="col">Foto</th>
                          </tr>
                    </thead>
    
                    <tbody>
                        <tr>
                            @foreach($mascotas as $mascota)
                                <td class="text-center"> {{$mascota->id}} </td>
                                <td class="text-center"> {{$mascota->nombre}} </td>
                                <td class="text-center"> {{$mascota->id_especie}} </td>
                                <td class="text-center"> {{$mascota->id_raza}} </td>
                                <td class="text-center"> {{$mascota->edad}} </td>
                                <td class="text-center"> {{$mascota->fecha_nacimiento}} </td>
                                <td class="text-center"> {{$mascota->observaciones}} </td>
                                <td class="text-center"> {{$mascota->foto}} </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>