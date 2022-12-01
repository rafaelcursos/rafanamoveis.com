<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{
    use HasFactory;

    public function cadeiras(){
        return $this->belongsToMany(Cadeira::class);
    }

    public function bases(){
        return $this->belongsToMany(Base::class);
    }

    public function tampos(){
        return $this->belongsToMany(Tampo::class);
    }
}
