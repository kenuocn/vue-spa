<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->middleware('cors')->group(function () {

    Route::apiResource('todos','TodosController');

    Route::apiResource('posts','PostsController');
});

//注册相关
Route::namespace('Auth')->middleware('cors')->group(function () {

    Route::post('register','RegisterController@register')->name('register');
});

