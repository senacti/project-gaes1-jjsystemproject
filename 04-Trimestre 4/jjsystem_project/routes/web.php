<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Auth\FormularioPqrsfController;
use App\Http\Controllers\EnvioController;
use App\Http\Controllers\ExportController;
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

Route::get('/Index', function () {
    return view("Index");
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

Route::get('/recuperarContraseña',function(){
    return view("recuperarContraseña");
});

Route::get('/recuperarContraseña2',function(){
    return view("recuperarContraseñaPaso2");
});

Route::get('/recuperarContraseña3',function(){
    return view("recuperarContraseñaPaso3");
});

Route::get('/gestion_productos',function(){
    return view("gestion_productos");
});

Route::get('/formulariopqrsf',function(){
    return view("formulariopqrsf");
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTAS CRUD COTIZACIONES 

Route::get('/cotizaciones', 'cotizacionController@index')->name('cotizaciones.index');
Route::get('/cotizaciones/create', 'cotizacionController@create')->name('cotizaciones.create');
Route::get('/cotizaciones', 'cotizacionController@store')->name('cotizaciones.store');
Route::get('/cotizaciones/{id}', 'cotizacionController@show')->name('cotizaciones.show');
Route::get('/cotizaciones/{id}/edit', 'ProductoController@edit')->name('cotizaciones.edit');
Route::put('/cotizaciones/{id}', 'ProductoController@update')->name('cotizaciones.update');
Route::delete('/cotizaciones/{id}', 'ProductoController@destroy')->name('cotizaciones.destroy');


Route::resource('/envios', EnvioController::class);


Route::get('export', [ExportController::class, 'export'])->name('export');