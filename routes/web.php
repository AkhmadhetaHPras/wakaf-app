<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Admin
Route::get('/admin/login', [LoginController::class, 'index'])->name('login');

Route::get('/', function () {
    return view('welcome');
});
