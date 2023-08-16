<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    use HasFactory;

    public function servicios() {
        return $this->hasMany('App\Models\servicios');
    }

    public function herramientas() {
        return $this->hasMany('App\Models\herramientas');
    }
}
