<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    use HasFactory;

    public function propuestas(){
        return $this->hasMany(propuesta::class,estudiante_rut,rut);
    }
    
    
}
