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
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre de su mascota" value="{{old ('nombre')}}" required>
                </div>

                <div class="mb-3">
                    <label for="especie" class="form-label">Especie</label>
                    <div class="col-sm-5">
                        <select name="especie" id="especie" class="form-select" required>
                            <option value="0">Seleccione la especie</option>
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
                            <option value="">Seleccione la raza de su mascota</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" placeholder="Ingrese la edad de la mascota" value="{{old ('edad')}}" required>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Ingrese la fecha de nacimiento de su mascota" value="{{old ('fecha')}}" >
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Observaciones</label>
                    <input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="observaciones sobre la mascota" value="{{old ('observaciones')}}" >
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Imagen</label>
                    <input type="photo" class="form-control" id="foto" name="foto" placeholder="Foto de la mascota" value="{{old ('foto')}}" >
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
                            <td class="text-center"><a href="" class="btn btn-small btn-warning"><i class="bi bi-pen-fill"></i></a></td>

                            <td>
                                <form action="{{url('Mascotas' .$mascota->id)}}" method="POST"> 
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