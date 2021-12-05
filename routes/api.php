<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


Route::post('login', 'App\Http\Controllers\AuthController@login');

Route::group(['middleware' => 'auth:api'], function () {
    Route::apiResource('users', UserController::class);
});
