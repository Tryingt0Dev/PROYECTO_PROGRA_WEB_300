<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propuesta extends Model
{
    use HasFactory;
    public function estudiantes(){
        return $this->belongsTo(estudiante::class);
    }
}
