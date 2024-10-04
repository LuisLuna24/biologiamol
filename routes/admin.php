<?php

use Illuminate\Support\Facades\Route;

Route::get('/panel', function () {
    //return view('administrador.panel');
    return "Panel Admin";
})->name('administrador.panel');