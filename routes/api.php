<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

// Route::middleware(['api'])->post('/login', [LoginController::class, 'authenticate']);
Route::group(['middleware' => ['web', 'api']], function () {
    Route::post('/login', [LoginController::class, 'authenticate']);
    // your routes here
});
// Route::controller(LoginController::class)->group(function () {
//     Route::post('/login', 'authenticate');
//     Route::post('/logout', 'logout');
// });

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::resource('/user', UserController::class);
});