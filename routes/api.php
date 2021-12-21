<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;


Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::post('register', 'App\Http\Controllers\AuthController@register');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('user','App\Http\Controllers\UserController@user');
    Route::put('user/info','App\Http\Controllers\UserController@updateInfo');
    Route::get('user/password','App\Http\Controllers\UserController@updatePassword');
    Route::post('upload','App\Http\Controllers\ImageController@upload');


    Route::apiResource('users', UserController::class);
    Route::apiResource('roles', RoleController::class);
    Route::apiResource('products', ProductController::class);
});
