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
Route::group(['prefix' => 'index', 'namespace' => 'Api'], function () {
    Route::get('data', 'IndexController@alldata');
});
Route::group(['namespace' => 'Api', 'prefix' => 'user'], function () {
    Route::match(['post','get'],'list', 'UserController@list')->middleware('auth:api');
    Route::post('add', 'UserController@add');
    Route::post('addrole', 'UserController@add_user_role');
    Route::post('actions', 'UserController@actions');
    Route::get('find', 'UserController@finduser');
    Route::post('modify', 'UserController@edituser');
    Route::post('setpwd', 'UserController@changepwd');
    Route::get('search', 'UserController@search');
    Route::get('del', 'UserController@remove');
});

Route::group(['namespace' => 'Api', 'prefix' => 'role'], function () {
    Route::post('list', 'RoleController@list');
    Route::post('add', 'RoleController@add');
    Route::post('roleusers', 'RoleController@roleusers');
    Route::post('rolemenus', 'RoleController@rolemenus');
});

Route::group(['namespace' => 'Api', 'prefix' => 'menu'], function () {
    Route::post('list', 'MenuController@list');
    Route::post('add', 'MenuController@add');
    Route::post('menuroles', 'MenuController@menuroles');
});

Route::group(['prefix' => 'organize', 'namespace' => 'Api'], function () {
    Route::get('list', 'OrganizeController@list');
});

Route::match(['post','get'],'/user/login', 'Api\UserController@login');
Route::match(['post','get'],'/user/logout', 'Api\UserController@logout')->middleware('auth:api');
Route::match(['post','get'],'/freshtoken','Api\UserController@refreshToken');
Route::match(['post','get'],'/checktoken','Api\UserController@checktoken');
Route::match(['post','get'],'/test','Api\UserController@test')->middleware('auth:api');
Route::post('/upload/uploadimg', 'Api\MyUpDownController@upimage');
Route::get('/drawer/data', 'Api\UserController@drawer');

Route::group(['prefix' => 'gold05', 'namespace' => 'Api\Gold05'], function () {
    Route::get('menutype', 'BaseInfoController@menutyp');
    Route::get('menuplace', 'BaseInfoController@menuplace');
    Route::get('shipclass', 'BaseInfoController@shipclass');
    Route::get('xmtype', 'BaseInfoController@xmtype');
    Route::post('xmtypes', 'BaseInfoController@xmtypes');
    Route::get('menucode', 'BaseInfoController@menucode');
    Route::get('index', 'BaseInfoController@index');
    Route::get('saledata', 'BaseInfoController@saledata');
    Route::post('saledatas', 'BaseInfoController@saledatas');
    Route::post('menubill', 'BaseInfoController@menubill');
});

Route::group(['prefix' => 'film', 'namespace' => 'Api\Film'], function () {
    Route::get('list', 'FilmController@list');
    Route::get('detail', 'FilmController@detail');
});

Route::group(['prefix' => 'mysql/user', 'namespace' => 'Api\MySql'], function () {
    Route::get('list', 'UserController@list');
});



