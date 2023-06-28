<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\ProductoController;
use App\Http\Controllers\citaController;
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
    return view('/layouts/welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    //RUTAS CRUD PRODUCTOS-Y-SERVICIOS
    Route::resource('/Producto/indexProducto', ProductoController::class);
    //RUTAS CRUD SERVICIO-TECNICO-CITAS
    Route::resource('/Citas', citaController::class);
    Route::resource('/envios', EnvioController::class);
    Route::get('export', [ExportController::class, 'export'])->name('export');
});

//Route::get('cita',[citaController::class,'index']);
//Route::put('Citas/{idCita}', 'CitasController@update')->name('Citas.update');

Route::get('/Index', function () {
    return view("Index");
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
//servicioTecnicoVistas
Route::get('/Citas.indexST',function(){
    return view("Citas.indexST");
});
//
Route::get('/envioscliente', function () {
    return view("EnviosCliente_dashboard");
});


Route::get('/formulariopqrsf',function(){
    return view("formulariopqrsf");
});