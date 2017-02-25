<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view("admin.index");
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web'],'prefix'=>'home','namespace'=>"Home"], function () {
    Route::get("real",'Real\RealIndexController@RealIndex');
    Route::get("direction",'Real\RealIndexController@Direction');
});

Route::group(['middleware' => ['web']], function () {
    Route::get("admin/index",'Admin\IndexController@index');
    Route::get("admin/index_v1",'Admin\IndexController@index_v1');
    Route::get("admin/TurnsShow",'Admin\Real\TurnsController@TurnsShow');
    Route::any("admin/TurnsAdd",'Admin\Real\TurnsController@TurnsAdd');
    Route::any("admin/TurnsUpload",'Admin\Real\TurnsController@TurnsUpload');
});

