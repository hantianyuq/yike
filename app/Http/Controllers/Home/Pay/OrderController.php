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
            $user = $request->session()->get('user');

            $get_id = $request->input('course_id');
            $course_id = explode(",",$get_id);
            $result = DB::table('real_course')->whereIn('real_course_id',$course_id)->get();
//            $result = DB::table('real_course')->get();
            return view('home.pay.confirm_order',['course'=>$result,'user'=>$user]);
        }else if($request->isMethod('post')){
            $code = $request->input('code');
            //判断是否是前台发送过来进行验证的
            if($code == 1){
                $user = $request->session()->get('user');
                if(empty($user)){
                    $arr = ['code'=>1,'content'=>'请先登录'];
                }else{
                    $arr = ['code'=>2];
                }
                return json_encode($arr);
            }
        }
    }
    //订单中心 
    public function pay_center(Request $request)
    {
        $order_sn = $request->input('order_sn');
        $order_info = DB::table("order")->where('order_sn',$order_sn)->first();
        $time = (strtotime($order_info['confirm_time']) + 84600) - time() ;

        return view('home.pay.centre',['order_info'=>$order_info,'time'=>$time]);
    }
    
    //提交订单
    public function add_order(Request $request)
    {
        $result = $request->input();
        $course_id = explode(",",$result['course_id']);
        //提交到订单表
        $add_order = [];
        //统计确认订单时的价格
        $add_order['course_amount'] = DB::table('real_course')->whereIn('real_course_id',$course_id)->sum('real_course_price');
        //生成订单号
        $add_order['order_sn'] = date('Ymd').substr(implode(NULL,array_map('ord',str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
        //用户ID
        $add_order['user_id'] = $result['user_id'];
        //生成订单时间
        $add_order['confirm_time'] = date('Y-m-d H:i:s');
        //订单入库
        $order_id = DB::table('order')->insertGetId($add_order);
        if($order_id){
            //提交到订单课程表
            $add_order_course = [];
            //订单ID
            $add_order_course['order_id'] = $order_id;
            //课程ID
            $add_order_course['course_id'] = $result['course_id'];
            //
            $course = DB::table('real_course')->whereIn('real_course_id',$course_id)->get();
            $course_name_arr = null;
            $course_price_arr = null;
            foreach($course as $key => $value){
                $course_name_arr .= $value['real_course_name'].",";
                $course_price_arr .= $value['real_course_price'].",";
            }
            $add_order_course['course_name'] = substr($course_name_arr,0,-1);
            $add_order_course['course_price'] = substr($course_price_arr,0,-1);

            $last = DB::table('order_course')->insert($add_order_course);
            if($last){
                $arr = [
                    'code' => 1,
                    'url' => $add_order['order_sn']
                ];
            }else{
                $arr = [
                    'code' => 2,
                    '失败'
                ];
            }
        }else{
            $arr = [
                'code' => 2,
                'content' => '失败 '
            ];
        }
        echo json_encode($arr);

    }
}
