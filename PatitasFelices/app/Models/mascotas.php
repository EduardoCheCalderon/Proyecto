<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mascotas extends Model
{
    use HasFactory;
    public function clientes(){
        return $this->belongsTo(clientes::class, 'id_cliente', 'id');
    }
    public function especies(){
        return $this->belongsTo(especies::class, 'id_especie', 'id');
    }
    public function razas(){
        return $this->belongsTo(razas::class, 'id_raza', 'id');
    }
}
