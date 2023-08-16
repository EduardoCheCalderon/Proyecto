<?php

namespace App\Http\Controllers;

use App\Models\herramientas;
use Illuminate\Http\Request;

class HerramientasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id_servicio)
    {
        $herramienta_servicio = herramientas::where('id_servicio', $id_servicio)->get();

        return response()->json($herramienta_servicio);
    }
}
