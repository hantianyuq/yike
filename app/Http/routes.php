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


/*
|--------------------------------------------------------------------------
| 	后台  
|--------------------------------------------------------------------------
|	免费课程 
*/
Route::group(['middleware' => ['web']], function () {
    Route::get("courseShow",'Admin\free\CourseController@courseShow');        // 课程展示
    Route::get("courseAdd",'Admin\free\CourseController@courseAdd');	      // 课程添加 
    Route::get("courseDel",'Admin\free\CourseController@courseDel');	      // 课程删除 
    Route::get("courseEdit",'Admin\free\CourseController@courseEdit');	      // 课程编辑 
    Route::post("courseEdit_do",'Admin\free\CourseController@courseEdit_do'); // 课程编辑 
    

    Route::get("noteShow",'Admin\free\NoteController@noteShow');	   // 笔记展示 
    Route::get("noteDel",'Admin\free\NoteController@noteDel');	       // 笔记展示 
    Route::get("noteUpdate",'Admin\free\NoteController@noteUpdate');   // 笔记更新 


    Route::get("answerShow",'Admin\free\AnswerController@answerShow');   // 题问展示 
    Route::get("answerDel",'Admin\free\AnswerController@answerDel');     // 题问删除 
    Route::get("issueShow",'Admin\free\AnswerController@issueShow');	 // 回答展示
    Route::get("issueDel",'Admin\free\AnswerController@issueDel');	     // 回答删除 

});



/*
|--------------------------------------------------------------------------
| 	前台  
|--------------------------------------------------------------------------
|	章节展示 
*/
Route::group(['middleware' => ['web']], function () {
    Route::get("learnShow",'Home\free\LearnController@learnShow');   // 章节展示
    // Route::get("learnShow",'Home\free\LearnController@learnShow');
});