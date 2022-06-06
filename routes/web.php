<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MarcasController;

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

Route::get('marcas/edit/{id}', [MarcasController::class, 'edit'])->name('marcas.edit');

Route::post('marcas/store', [MarcasController::class, 'store'])->name('marcas.store');
Route::get('marcas/carros', [MarcasController::class, 'create'])->name('marcas.create');
Route::get('marcas/index', [MarcasController::class, 'index'])->name('marcas.index');

/* Metodos de Dashboard */

Route::get('filmes/show/{id}', [DashboardController::class, 'show'])->name('filmes.show');

// Página de Index
Route::get('/', [DashboardController::class, 'index'])->name('index');
