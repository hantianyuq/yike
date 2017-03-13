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
    Route::get("class",'Real\RealIndexController@CouresClass');
    Route::get("class/chapter",'Real\RealIndexController@ClassChapter');
    //评论展示
    Route::get("class/commit",'Real\RealIndexController@ClassCommit');
    //首页登录
    Route::post("user/login",'LoginController@login');
    //QQ第三方登录
    Route::get("qqlogin",'LoginController@qq_login');
    Route::get("qq_callback",'LoginController@qq_callback');
    Route::get("qq_user",'LoginController@qq_user');
    //购物车页面
    Route::get("pay/ShopShow",'Pay\PayController@ShopShow');
    //发送给购物车
    Route::post("pay/shop",'Pay\PayController@Shop');
    //验证码
    Route::get("captcha/mews",'LoginController@mews');
    //用户注册
    Route::post("user/register",'LoginController@register');
    //用户激活邮箱
    Route::get("email_register",'LoginController@email_register');
    //绑定互联网站初次登录网站的用户
    Route::get("binding",'LoginController@binding');
    Route::post("binding/login",'LoginController@binding_login');
    //退出登录
    Route::get("loginout",'LoginController@loginout');
    //确定订单
    Route::any("pay/comfirm_order",'Pay\OrderController@comfirm');
    //订单中心
    Route::get('pay/pay_center','Pay\OrderController@pay_center');
    //提交订单
    Route::post('order/add_order','Pay\OrderController@add_order');
});


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
<<<<<<< HEAD
=======

>>>>>>> fa6c1567bc36b6e187fca0b188e42476f46fafbb
    Route::get("admin/TurnsShow",'Admin\Real\TurnsController@TurnsShow');
    Route::any("admin/TurnsAdd",'Admin\Real\TurnsController@TurnsAdd');
    Route::any("admin/TurnsUpload",'Admin\Real\TurnsController@TurnsUpload');
 

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



/*
|--------------------------------------------------------------------------
| 	前台  
|--------------------------------------------------------------------------
|	章节展示 
*/
Route::group(['middleware' => ['web']], function () {

    Route::get("learnShow",'Home\free\LearnController@learnShow');      // 章节展示
    Route::get("learnIssue",'Home\free\LearnController@learnIssue');    // 问题
    Route::get("learnAnswer",'Home\free\LearnController@learnAnswer');  // 回答
    Route::get("learnAnswer_do",'Home\free\LearnController@learnAnswer_do');  // 回答提交
    Route::get("learnRevert",'Home\free\LearnController@learnRevert');  // 回复提交
    Route::get("learnNote",'Home\free\LearnController@learnNote');      // 笔记
    
});

 
 
