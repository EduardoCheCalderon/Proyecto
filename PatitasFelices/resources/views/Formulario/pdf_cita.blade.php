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
                            <th scope="col">ID</th>
                            <th scope="col">Mascota</th>
                            <th scope="col">Servicios</th>
                            <th scope="col">Herramientas</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Comentarios</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            @foreach($citas as $cita)
                                <td class="text-center"> {{$cita->id}} </td>
                                <td class="text-center"> {{$cita->id_mascota}} </td>
                                <td class="text-center"> {{$cita->id_servicios}} </td>
                                <td class="text-center"> {{$cita}} </td>
                                <td class="text-center"> {{$cita->fecha}} </td>
                                <td class="text-center"> {{$cita->hora}} </td>
                                <td class="text-center"> {{$cita->edad}} </td>
                                <td class="text-center"> {{$cita->comentarios}} </td>
                                <td class="text-center"><a href="" class="btn btn-small btn-warning"><i class="bi bi-pen-fill"></i></a></td>

                                <td>
                                    <form action="{{url('Citas' .$cita->id)}}" method="POST"> 
                                        <button class="btn btn small btn-danger" onclick="deleteConf(event)"><i class="bi bi-trash-fill"></i></button>
                                    @method('DELETE')
                                    @csrf
                                </form>
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>