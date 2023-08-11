<?php

namespace App\Http\Controllers;

use App\Models\cita;
use App\Models\herramientas;
use App\Models\mascotas;
use App\Models\servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $citas = cita::all();
        $mascotas = mascotas::all();
        $servicios = servicios::all();
        $herramientas = herramientas::all();

        return view('Formulario.Cita',[
            'citas' => $citas,
            'mascotas' => $mascotas,
            'servicios' => $servicios,
            'herramientas' => $herramientas
        ]);
    }

    public function Pdf()
    {
        $citas = cita::all();
        
        $Pdf = App::make('dompdf.wrapper');
        $Pdf->loadView('Formulario.pdf_cita', ['citas' => $citas]);
        return $Pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Formulario.Cita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'mascota'=>'required',
            'servicios' => 'required',
            'herramientas' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'comentarios' => 'nullable'
        ]);

        $citas = new cita();
        $citas -> id_mascota = $request -> input('mascota');
        $citas -> id_servicio = $request -> input('servicios');
        $citas -> id_herramienta = $request -> input('herramientas');
        $citas -> fecha = $request -> input('fecha');
        $citas -> hora = $request -> input('hora');
        $citas -> comentarios = $request -> input('comentarios');

        $citas -> saveOrFail();

        return redirect()->action([CitaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cita = cita::find($id);
        return view('Edit.citaEdit',[
            'cita' => $cita,
            'mascotas' => mascotas::all(),
            'servicios' => servicios::all(),
            'herramientas' => herramientas::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            'mascota'=>'required',
            'servicios' => 'required',
            'herramientas' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'comentarios' => 'nullable'
        ]);

        $citas =  cita::find($id);
        $citas -> id_mascota = $request -> input('mascota');
        $citas -> fecha = $request -> input('fecha');
        $citas -> hora = $request -> input('hora');
        $citas -> comentarios = $request -> input('comentarios');

        $citas -> saveOrFail();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $cita=cita::find($id);
            
            $cita->delete(); 
    
            return redirect('Cita');
        }
    }
}
