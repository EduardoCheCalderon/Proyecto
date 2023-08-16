@extends('layout/template')

@section('title', 'Editar cita')

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
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1 class="section-title position-relative text-center mb-5">Editar cita</h1>
            <!-- Button trigger modal -->
        </div>
    </div>

    <div class="modal-body container col-10">
        <form action="{{url('Citas/'.$citas->id)}}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            
            <div class="mb-3">
                <label for="mascota" class="form-label">Mascota</label>
                <div class="col-sm-5">
                    <select name="mascota" id="mascota" class="form-select" required>
                        <option value="">Seleccione su mascota</option>
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
                        <option value=""></option>
                    @foreach ($servicios as $servicio)
                        <option value="{{ $servicio->id }}" @if ($servicio->id == $mascota->id_servicio) {{'selected'}} @endif >
                            {{$servicio->nombre}}
                        </option> 
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
                <label for="formGroupExampleInput" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Seleccione una fecha para la cita" value="{{ $citas->fecha }}" required>
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Hora</label>
                <input type="yime" class="form-control" id="hora" name="hora" placeholder="Seleccione una hora para la cita" value="{{ $citas->hora }}" >
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Comentarios</label>
                <input type="text" class="form-control" id="comentarios" name="comentarios" placeholder="Comentarios sobre la cita" value="{{ $citas->comentarios }}" >
            </div>

            <a href="{{url ('Citas')}}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>

    <script type="text/javascript">
        var selectorServicio = document.getElementById('servicio');
        var herramientaSelector = document.getElementById('herramienta');
        // Cuando cambie la especie, buscamos las razas de esta
        selectorServicio.addEventListener('change', selectServicioChanged);

        function selectServicioChanged(evt) { 
            // console.log('razas/' + selectorEspecie.value);
            // console.log('razas de la especie: ' + selectorEspecie.value);
            
            fetch('/herramienta/' + selectorServicio.value)
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