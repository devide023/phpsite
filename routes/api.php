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
Route::group(['prefix'=>'index','namespace'=>'Api'],function (){
    Route::get('data','IndexController@alldata');
});
Route::group(['namespace'=>'Api','prefix'=>'user'],function (){
    Route::post('list','UserController@list');
    Route::post('add','UserController@add');
    Route::post('addrole','UserController@add_user_role');
    Route::post('actions','UserController@actions');
    Route::get('find','UserController@finduser');
    Route::post('modify','UserController@edituser');
    Route::post('setpwd','UserController@changepwd');
    Route::get('search','UserController@search');
    Route::get('del','UserController@remove');
});

Route::group(['namespace'=>'Api','prefix'=>'role'],function(){
    Route::post('list','RoleController@list');
    Route::post('add','RoleController@add');
    Route::post('roleusers','RoleController@roleusers');
    Route::post('rolemenus','RoleController@rolemenus');
});

Route::group(['namespace'=>'Api','prefix'=>'menu'],function(){
    Route::post('list','MenuController@list');
    Route::post('add','MenuController@add');
    Route::post('menuroles','MenuController@menuroles');
});

Route::post('/user/login','Api\UserController@login');
Route::post('/upload/uploadimg','Api\MyUpDownController@upimage');
Route::get('/drawer/data','Api\UserController@drawer');
