<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PermissionController;


Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::post('register', 'App\Http\Controllers\AuthController@register');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::get('chart','App\Http\Controllers\DashboardController@chart');
    Route::get('user','App\Http\Controllers\UserController@user');
    Route::put('user/info','App\Http\Controllers\UserController@updateInfo');
    Route::get('user/password','App\Http\Controllers\UserController@updatePassword');
    Route::post('upload','App\Http\Controllers\ImageController@upload');
    Route::get('export', 'App\Http\Controllers\OrderController@export');

    Route::apiResource('users', UserController::class);
    Route::apiResource('roles', RoleController::class);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('orders', OrderController::class)->only('index', 'show');
    Route::apiResource('permissions', PermissionController::class)->only('index');
});
