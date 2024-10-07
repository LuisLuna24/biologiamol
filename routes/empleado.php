<?php

use Illuminate\Support\Facades\Route;

Route::get('/panel', function () {
    return view('empleados.panel');
    //return "Panel empleado";
})->name('empleado.panel');