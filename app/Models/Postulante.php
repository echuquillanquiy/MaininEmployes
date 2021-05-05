<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function trabajos()
    {
        return $this->belongsToMany('App\Models\Trabajo');
    }

}
