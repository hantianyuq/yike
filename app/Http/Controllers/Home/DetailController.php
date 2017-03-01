<?php
namespace app\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DetailController extends Controller

{
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function DetailShow(Request $request)
    {
        $data = $request->all();
        $answer_id = $data['answer_id'];//可以获取内容
        $user_id = session("user_id");// 用户id  登陆者(回复的id)
        $username = DB::table("user")->select("user_name")->where('user_id','=',$user_id)->first();
        $username = $username["user_name"];
        $answer = DB::table("answer")->where('answer_id','=',$answer_id)->first();
        $sub_id = $answer["user_id"];//提问者id
//        print_r($answer);die;
        //回复
        $replay = DB::table('comment')->where([['answer_id','=',$answer_id]])->get();
//        print_r($replay);die;
        $result = cate($replay);
//        echo 1;die;
//        print_r($result);die;
        return view("home.detail",
                        [
                            'user_id'=>$user_id,
                            'username'=>$username,
                            'answer'=>$answer,
                            "sub_id"=>$sub_id,
                            'replay'=>$result,
                        ]
        );

    }


    public function Reply(Request $request)
    {
        $data = $request->all();
        $user_name = DB::table("user")->where("user_id","=",$data["user_id"])->first();
        $to_comment_name = DB::table("user")->where("user_id","=",$data["sub_id"])->first();
        $replay_name = $user_name["user_name"];
        $to_comment_name = $user_name["user_name"];
        //判断是否缺少条件验证
        if(!empty($data["content"])){
            $res = DB::table('comment')->insert(['answer_id'=>$data["answer_id"],"user_id"=>$data['sub_id'],'replay_name'=>$replay_name,'reply_id'=>$data['user_id'],"reply"=>$data["content"],"to_comment"=>$data['sub_id'],'to_comment_name'=>$to_comment_name]);
            return $res ? 1 : 0;
        }else{
            return -1;
        }
    }

    public function CReply(Request $request)
    {
        $user_id = session("user_id");// 用户id  登陆者(回复的id)
        $username = DB::table("user")->select("user_name")->where('user_id','=',$user_id)->first();
        $username = $username["user_name"];
        $data = $request->all();
        if($data['p_id'] == 0){
            $res = DB::table("comment")->insert(['answer_id'=>$data['answer_id'],'user_id'=>$data['user_id'],'reply_id'=>$user_id,'replay_name'=>$username,'reply'=>$data['replay'],'to_comment'=>$data['replay_id'],'to_comment_name'=>$data['replay_name'],'p_id'=>$data['comment_id']]);
            return $res ? 1 :0;
        }else{
            $replay = "@".$data['replay_name'].":".$data['replay'];
            $res = DB::table("comment")->insert(['answer_id'=>$data['answer_id'],'user_id'=>$data['user_id'],'reply_id'=>$user_id,'replay_name'=>$username,'reply'=>$replay,'to_comment'=>$data['replay_id'],'to_comment_name'=>$data['replay_name'],'p_id'=>$data['p_id']]);
            return $res ? 1 :0;
        }
    }

}


//无限极分类
function cate( $data , $p_id = 0){

    $arr = array();

    foreach($data as $key => $val){
        if($val['p_id'] == $p_id){
            $arr[$key] = $val;
            if($son = cate($data , $val["comment_id"])){
                $arr[$key]['son'] = $son;
            }
        }
    }
    return $arr;
}
