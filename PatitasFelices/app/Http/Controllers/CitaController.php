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

        $cita = cita::all();
        $mascota = mascotas::all();
        $servicio = servicios::all();
        $herramienta = herramientas::all();

        return view('Formulario.Cita',[
            'citas' => $cita,
            'mascotas' => $mascota,
            'servicios' => $servicio,
            'herramientas' => $herramienta
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
        $rules = [
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ];

        $customMessages = [
            'hora.date_format' => 'El formato de hora es inválido.',
        ];

        $this->validate($request, $rules, $customMessages);

        // Validación adicional para horarios
        $horaInicio = '08:00';
        $horaFin = '17:00';

        if (date('w', strtotime($request->fecha)) == 6) { // Sábado
            $horaInicio = '10:00';
            $horaFin = '15:00';
        }

        if ($request->hora < $horaInicio || $request->hora > $horaFin) {
            return redirect()->back()->withErrors(['hora' => 'La hora seleccionada no está dentro del horario permitido.']);
        }

        $request -> validate([
            'mascota'=>'required',
            'servicio' => 'required',
            'herramienta' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'comentarios' => 'nullable'
        ]);

        $citas = new cita();
        $citas -> id_mascota = $request -> input('mascota');
        $citas -> id_servicio = $request -> input('servicio');
        $citas -> id_herramienta = $request -> input('herramienta');
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
        $citas = cita::find($id);
        return view('Edit.citaEdit', ['citas' => $citas, 'mascotas' => mascotas::all(), 'servicios' => servicios::all(), 'herramientas' => herramientas::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            'mascota'=>'required',
            'servicio' => 'required',
            'herramienta' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'comentarios' => 'nullable'
        ]);

        $citas = cita::find($id);
        $citas -> id_mascota = $request -> input('mascota');
        $citas -> id_servicio = $request -> input('servicio');
        $citas -> id_herramienta = $request -> input('herramienta');
        $citas -> fecha = $request -> input('fecha');
        $citas -> hora = $request -> input('hora');
        $citas -> comentarios = $request -> input('comentarios');

        $citas -> saveOrFail();

        return redirect()->action([CitaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $citas=cita::find($id);
            
            $citas->delete(); 
    
            return redirect('Citas');
        }
    }
}
