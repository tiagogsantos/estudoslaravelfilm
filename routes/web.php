<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AtoresController;

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

// Retorna um ator por um id
Route::get('atores/show/{id}', [AtoresController::class, 'show'])->name('atores.show');

// Retorno de atores populares
Route::get('atores/index', [AtoresController::class, 'index'])->name('atores.index');

// Retorno de filme por id
Route::get('filmes/show/{id}', [DashboardController::class, 'show'])->name('filmes.show');

// Página de Index
Route::get('/', [DashboardController::class, 'index'])->name('index');
