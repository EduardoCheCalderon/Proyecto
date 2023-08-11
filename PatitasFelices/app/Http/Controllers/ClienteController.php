<?php

namespace App\Http\Controllers;

use App\Models\clientes;    
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = clientes::all();

        return view('Formulario.Cliente', ['cliente' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Formulario.Cliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => 'required|max:50',
            'apellido_p' => 'nullable|max:50',
            'apellido_m' => 'nullable|max:50',
            'telefono' => 'required',
            'correo' => 'required',
        ]);

        $clientes = new clientes();
        $clientes -> nombre = $request -> input('nombre');
        $clientes -> apellido_p = $request -> input('apellido_p');
        $clientes -> apellido_m = $request -> input('apellido_m');
        $clientes -> telefono = $request -> input('telefono');
        $clientes -> correo = $request -> input('correo');

        // return response()->json($clientes);

        $clientes -> saveOrFail();

        return redirect('Cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(clientes $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, clientes $clientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $clientes=clientes::find($id);
            
            $clientes->delete(); 
    
            return redirect('Cliente');
        }
    }
}
