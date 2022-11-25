<?php

use App\Http\Controllers\DeporteController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\TiposPersonaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('tipos', TipoController::class);

Route::resource('deportes', DeporteController::class);

Route::resource('tipospersonas', TiposPersonaController::class);

Route::resource('marcas', MarcaController::class);

Route::resource('productos', ProductoController::class);


require __DIR__.'/auth.php';
