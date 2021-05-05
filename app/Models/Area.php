<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function colaboradors()
    {
        return $this->hasMany('App\Models\Colaborador');
    }
}
