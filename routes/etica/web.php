<?php

use Illuminate\Support\Facades\Route;

Route::get('/ética/ética-informatica', function () {
    return view('etica.page1');
})->name('etica.page1');

Route::get('/ética/conceptos', function () {
    return view('etica.page2');
})->name('etica.page2');
