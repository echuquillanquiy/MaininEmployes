<?php

use App\Http\Controllers\TrabajoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('trabajos', [TrabajoController::class, 'index'])->name('trabajos.index');

Route::get('trabajos/{trabajo}', [TrabajoController::class, 'show'])->name('trabajos.show');

Route::post('trabajos/{trabajo}/postulado', [TrabajoController::class, 'postulado'])->middleware('auth')->name('trabajos.postulado');