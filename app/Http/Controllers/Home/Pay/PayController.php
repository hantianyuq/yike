<?php

namespace App\Http\Controllers\Home\Pay;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class PayController extends Controller
{
    /**
     * 点击购物车进行处理返回数据
     * @param Request $request
     */
    public function Shop(Request $request)
    {

        /*
         * 1.接受到课程ID 判断课程的用户是否登录
         * 2.如果用户登录的就入购物车的数据库
         * 3.如果用户未登录就加入COOKIE，分别为按照课程ID保存的和一个确认购物车中是否存在课程的
         * 4.如果购物车中已经存在课程则返回课程已经存在
         */
        if($request->isMethod("post")){
            //获取课程的ID
            $course_id =  $request->input("course_id");
            if(!isset($_COOKIE['user'])){
                //未登录
                $course_info = DB::table("real_course")->where("real_course_id",$course_id)->first();
                $course = [];
                //判断购物车中有课程
                if(isset($_COOKIE['is_course']))
                {
                    $course = unserialize($_COOKIE['is_course']);
                    $data = [];
                    foreach($course['is_course'] as $key => $val)
                    {
                        $data[] = unserialize($val);
                    }
                    $course_id_arr = [];
                    foreach($data as $key => $value){
                        $course_id_arr[] .= $value['real_course_id'];
                    }
                    if(in_array($course_id,$course_id_arr)){
                        $arr = [
                            'code' => 2,
                            'content' => '课程已经存在'
                        ];
                   }else{
                        //如果COOKIE中已经有course则将他取出来进行追加
                        $course['is_course'][] = serialize($course_info);
                        $cookie_value = serialize($course);
                        setcookie("is_course",$cookie_value,time()+60*60*24);
                        $arr = [
                            'code' => 0,
                            'content' => "课程已经加入购物车"
                        ];
                    }
                }else{
                    //如果COOKIE中已经有course则将他取出来进行追加
                    $course['is_course'][] = serialize($course_info);
                    $cookie_value = serialize($course);
                    setcookie("is_course",$cookie_value,time()+60*60*24);
                    $arr = [
                        'code' => 0,
                        'content' => "课程已经加入购物车"
                    ];
                }
            }else{
                //已经登录
                $user = unserialize($_COOKIE['user']);
                $is_course = DB::table("real_cart")->where("real_user_id",$user['user_id'])->where("real_course_id",$course_id)->first();
                if(isset($is_course)){
                    $arr = [
                        'code' => 2,
                        'content' => '课程已经存在'
                    ];
                }else{
                    //获取用户选择的课程信息
                    $course_info = DB::table("real_course")->where("real_course_id",$course_id)->first();
                    $add_arr = [
                        'real_user_id' => $user['user_id'],
                        'real_course_name' => $course_info['real_course_name'],
                        'real_course_id' => $course_info['real_course_id'],
                        'real_course_price'=> $course_info['real_course_price'],
                        'real_course_thume' => $course_info['real_course_thum']
                    ];
                    $result = DB::table("real_cart")->insert($add_arr);
                    if($result){
                        $arr = [
                            'code' => 1,
                            'content' =>'恭喜，课程已经加入购物车'
                        ];
                    }
                }
            }
            echo json_encode($arr);
        }
    }

    public function ShopShow()
    {
        if(!isset($_COOKIE['user'])){
            //如果未登录游客 购物车显示cookie当中的信息.
            if(isset($_COOKIE['is_course'])){
                $user = unserialize($_COOKIE['is_course']);
                $data = [];
                foreach($user['is_course'] as $key => $val)
                {
                    $data[] = unserialize($val);
                }
                return view("home.pay.shop",['course_info'=>$data]);
            }
        }else{
            //如果已经登录 显示用户购物车库中的数据
            $user = unserialize($_COOKIE['user']);
            $user_id = $user['user_id'];
            $cart_info = DB::table("real_cart")->where("real_user_id",$user_id)->get();
            return view("home.pay.shop",['cart_info'=>$cart_info]);
        }


    }
}
