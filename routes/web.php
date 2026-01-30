<?php

use App\Http\Controllers\UserViewController;
use App\Http\Controllers\AuthViewController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/users', [UserViewController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserViewController::class, 'create'])->name('users.create');
    Route::get('/users/{id}', [UserViewController::class, 'show'])->name('users.show');
    Route::post('/users', [UserViewController::class, 'store'])->name('users.store');
    Route::post('/users/{id}', [UserViewController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserViewController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/{id}/edit', [UserViewController::class, 'edit'])->name('users.edit');
});
Route::get("/login", [AuthViewController::class, 'index'])->name('login');
Route::post("login", [AuthViewController::class, 'authenticate'])->name('auth.authenticate');
Route::post("register", [AuthViewController::class, 'registerPost'])->name('register.post');
Route::get("/register", [AuthViewController::class, 'register'])->name('auth.register');