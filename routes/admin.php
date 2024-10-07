<?php

use Illuminate\Support\Facades\Route;

Route::get('/panel', function () {
    return view('administrador.panel');
})->name('administrador.panel');



//&=======================================================Catalogos

Route::get('/catalogos/especies', function () {
    return view('administrador.catalogos.especies');
})->name('catalogos.especies');

Route::get('/catalogos/analisis', function () {
    return view('administrador.catalogos.analisis');
})->name('catalogos.analisis');

Route::get('/catalogo/metodos', function () {
    return view('administrador.catalogos.metodos');
})->name('catalogos.metodos');

//&=======================================================Inventarios

Route::get('/inventarios/equipos', function () {
    return view('administrador.inventarios.equipos');
})->name('inventarios.equipos');

Route::get('/inventarios/reactivos', function () {
    return view('administrador.inventarios.reactivos');
})->name('inventarios.reactivos');