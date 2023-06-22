<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
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

<<<<<<< HEAD
Route::get('/Index', function () {
    return view("Index");
});
=======
>>>>>>> 2ef7cc576ff1ac11fffa726b3220809acb0c1814

Route::get('/venta_productos', function () {
    return view("venta_productos");
});

Route::get('/camaras', function () {
    return view("camaras");
});

Route::get('/envioscliente', function () {
    return view("EnviosCliente_dashboard");
});

Route::get('/recuperarContraseña',function(){
    return view("recuperarContraseña");
});

Route::get('/recuperarContraseña2',function(){
    return view("recuperarContraseñaPaso2");
});

Route::get('/recuperarContraseña3',function(){
    return view("recuperarContraseñaPaso3");
});

<<<<<<< HEAD
Route::get('/gestion_productos',function(){
    return view("gestion_productos");
});

=======
Route::get('/formulariopqrsf',function(){
    return view("formulariopqrsf");
});

Route::post('/register', 'RegisterController@register')->name('register');
>>>>>>> 2ef7cc576ff1ac11fffa726b3220809acb0c1814

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
