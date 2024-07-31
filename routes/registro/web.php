<?php

use Illuminate\Support\Facades\Route;

Route::get('/registros-de-obras/leyes', function () {
    return view('registro.page1');
})->name('registro.page1');

Route::get('/registros-de-obras/tramites-servicios', function () {
    return view('registro.page2');
})->name('registro.page2');
