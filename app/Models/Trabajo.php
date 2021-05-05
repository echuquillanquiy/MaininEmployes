<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $guarded = ['id', 'estado'];
    protected $withCount = ['postulantes'];

    use HasFactory;

    const PUBLICADO = 1;
    const PROCESO = 2;
    const TERMINADO = 3;

    public function scopeTipo($query, $tipo_id)
    {
        if ($tipo_id){
            return $query->where('tipo_id', $tipo_id);
        }
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function tipo()
    {
        return $this->belongsTo('App\Models\Tipo') ;
    }

    public function postulantes()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function requerimientos()
    {
        return $this->hasMany('App\Models\Requerimiento');
    }
}
