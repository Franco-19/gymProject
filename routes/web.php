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
Route::get('/Profesores', function () {
    return view('Profesores');
});
Route::get('/CrearRutina', function () {
    return view('CrearRutina');
});
Route::get('/CrearUsuario', function () {
    return view('CrearUsuario');
});
Route::get('/IniciarSesion', function () {
    return view('IniciarSesion');
});
Route::get('/MiPerfil', function () {
    return view('MiPerfil');
});
Route::get('/MisRutinas', function () {
    return view('MisRutinas');
});
Route::get('/Contacto', function () {
    return view('Contacto');
});
////
Route::get('/contacto2', function () {
    return view('contacto2');
});
Route::get('/Calendario', function () {
    return view('Calendario');
});
Route::get('/entrenadores', function () {
    return view('entrenadores');
});
Route::get('/entrenamiento', function () {
    return view('entrenamiento');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/perfil', function () {
    return view('perfil');
});
Route::get('/registro', function () {
    return view('registro');
});
Route::get('/rutinaPersonalizada', function () {
    return view('rutinaPersonalizada');
});
Route::get('/rutinaPrincipiante', function () {
    return view('rutinaPrincipiante');
});
