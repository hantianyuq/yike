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
});


// 课程章节
Route::group(['middleware' => ['web']], function () {
    Route::get("courseShow",'Admin\free\CourseController@courseShow');  // 章节展示
    Route::get("courseAdd",'Admin\free\CourseController@courseAdd');	   // 章节添加 
    Route::get("courseDel",'Admin\free\CourseController@courseDel');	   // 章节删除 
    Route::get("courseEdit",'Admin\free\CourseController@courseEdit');	   // 章节编辑 
    Route::post("courseEdit_do",'Admin\free\CourseController@courseEdit_do');	   // 章节编辑 
});