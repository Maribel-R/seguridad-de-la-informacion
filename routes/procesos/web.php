<?php

use Illuminate\Support\Facades\Route;

Route::get('/procesos/tramite-de-registro', function () {
    return view('procesos.page1');
})->name('procesos.page1');

Route::get('/procesos/elaboración-de-avisos', function () {
    return view('procesos.page2');
})->name('procesos.page2');
