<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/venta_productos', function () {
    return view("venta_productos");
});

Route::get('/camaras', function () {
    return view("camaras");
});

Route::get('/envioscliente', function () {
    return view("EnviosCliente_dashboard");
});

Route::get('/login',function(){
    return view("login");
});
Route::get('/registro',function(){
    return view("registro");
});
Route::get('/recuperarContraseña',function(){
    return view("recuperar_contraseña");
});
Route::get('/recuperarContraseña2',function(){
    return view("recuperar_contraseña-paso2");
});
Route::get('/recuperarContraseña3',function(){
    return view("recuperar_contraseña-paso3");
});