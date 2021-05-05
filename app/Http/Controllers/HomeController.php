<?php

namespace App\Http\Controllers;
use App\Models\Trabajo;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $trabajos = Trabajo::where('estado', '1')->latest('id')->get()->take(12);

        return view('welcome', compact('trabajos'));
    }
}
