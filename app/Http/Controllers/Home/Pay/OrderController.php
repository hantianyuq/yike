<?php

namespace App\Http\Controllers\Home\Pay;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //确认订单
    public function comfirm(Request $request)
    {
        if($request->isMethod('get')){
            $get_id = $request->input('course_id');
            $course_id = explode(",",$get_id);
            $result = DB::table('real_course')->whereIn('real_course_id',$course_id)->get();
            return view('home.pay.confirm_order',['course'=>$result]);
        }
    }
    //订单中心 
    public function centre()
    {
        return view('home.pay.centre');
    }
}
