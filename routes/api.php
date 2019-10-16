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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//
//Route::get('/user/list',function (Request $request){
//    $ulist = new App\Http\Controllers\Api\UserController();
//    return $ulist->list();
//});

Route::get('/user/list','Api\UserController@list');
Route::post('/user/add','Api\UserController@add');
Route::post('/user/login','Api\UserController@login');
Route::post('/upload/uploadimg','Api\MyUpDownController@upimage');
Route::get('/drawer/data','Api\UserController@drawer');
