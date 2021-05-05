<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function colaboradors()
    {
        return $this->hasMany('App\Models\Colaborador');
    }
}
