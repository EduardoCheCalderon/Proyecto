<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class razas extends Model
{
    public function especie(){
        return $this->belongsTo(especies::class, 'id_especies', 'id');
    }
}
