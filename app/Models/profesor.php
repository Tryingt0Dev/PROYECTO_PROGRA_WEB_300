<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    use HasFactory;
    public function profesor_propuestas(){
        return $this->hasMany(profesor_propuesta::class);
    }
}
