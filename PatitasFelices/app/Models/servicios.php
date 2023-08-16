<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
    protected $table = 'servicios';

    public function herramientas(){
        return $this->belongsTo(herramientas::class, 'id_herramienta');
    }
}
