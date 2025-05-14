<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // ✅ Import your controller

Route::get('/patient/create', function () {
    return view('patient.create');
});

Route::get('/login', [UserController::class, 'login']); // ✅ Correct usage
