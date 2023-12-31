@extends('layout/template')

@section('title', 'Editar Mascota')

@section('header')
    
@endsection

@section('Navbar')
    
@endsection

@section('Contenido')
<div style="text-align: center">
    <h1>Lista de Mascotas</h1>
    <!-- Button trigger modal -->
  
    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Agregar
    </button>
    <a class="btn btn-success mb-5" target="_blank" href="{{url('pdf_mascota')}}">Reporte</a>
</div>

<form action="{{url('Mascotas/' .$mascota->id ) }}" method="POST">
    @method("PUT")
    @csrf
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Mascota</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre de su mascota" value="{{'$mascota->nombre')}}" required>
                </div>

                <div class="mb-3">
                    <label for="especie" class="form-label">Especie</label>
                    <div class="col-sm-5">
                        <select name="especie" id="especie" class="form-select" value="{{'$mascota->especie')}}" required>
                            <option value="">Seleccione la especie</option>
                        @foreach ($especies as $especie)
                            <option value="{{ $especie->id }} @if ($especie->id == $mascota->id_especie) {{'selected'}} @endif {{ $especie->id }}">{{$especie->nombre}}</option> 
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="raza" class="form-label">Raza</label>
                    <div class="col-sm-5">
                        <select name="raza" id="raza" class="form-select" value="{{'$mascota->raza')}}" required>
                            <option value="{{ $especie->id }} @if ($raza->id == $mascota->id_raza) {{'selected'}} @endif ">Seleccione la raza de su mascota</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" placeholder="Ingrese la edad de la mascota" value="{{'$mascota->edad')}}" required>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Ingrese la fecha de nacimiento de su mascota" value="{{'$mascota->fecha_nacimiento')}}" >
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Observaciones</label>
                    <input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="observaciones sobre la mascota" value="{{'$mascota->observaciones')}}" >
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Imagen</label>
                    <input type="file" class="form-control" id="foto" name="foto" accept="image/*" placeholder="Foto de la mascota" value="{{'$mascota->foto')}}" >
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
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
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Especie</th>
                        <th scope="col">Raza</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Observaciones</th>
                        <th scope="col">Foto</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($mascotas as $mascota)
                        <tr>
                            <td class="text-center"> {{$mascota->id}} </td>
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
                            <td class="text-center">
                                <a href="{{ url('mascotas'.$mascota->id.'/Mascota_edit') }}" class="btn btn-small btn-warning"><i class="bi bi-pen-fill"></i></a>
                            </td>
                            <td>
                                <form action="{{url('Mascotas' .$mascota->id)}}" method="POST"> 
                                    <button class="btn btn small btn-danger" onclick="deleteConf(event)"><i class="bi bi-trash-fill"></i></button>
                                   @method('DELETE')
                                   @csrf
                               </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

<script type="text/javascript">
    var selectorEspecie = document.getElementById('especie');
    var razaSelector = document.getElementById('raza');
    // Cuando cambie la especie, buscamos las razas de esta
    selectorEspecie.addEventListener('change', selectEspecieChanged);

    function selectEspecieChanged(evt) { 
        // console.log('razas/' + selectorEspecie.value);
        // console.log('razas de la especie: ' + selectorEspecie.value);
        
        fetch('razas/' + selectorEspecie.value)
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