<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

Route::resource('dashboard', User::class);
Route::get('/sessions', [SessionController::class,'index']);
Route::post('/sessions/login', [SessionController::class,'login']);
Route::get('/sessions/logout', [SessionController::class,'logout']);
Route::get('/sessions/register', [SessionController::class,'register']);
Route::post('/sessions/create', [SessionController::class,'create']);

Route::get('/input', function () {
    return view('input');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/category', function () {
    return view('category');
});
