<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // ✅ Import your controller

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('submit-login');
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('submit-register');;
Route::get('/connexion', [UserController::class, 'connexion'])->name('connexion');
Route::get('/doctors', [UserController::class, 'displayData'])->name('doctors');
Route::get('/search', [UserController::class, 'search'])->name('search');

Route::get('/email/verify/{id}/{verificationCode}', [UserController::class, 'verify'])->name('verification');


Route::get('/admin/list', [UserController::class, 'list'])->name('users');

Route::get('/roles', [AdminController::class, 'roles'])->name('roles');
Route::post('/save-role', [RoleController::class, 'save'])->name('save-role');
Route::get('/list-roles', [RoleController::class, 'list'])->name('list-roles');
Route::post('/delete-role', [RoleController::class, 'delete'])->name('delete-role');
Route::post('/delete-roles', [RoleController::class, 'deleteRoles'])->name('delete-roles');


Route::get('/role-permissions/{id}', [PermissionController::class, 'permissions'])->name('role-permissions');
Route::post('/update-role-permissions', [PermissionController::class, 'update'])->name('update-role-permissions');
