@extends('layout/template')

@section('title', 'Mascotas')

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
        <h1>Editar mascota</h1>
        <!-- Button trigger modal -->
    </div>

    <div class="modal-body container col-10">
        <form action="{{url('Mascotas/'.$mascotas->id)}}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre de su mascota" value="{{ $mascotas->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="especie" class="form-label">Especie</label>
                <div class="col-sm-5">
                    <select name="especie" id="especie" class="form-select" required>
                        <option value="">Seleccione la especie</option>
                        {{-- {{ dd($clientes) }} --}}
                    @foreach ($especies as $especie)
                        <option value="{{$especie->id}}">{{$especie->nombre}}</option> 
                    @endforeach
                    </select>
                    {{-- <select name="especie" id="especie" class="form-select" required>
                        <option value="">Seleccione la especie de su mascota</option>
                    </select> --}}
                </div>
            </div>

            <div class="mb-3">
                <label for="raza" class="form-label">Raza</label>
                <div class="col-sm-5">
                    <select name="raza" id="raza" class="form-select" required>
                        <option value="">Seleccione la raza</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" placeholder="Ingrese la edad de la mascota" value="{{ $mascotas->edad }}" required>
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Ingrese la fecha de nacimiento de su mascota" value="{{ $mascotas->fecha_nacimiento }}" >
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Observaciones</label>
                <input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="observaciones sobre la mascota" value="{{ $mascotas->observaciones }}" >
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*" placeholder="Foto de la mascota" value="{{ $mascotas->foto }}" >
            </div>

            <a href="{{url ('Mascotas')}}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>

        </form>
    </div>

    <script type="text/javascript">
        var selectorEspecie = document.getElementById('especie');
        var razaSelector = document.getElementById('raza');
        // Cuando cambie la especie, buscamos las razas de esta
        selectorEspecie.addEventListener('change', selectEspecieChanged);

        function selectEspecieChanged(evt) { 
            // console.log('razas/' + selectorEspecie.value);
            // console.log('razas de la especie: ' + selectorEspecie.value);
            
            fetch('/razas/' + selectorEspecie.value)
                .then(function(response) {
                    // Cuando la petición de razas fue exitosa

                    response.json()
                    .then(function(data) {
                        // Convertimos a JSON la respuesta

                        razaSelector.setHTML('<option value="" selected="true">Seleccione la raza</option>');
                        // console.log(data);
                        data.forEach(raza => {
                            razaSelector.setHTML( 
                                razaSelector.innerHTML 
                                + '<option value="'+ raza.id +'">'+raza.nombre+'</option>'
                            )
                        });
                    })
                    .catch(function() {
                        // Cuando ocurrió un error en la conversión a JSON
                        console.log('Fallo');
                        razaSelector.setHTML('');
                    })
                })
                .catch(function() {
                    // Cuando ocurrió un error en la petición
                    console.log('Fallo');
                    razaSelector.setHTML('');
                });
        }
    </script>
@endsection

@section('Footer')
    
@endsection