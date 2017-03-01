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

/**
 *  后台猿问组
 */
Route::group(['middleware' => ['web']], function () {
    Route::any("home/answer",'Home\AnswerController@Index');
    Route::any("home/myanswer",'Home\AnswerController@MyAnswer');
    Route::any("home/turn",'Home\AnswerController@turn');
    Route::any("home/addmyanswer",'Home\AnswerController@AddMyAnswer');
    Route::any("home/detail",'Home\DetailController@DetailShow');
    Route::any("home/reply",'Home\DetailController@Reply');
    Route::any("home/creply",'Home\DetailController@CReply');//评论下回复
});
