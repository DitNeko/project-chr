<?php

use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

Route::resource('dashboard', User::class);

Route::get('/login', function () {
    return view('login');
});

Route::get('/input', function () {
    return view('input');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/category', function () {
    return view('category');
});
