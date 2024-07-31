<?php

use Illuminate\Support\Facades\Route;

Route::get('/conclusiones/referencias', function () {
    return view('conclusiones.page1');
})->name('conclusiones.page1');
