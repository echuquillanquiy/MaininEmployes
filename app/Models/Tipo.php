<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function trabajos()
    {
        return $this->hasMany('App\Models\Trabajo');
    }
}
