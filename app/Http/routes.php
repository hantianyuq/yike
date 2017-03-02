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
    Route::get("admin/cate/add",'Admin\CategrayController@add');
    Route::any("admin/cate/adddo",'Admin\CategrayController@addDo');
    Route::any("admin/cate/show",'Admin\CategrayController@show');
    Route::any("admin/cate/del",'Admin\CategrayController@del');
    Route::any("admin/cate/update",'Admin\CategrayController@update');
    Route::any("admin/cate/updatado",'Admin\CategrayController@updateDo');
    Route::any("admin/section/add",'Admin\free\SectionController@add');
    Route::any("admin/section/adddo",'Admin\free\SectionController@addDo');
    Route::any("admin/section/lists",'Admin\free\SectionController@lists');
    Route::any("admin/section/del",'Admin\free\SectionController@del');
    Route::any("admin/section/update",'Admin\free\SectionController@update');

    Route::any("admin/chapter/add",'Admin\free\ChapterController@add');
    Route::any("admin/chapter/adddo",'Admin\free\ChapterController@addDo');
    Route::any("admin/chapter/lists",'Admin\free\ChapterController@lists');
    Route::any("admin/chapter/del",'Admin\free\ChapterController@del');
    Route::any("admin/chapter/update",'Admin\free\ChapterController@update');

    Route::any("admin/review/show",'Admin\free\ReviewController@show');
    Route::any("admin/review/del",'Admin\free\ReviewController@del');



    Route::any("home/section/lists",'Home\free\SectionController@lists');
    Route::any("home/section/show",'Home\free\SectionController@show');
    Route::any("home/section/publish",'Home\free\SectionController@publish');

    Route::any("home/Comment/show",'Home\free\CommentController@show');
    Route::any("home/Comment/praise",'Home\free\CommentController@praise');
    Route::any("home/Comment/praiseCancel",'Home\free\CommentController@praiseCancel');

});
