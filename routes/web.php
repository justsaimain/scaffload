<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any?}', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
