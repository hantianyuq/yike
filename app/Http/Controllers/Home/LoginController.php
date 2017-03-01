<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Captcha;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /**
     * 第三方QQ登录回调地址
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function qq_callback()
    {
        require app_path().'\class\Connect\qqConnectAPI.php';
        $oauth = new \Oauth();
        $accesstoken = $oauth->qq_callback();
        $openid = $oauth->get_openid();
        $check_issetqq = DB::table("user")->where("user_qq_openid",$openid)->first();
        if(!isset($check_issetqq)){
            $qc = new \QC($accesstoken,$openid);
            $info = $qc->get_user_info();
//            return redirect()->action('home\LoginController@qq_register');
//            Redirect::to("home/qq_register")->send("dsa","wqe");
            return redirect('home/qq_register')->with('info',$info);
        }else{
            setcookie("qq_accesstoken",$accesstoken,time()+86400);
            setcookie("qq_openid",$openid,time()+86400);
        }
    }

    public function qq_register(Request $request)
    {
        $id = $request->session('info');
        print_r($id);
    }
    /**
     * 第三方QQ登录入口
     */
    public function qq_login()
    {
        require app_path().'\class\Connect\qqConnectAPI.php';
        $oauth = new \Oauth();
        $oauth->qq_login();
    }

    /**
     * 用户信息
     */
    public function qq_user()
    {
        require app_path().'\class\Connect\qqConnectAPI.php';
        $qc = new \QC($_COOKIE['qq_accesstoken'],$_COOKIE['qq_openid']);
        $info = $qc->get_user_info();
        $this->p($info);
    }

    /**
     * 生成了一个验证码，具体请去config/captcha进行调整
     * @return mixed
     */
    public function mews()
    {
        return Captcha::create('mini');
    }

    /**
     * 用户点击注册发送邮件
     * @param Request $request
     */
    public function register(Request $request)
    {

        $post_info = $request->input('obj');
        $ver = $post_info['verify'];
        if(empty(Captcha::check($ver))){
            $arr = [
                "code" => 1,
                "content" => "验证码错误"
            ];
        }else{
            $token = md5($post_info['user_email'].$post_info['user_pwd'].time());
            $add_arr = [
                'user_email' => $post_info['user_email'],
                'user_pwd' => $post_info['user_pwd'],
                'user_register_token_time' => time()+60*60*24,
                'user_register_token' => $token
            ];
            DB::table("user")->insert($add_arr);
            $arr = [
                "code" => 2,
                "content" => $post_info['user_email']
            ];
            $data = ['email'=>$post_info['user_email'], 'token'=>$token];
            Mail::send('home.user.register_email', $data, function($message) use($data)
            {
                $message->to($data['email'], $data['token'])->subject('欢迎注册我们的网站，请激活您的账号！');
            });
        }
        echo json_encode($arr);
    }

    /**
     * 激活页面
     * (未优化)
     * @param Request $request
     */
    public function email_register(Request $request)
    {
        if($request->isMethod("get")){
            $token = $request->input("token");
            if(!isset($token)){
                echo "错误";
            }else{
                $info = DB::table("user")->select("user_register_token",'user_id','user_register_token_time')->where("user_register_token",$token)->first();
                if(!isset($info)){
                    echo "token错误";
                }else{
                    if($info['user_register_token_time'] <= time()){
                        echo "链接已经过期";
                    }else{
                        $update = DB::table("user")->where("user_id",$info['user_id'])->update(['user_status'=>1]);
                        if($update){
                            echo "激活成功";
                        }
                    }
                }
            }
        }
    }

}
