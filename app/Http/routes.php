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
    return view('welcome');
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

Route::group(['middleware' => ['web']], function () {
    Route::get("admin/index",'Admin\IndexController@index');
    Route::get("admin/index_v1",'Admin\IndexController@index_v1');
    Route::get("admin/cate/add",'Admin\CategoryController@add');
    Route::any("admin/cate/adddo",'Admin\CategoryController@addDo');
    Route::any("admin/cate/show",'Admin\CategoryyController@show');
    Route::any("admin/cate/del",'Admin\CategoryController@del');
    Route::any("admin/cate/update",'Admin\CategoryController@update');
    Route::any("admin/cate/updatado",'Admin\CategoryController@updateDo');
    Route::any("admin/cate/updatado",'Admin\CategoryController@updateDo');
});
