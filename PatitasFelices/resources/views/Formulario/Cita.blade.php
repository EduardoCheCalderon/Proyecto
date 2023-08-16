@extends('layout/template')

@section('title', 'Citas')

@section('header')
    <style type="text/css">
        .img-thumbnail{
            width: auto; 
            height: 64px;
        }
    </style>
@endsection

@section('Navbar')
    
@endsection

@section('Contenido')
    <div style="text-align: center">
        <h1>Agendar Cita</h1>
        <!-- Button trigger modal -->
    
        <script src="{{ asset('js/agenda-citas.js') }}"></script>

        <style>
            input[type="time"] {
                appearance: none;
                -webkit-appearance: none;
                padding: 5px;
                border: 1px solid #ccc;
            }

            input[type="time"]::-webkit-datetime-edit-hour-field:focus,
            input[type="time"]::-webkit-datetime-edit-minute-field:focus {
                outline: none;
                border-color: #007bff;
            }
        </style>

        <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar
        </button>
        <a class="btn btn-success mb-5" target="_blank" href="{{url('pdf_cita')}}">Reporte</a>
    </div>  

    <form action="{{url('/Citas')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agendar Cita</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="mascota" class="form-label">Mascota</label>
                        <div class="col-sm-5">
                            <select name="mascota" id="mascota" class="form-select" required>
                                <option value="0">Mascotas</option>
                            @foreach ($mascotas as $mascota)
                                <option value="{{$mascota->id}}">{{$mascota->nombre}}</option> 
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="servicio" class="form-label">Servicio</label>
                        <div class="col-sm-5">
                            <select name="servicio" id="servicio" class="form-select" required>
                                <option value="0">Seleccione su servicio</option>
                            @foreach ($servicios as $servicio)
                                <option value="{{$servicio->id}}">{{$servicio->nombre}}</option> 
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="herramienta" class="form-label">Herramientas</label>
                        <div class="col-sm-5">
                            <select name="herramienta" id="herramienta" class="form-select" required>
                                <option value="">Seleccione las herramientas deseadas</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Seleccione una fecha para la cita" value="{{old ('fecha')}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Hora</label>
                        <input type="time" class="form-control" id="hora" name="hora" placeholder="Seleccione una hora para la cita" value="{{old ('hora')}}" >
                    </div>

                    <div class="mb-3">
                        <label for="hora" class="form-label">Comentarios</label>
                        <input type="text" class="form-control" id="comentarios" name="comentarios" placeholder="Comentarios sobre la cita" value="{{old ('comenttarios')}}" >
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
            </div>
        </div>
    </form>
    <!--Tabla-->
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
                            <th scope="col"></th>
                            <th scope="col"></th>
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
                                
                                <td class="text-center">
                                    <a href="{{ url('Citas/'.$cita->id.'/Edit.citaEdit') }}" class="btn btn-small btn-warning">Editar</a>
                                </td>

                                <td>
                                    <form action="{{url('Citas' .$cita->id)}}" method="POST"> 
                                        <button class="btn btn small btn-danger" onclick="deleteConf(event)"><i class="bi bi-trash-fill"></i></button>
                                    @method('DELETE')
                                    @csrf
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var selectorServicio = document.getElementById('servicio');
        var herramientaSelector = document.getElementById('herramienta');
        // Cuando cambie la especie, buscamos las razas de esta
        selectorServicio.addEventListener('change', selectServicioChanged);

        function selectServicioChanged(evt) { 
            // console.log('razas/' + selectorEspecie.value);
            // console.log('razas de la especie: ' + selectorEspecie.value);
            
            fetch('herramienta/' + selectorServicio.value)
                .then(function(response) {
                    // Cuando la petición de razas fue exitosa

                    response.json()
                    .then(function(data) {
                        // Convertimos a JSON la respuesta

                        herramientaSelector.setHTML('<option value="" selected="true">Seleccione la herramienta</option>');
                        // console.log(data);
                        data.forEach(herramienta => {
                            herramientaSelector.setHTML( 
                                herramientaSelector.innerHTML 
                                + '<option value="'+ herramienta.id +'">'+herramienta.nombre+'</option>'
                            )
                        });
                    })
                    .catch(function() {
                        // Cuando ocurrió un error en la conversión a JSON
                        console.log('Fallo');
                        herramientaSelector.setHTML('');
                    })
                })
                .catch(function() {
                    // Cuando ocurrió un error en la petición
                    console.log('Fallo');
                    herramientaSelector.setHTML('');
                });
        }
    </script>
@endsection

@section('Footer')
    
@endsection