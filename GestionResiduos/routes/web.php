<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ResiduoController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\TransporteController;
use App\Http\Controllers\DisposicionFinalController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\IndexController;

// Ruta principal: Redirige a login si no está autenticado
Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Rutas de autenticación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
 

// Rutas protegidas
Route::middleware(['auth'])->group(function () {
    Route::get('/index', [IndexController::class, 'showIndex'])->name('index');

    // Rutas para la entidad Empresa
    Route::resource('empresas', EmpresaController::class);

    // Rutas para la entidad Residuo
    Route::resource('residuos', ResiduoController::class);

    // Rutas para la entidad Reporte
    Route::resource('reportes', ReporteController::class);

    // Rutas para la entidad Almacen
    Route::resource('almacenes', AlmacenController::class);

    // Rutas para la entidad Transporte
    Route::resource('transportes', TransporteController::class);

    // Rutas para la entidad DisposicionFinal
    Route::resource('disposicion_final', DisposicionFinalController::class);
    // Rutas para la entidad Usuario
    Route::resource('usuarios', UsuarioController::class);

   
});
