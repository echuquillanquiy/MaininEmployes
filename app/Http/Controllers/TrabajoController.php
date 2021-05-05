<?php

namespace App\Http\Controllers;

use App\Models\Trabajo;
use Illuminate\Http\Request;

class TrabajoController extends Controller
{
    public function index()
    {
        return view('trabajos.index');
    }

    public function show(Trabajo $trabajo)
    {
        $similares = Trabajo::where('tipo_id', $trabajo->tipo_id)
            ->where('id', '!=', $trabajo->id)
            ->where('estado', 1)
            ->latest('id')
            ->take(4)
            ->get();

        return view('trabajos.show', compact('trabajo', 'similares'));
    }

    public function postulado(Trabajo $trabajo)
    {
        $trabajo->postulantes()->attach(auth()->user()->id);

        return back();
    }
}
