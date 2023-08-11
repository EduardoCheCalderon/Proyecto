<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\especies;
use App\Models\razas;
use App\Models\mascotas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $mascotas = mascotas::all();
        $razas = razas::all();
        $especies = especies::all();

        return view('Formulario.Mascota', [
            'mascotas' => $mascotas,
            'razas' => $razas,
            'especies' => $especies,
        ]);
    }

    public function Pdf()
    {
        $mascotas = mascotas::all();
        
        $Pdf = App::make('dompdf.wrapper');
        $Pdf->loadView('Formulario.pdf_mascota', ['mascotas' => $mascotas]);
        return $Pdf->stream();
    }

     public function create()
     {
        return view('Formulario.Mascota');
     }

    public function store(Request $request)
    {
        
        $request -> validate([
            'nombre'=>'required|max:25',
            'especie'=>'required',
            'raza'=>'required',
            'edad'=>'required',
            'fecha_nacimiento'=>'nullable',
            'observaciones'=>'nullable|max:255',
            'foto'=>'nullable'
        ]);
        
        $path = '';
        
        if ($request->hasFile('foto'))
        {
            $destination_path = 'public/images/mascotas';
            $image = $request->file('foto');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto')->storeAs($destination_path, $image_name);

            $input['foto'] = $image_name;
        }
        // if ($request->file('foto')){
        //     $path = Storage::putFile('public/foto', $request->file('foto'));
            
        // }
        
        $mascotas = new mascotas();
        $mascotas -> nombre = $request -> input('nombre');
        $mascotas -> id_especie = $request -> input('especie');
        $mascotas -> id_raza = $request -> input('raza');
        $mascotas -> edad = $request -> input('edad');
        $mascotas -> fecha_nacimiento = $request -> input('fecha_nacimiento');
        $mascotas -> observaciones = $request -> input('observaciones');
        $mascotas -> foto = $path;

        $mascotas -> saveOrFail();
        
        return redirect()->action([MascotaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(mascotas $mascotas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mascotas = mascotas::find($id);
        return view('Edit.mascotaEdit',['']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mascotas $mascotas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $mascotas=mascotas::find($id);
            
            $mascotas->delete(); 
    
            return redirect('Mascotas');
        }
    }
}
