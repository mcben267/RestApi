<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


//grouping routes with prefix and namespace
Route::group(['prefix' => 'v1', 'namespace'=> 'App\Http\Controllers\Api\V1'], function () {
    Route::get('login', 'UserController@login');
    Route::post('register', 'UserController@register');

    //grouping routes with middleware
    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::get('logout', 'UserController@logout');
        Route::get('user', 'UserController@user');
        Route::get('logout/all', 'UserController@logoutAll');
    });

});
