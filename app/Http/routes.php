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
    Route::get("qqlogin",'LoginController@qq_login');
    Route::get("qq_callback",'LoginController@qq_callback');
    Route::get("qq_user",'LoginController@qq_user');
    Route::get("shop",'Pay\PayController@Shop');
    //验证码
    Route::get("captcha/mews",'LoginController@mews');
    //用户注册
    Route::post("user/register",'LoginController@register');
    //用户激活邮箱
    Route::get("email_register",'LoginController@email_register');
    //绑定互联网站初次登录网站的用户
    Route::get("binding",'LoginController@binding');
    Route::post("binding/login",'LoginController@binding_login');
});

Route::group(['middleware' => ['web']], function () {
    Route::get("admin/index",'Admin\IndexController@index');
    Route::get("admin/index_v1",'Admin\IndexController@index_v1');
    Route::get("admin/TurnsShow",'Admin\Real\TurnsController@TurnsShow');
    Route::any("admin/TurnsAdd",'Admin\Real\TurnsController@TurnsAdd');
    Route::any("admin/TurnsUpload",'Admin\Real\TurnsController@TurnsUpload');
});


