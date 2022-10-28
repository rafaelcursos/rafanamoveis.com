<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tampo extends Model
{
    use HasFactory;

    protected $casts = [
        'base' => 'array'
    ];

    public function bases(){
        return $this->belongsToMany('App\Models\Base');
    }
}
