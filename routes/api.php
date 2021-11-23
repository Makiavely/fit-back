<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('hello', function(){
//     return 'Hello';
// });

 
// Route::get('hello', 'App\Http\Controllers\UserController@index');

// Route::get('users', 'App\Http\Controllers\UserController@index');

// Route::apiResource('users', 'App\Http\Controllers\UserController');

Route::apiResource('users', UserController::class);
