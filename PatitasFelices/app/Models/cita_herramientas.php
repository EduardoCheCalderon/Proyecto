<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita_herramientas extends Model
{
    use HasFactory;

    public function cita(){
        return $this->belongsTo(cita::class, 'id_cita', 'id');
    }

    public function herramientas(){
        return $this->belongsTo(herramientas::class, 'id_herramienta', 'id');
    }
}
