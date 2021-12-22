<?php

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
    return view('IniciarSesion');
});

Route::get('/mi-perfil', function () {
    return view('MiPerfil');
});


Route::get('/register', function () {
    return view('CrearUsuario');
});



Route::get('/getRutines', function(){
    return view('getRutines');
});
