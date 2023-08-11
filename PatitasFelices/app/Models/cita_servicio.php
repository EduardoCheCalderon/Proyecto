<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita_servicio extends Model
{
    use HasFactory;
    public function cita(){
        return $this->belongsTo(cita::class, 'id_cita', 'id');
    }

    public function servicios(){
        return $this->belongsTo(servicios::class, 'id_servicio', 'id');
    }
}
