<?php

use Illuminate\Support\Facades\Route;

Route::get('/patient/create', function () {
    return view('patient.create');
});
