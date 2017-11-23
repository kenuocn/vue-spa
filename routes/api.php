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
});



//Route::get('todos', function () {
//    return response()->json([
//        [
//            'id'        => 1,
//            'title'     => 'PHP是世界上最牛b的语言!',
//            'completed' => false,
//        ], [
//            'id'        => 2,
//            'title'     => 'JavaScript要争霸世界!',
//            'completed' => false,
//        ], [
//            'id'        => 3,
//            'title'     => 'python才是最牛逼的语言,PHP就是拍黄片!',
//            'completed' => false,
//        ],
//    ]);
//});
