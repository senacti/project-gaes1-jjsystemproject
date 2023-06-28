<?php

use App\Http\Controllers\citaController;
use App\Http\Controllers\ProductoController;
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
    return view('/layout/welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    //RUTAS CRUD PRODUCTOS-Y-SERVICIOS
    Route::resource('/Productos', ProductoController::class);
    //RUTAS CRUD SERVICIO-TECNICO-CITAS
    Route::resource('/Citas', citaController::class);
    Route::resource('/envios', EnvioController::class);
    Route::get('export', [ExportController::class, 'export'])->name('export');
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

Route::get('/visualizacion_producto', function () {
    return view("visualizacion_producto");
});

Route::get('/cotizacion', function () {
    return view("cotizacion");
});
//servicio Tecnico
Route::get('/Citas.indexST',function(){
    return view("Citas.indexST");
});
//
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

Route::get('/añadir_producto',function(){
    return view("añadir_producto");
});

Route::get('/formulariopqrsf',function(){
    return view("formulariopqrsf");
});
