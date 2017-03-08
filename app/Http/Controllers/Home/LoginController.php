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
    public function login(Request $request)
    {
        if($request->isMethod("post")){
            //获取到表单提交到的数据
            $user_info = $request->input();
            //根据数据查询数据库中是否存在这个用户
            $user = DB::table("user")
                ->where("user_name",$user_info['user'])
                ->orWhere('user_email',$user_info['user'])
                ->orWhere('user_phone',$user_info['user'])->first();
            //如果没有用户就返回
            if(!isset($user)){
                return back()->with("ccccc","用户名或者密码错误");
            }elsE{
                //有这个用户就对比密码
                if($user_info['user_pwd'] != $user['user_pwd']){
                    return back()->with('ccccc','用户名或者密码错误');
                }else{
                    $request->session()->put('user',$user_info);
//                    $add_user = serialize($user);
//                    setcookie('user',$add_user,time()+60*60*24);
                    $arr_add['user_nowtime'] = date('Y-m-d H:i:s');
                    $arr_add['user_lasttime'] = $user['user_nowtime'];
                    $update = DB::table("user")->where("user_id",$user['user_id'])->update($arr_add);
                    if($update){
                        return redirect('home/direction');
                    }
                }
            }


        }
    }
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
            $info['openid'] = $openid;
            return redirect('home/binding')->with('info',$info);
        }else{
            $user = serialize($check_issetqq);
            setcookie('user',$user);
            return redirect("home/direction");
        }
    }

    public function loginout()
    {
        setcookie("user",1,time()-1);
        return redirect("home/direction");
    }

    /**
     * 初次使用互联登录网站的用户
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function binding(Request $request)
    {
        $value = $request->session()->get('info');
        $count = DB::table("user")->where("user_name",$value['nickname'])->count();
        $name_count = $count + 1;
        $name = "qq_".$value['nickname']."_".$name_count;
        $arr = [
            "picture" => $value['figureurl_qq_2'],
            "name" => $name,
            'gender' => $value['gender'],
            'openid' => $value['openid']
        ];
        return view('home.user.binding',['info'=>$arr]);
    }

    public function binding_login(Request $request)
    {
        $result = $request->input();

        $header_name = rand(1111,9999).time().".jpg";
        $name = $this->getImage($result['image'],public_path('home/header'),$header_name);
        if($name){
            $add_arr = [
                'user_name' => $result['user_name'],
                'user_email' => $result['user_email'],
                'user_pwd' => $result['user_pwd'],
                'user_figurepath' => "/header/".$header_name,
                'user_qq_openid' => $result['openid'],
                'user_nowtime' => date('Y-m-d H:i:s')
            ];
            $add = DB::table("user")->insertGetId($add_arr,'user_id');
            if($add){
                $user_info  = DB::table("user")->where("user_id",$add)->first();
                $user = serialize($user_info);
                if(setcookie('user',$user)){
                    return redirect("home/direction");
                }
            }
        }
    }
    /**
     * 通过图片的远程url，下载到本地
     * @param: $url为图片远程链接
     * @param: $filename为下载图片后保存的文件名
     */
    function getImage($url,$save_dir='',$filename='',$type=0){
        if(trim($url)==''){
            return array('file_name'=>'','save_path'=>'','error'=>1);
        }
        if(trim($save_dir)==''){
            $save_dir='./';
        }
        if(trim($filename)==''){//保存文件名
            $ext=strrchr($url,'.');
            if($ext!='.gif'&&$ext!='.jpg'){
                return array('file_name'=>'','save_path'=>'','error'=>3);
            }
            $filename=time().$ext;
        }
        if(0!==strrpos($save_dir,'/')){
            $save_dir.='/';
        }
        //创建保存目录
        if(!file_exists($save_dir)&&!mkdir($save_dir,0777,true)){
            return array('file_name'=>'','save_path'=>'','error'=>5);
        }
        //获取远程文件所采用的方法
        if($type){
            $ch=curl_init();
            $timeout=5;
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
            $img=curl_exec($ch);
            curl_close($ch);
        }else{
            ob_start();
            readfile($url);
            $img=ob_get_contents();
            ob_end_clean();
        }
        //$size=strlen($img);
        //文件大小
        $fp2=@fopen($save_dir.$filename,'a');
        fwrite($fp2,$img);
        fclose($fp2);
        unset($img,$url);
        return array('file_name'=>$filename,'save_path'=>$save_dir.$filename,'error'=>0);
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
