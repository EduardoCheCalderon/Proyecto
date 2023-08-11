<?php

namespace App\Http\Controllers;

use App\Models\cita;
use App\Models\herramientas;
use App\Models\mascotas;
use App\Models\servicios;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Formulario/Cita',[
            'cita' => cita::all(),
            'mascotas' => mascotas::all(),
            'servicios' => servicios::all(),
            'herramientas' => herramientas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

        $cita = new cita();
        $cita -> id_mascota = $request -> input('mascota');
        $cita -> fecha = $request -> input('fecha');
        $cita -> hora = $request -> input('hora');
        $cita -> comentarios = $request -> input('comentarios');
        $cita -> save();

        return redirect('Formulario.Cita');
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
    public function edit(cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cita $cita)
    {
        //
    }
}
