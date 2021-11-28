<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginControlador;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login', [LoginControlador::class, 'login'])
->name('login');
Route::post('/valida', [LoginControlador::class, 'valida'])
->name('valida');