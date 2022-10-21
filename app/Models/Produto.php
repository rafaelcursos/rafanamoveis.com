<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $casts = [
        'cor' => 'array',
        'tecido' => 'array',
        'tamanho' => 'array'
    ];

    public function corprodutos(){
        return $this->belongsToMany(CorProduto::class);
    }

    public function tecidos(){
        return $this->belongsToMany(Tecido::class);
    }

    public function tamanhos(){
        return $this->belongsToMany(Tamanho::class);
    }
}
