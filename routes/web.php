<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/hola-mundo', function () {
    return view('hola');
});

Route::get('/formulario-contacto', [ContactoController::class, 'formularioContacto']);
Route::post('/recibe-formulario', [ContactoController::class, 'recibeFormulario']);