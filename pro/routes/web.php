<?php

use App\Http\Controllers\UserViewController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserViewController::class);

Route::get('/', function () {
    return view('welcome');
});
