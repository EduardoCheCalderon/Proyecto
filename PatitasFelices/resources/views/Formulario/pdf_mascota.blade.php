<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF MASCOTA</title>

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
                            <th scope="col-2">Nombre</th>
                            <th scope="col-2">Especie</th>
                            <th scope="col-2">Raza</th>
                            <th scope="col-2">Edad</th>
                            <th scope="col-2">Fecha de Nacimiento</th>
                            <th scope="col-2">Observaciones</th>
                            <th scope="col-2">Foto</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($mascotas as $mascota)
                            <tr>
                                <td class="text-center"> {{$mascota->nombre}} </td>
                                <td class="text-center"> {{$mascota->id_especie}} </td>
                                <td class="text-center"> {{$mascota->id_raza}} </td>
                                <td class="text-center"> {{$mascota->edad}} </td>
                                <td class="text-center"> {{$mascota->fecha_nacimiento}} </td>
                                <td class="text-center"> {{$mascota->observaciones}} </td>
                                <td class="text-center"> 
                                    @if($mascota->foto)
                                    <img class="img-thumbnail" src="{{asset('storage/images/mascotas/'.$mascota->foto);}} " alt="">
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>