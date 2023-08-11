<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente_mascota extends Model
{
    use HasFactory;
    public function clientes(){
        return $this->belongsTo(clientes::class, 'id_cliente', 'id');
    }
    public function mascotas(){
        return $this->belongsTo(mascotas::class, 'id_mascota', 'id');
    }
}
