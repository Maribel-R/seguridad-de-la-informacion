<?php

use Illuminate\Support\Facades\Route;

Route::get('/legislación-informatica', function () {
    return view('legislacion.page1');
})->name('legislacion.page1');

Route::get('/legislación-informatica/conceptos', function () {
    return view('legislacion.page2');
})->name('legislacion.page2');
