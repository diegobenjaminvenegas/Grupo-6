<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ResiduoController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\TransporteController;
use App\Http\Controllers\DisposicionFinalController;

// Ruta principal
Route::get('/', function () {
    return view('index');
});

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
