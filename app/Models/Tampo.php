<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tampo extends Model
{
    use HasFactory;

    public function tamanhos(){
        return $this->belongsToMany(Tamanho::class);
    }

    public function cores(){
        return $this->belongsToMany(Cor::class);
    }
}
