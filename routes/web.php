<?php

use App\Http\Controllers\PessoaController;
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

Route::get('/dados', [PessoaController::class, 'index'])->name('dados');
Route::get('/entidades-contratadas', [PessoaController::class, 'entidades'])->name('entidades');
Route::get('/contrato', [PessoaController::class, 'contrato'])->name('contrato');
Route::get('/art-sucess', [PessoaController::class, 'art_success'])->name('art');


Route::get('/dashboard', function () {
    return view('dash');
});



