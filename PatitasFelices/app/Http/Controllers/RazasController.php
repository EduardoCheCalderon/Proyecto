<?php

namespace App\Http\Controllers;

use App\Models\razas;
use Illuminate\Http\Request;

class RazasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id_especie)
    {
        $razas_especie = razas::where('id_especie', $id_especie)->get();

        return response()->json($razas_especie);
    }
}
