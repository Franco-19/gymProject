<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/getRutines', function(){
    return view('getRutines');
});

Route::get('/usuarios', [UsuariosController::class 'index']);

Route::get('/usuarios/create', [UsuariosController::class 'create']);

Route::post('/usuarios', [UsuariosController::class 'store']);

Route::get('/usuarios/{id}', [UsuariosController::class 'show']);

Route::delete('/clientes', [UsuariosController::class 'destroy']);