<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $guarded = ['id', 'estado'];
    use HasFactory;

    const ACEPTADO = 1;
    const RECHAZADO = 2;

    //relacion uno a muchos
    public function categoria()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function puesto()
    {
        return $this->belongsTo('App\Models\Puesto');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }

    public function monto()
    {
        return $this->belongsTo('App\Models\Monto');
    }

    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }

    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento');
    }

    public function provincia()
    {
        return $this->belongsTo('App\Models\Provincia');
    }

    public function distrito()
    {
        return $this->belongsTo('App\Models\Distrito');
    }

    public function ubigeo()
    {
        return $this->belongsTo('App\Models\Ubigeo');
    }

    //relacion inversa uno a muchos

    public function capacitacion()
    {
        $this->belongsTo('App\Models\Capacitacion');
    }

    public function datomedico()
    {
        $this->belongsTo('App\Models\Datomedico');
    }
}
