<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\EntrevistadorTrabajos;

Route::redirect('', 'entrevistador/trabajos');

Route::get('trabajos', EntrevistadorTrabajos::class)->name('trabajos.index');
