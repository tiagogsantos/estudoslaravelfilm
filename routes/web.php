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

// Retorno de atores populares



// Retorno de filme por id
Route::get('filmes/show/{id}', [DashboardController::class, 'show'])->name('filmes.show');

// Página de Index
Route::get('/', [DashboardController::class, 'index'])->name('index');
