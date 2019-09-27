<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/***
 * PC端后台
 */
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function () {
    Route::get('/','AdminController@index');
    Route::get('/add','AdminController@add');
    Route::get('/list','AdminController@list');
});

/***
 * 手机端
 */
Route::get('/m/login','Mobile\LoginController@index');
Route::post('/m/login/check','Mobile\LoginController@check_login');

Route::group(['prefix'=>'m','namespace'=>'Mobile'],function (){
    Route::get('/',function (){
       return view('mobile.index');
    });
    Route::get('/user/index','UserController@index');
    Route::get('/user_files/{uid}','UserController@getuserfile');
});
