<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class herramientas extends Model
{
    public function servicios(){
        return $this->belongsTo(servicios::class, 'id_servicio', 'id');
    }
}
