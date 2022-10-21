<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corproduto extends Model
{
    use HasFactory;

    public function produtos(){
        return $this->belongsToMany(Produto::class);
    }
}
