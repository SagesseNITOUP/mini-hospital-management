<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // ✅ Import your controller

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UserController::class, 'login']); // ✅ Correct usage
Route::get('/Appointment', [UserController::class, 'Appointment']);
