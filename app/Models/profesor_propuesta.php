<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor_propuesta extends Model
{
    use HasFactory;
    public function propuestas(){
        return $this->belongsTo(propuesta::class);
    }
    public function profesores():BelongsToMany{
        return $this->belongsToMany(profesor::class);
    }
}
