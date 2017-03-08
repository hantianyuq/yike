<?php
namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller

{
    /**
     * 后台首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view("admin.index");
    }

    public function index_v1()
    {
        echo 1;die;
        return view("admin.index_v1");
    }
}