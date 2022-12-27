<?php

use App\Http\Controllers\DeporteController;
use App\Http\Controllers\LineaCarritoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\TiposPersonaController;
use App\Models\LineaCarrito;
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

Route::get('/productos/comprador', [ProductoController::class, 'indexcomprador'])
->name('productos.comprador');

Route::get('/productos/comprador/{producto}', [ProductoController::class, 'showcomprador'])
->name('productos.showcomprador');

Route::resource('lineaCarritos', LineaCarritoController::class);

Route::post('/lineaCarritos/meter/{producto}', [LineaCarritoController::class, 'meter'])
->name('lineaCarrito.meter');


Route::resource('productos', ProductoController::class);


require __DIR__.'/auth.php';
