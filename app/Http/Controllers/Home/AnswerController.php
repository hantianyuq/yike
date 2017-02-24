<?php
namespace app\Http\Controllers\Home;

use App\Http\Controllers\Controller;

/**
 * 猿问前台
 */
class AnswerController extends Controller

{

    /*
     *展示
     */
    public function index()
    {
        return view("home.index");
    }
}