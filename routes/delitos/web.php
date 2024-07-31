<?php

use Illuminate\Support\Facades\Route;

Route::get('/delitos-códigos/caracteristicas', function () {
    return view('delitos.page1');
})->name('delitos.page1');

Route::get('/delitos-códigos/aspectos-legales', function () {
    return view('delitos.page2');
})->name('delitos.page2');

Route::get('/delitos-códigos/elaboración-de-códigos', function () {
    return view('delitos.page3');
})->name('delitos.page3');