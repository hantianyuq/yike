<?php
namespace app\Http\Controllers\Home;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

/**
 * 猿问前台
 */
class AnswerController extends Controller

{

    /*
     *展示
     */
    public function Index(Request $request)
    {
        //模拟登录
        session(["user_id"=>1]);
        //判断是否登录
        if($request->session()->get("user_id")){
            $is_login = 1;
        }else{
            $is_login = 0 ;
        }
        //推荐数据
        $recommend = DB::table("answer")->get();
//        print_r($recommend);die;
        //获得推荐数据的类型3维
        foreach($recommend as $key=>$val){
            $own_type = explode(",",$val['type']);
            $data[] = DB::table('answer_type')->whereIn('type_id',$own_type)->get();
        }
//        print_r($data);die;
        //将类型的3维数组转换成2维
        for($k = 0;$k<count($data);$k++){
            for($i = 0;$i<count($data[$k]);$i++){
                $type[$k][] = $data[$k][$i]['type_name'];
            }
        }
//          将2维数组的类型数据放入推荐的数据中
        for($i = 0;$i<count($recommend);$i++){
            $t = implode(",",$type[$i]);
            array_push($recommend[$i],$t);
        }
//        print_r($recommend);die;
        return view("home.index",['is_login'=>$is_login,'recommend'=>$recommend]);
    }

    public function MyAnswer(Request $request)
    {
        if(!$request->session()->get("user_id")){
            return view('home.turn');
        }
        //获取分类
        $data = DB::table("answer_type")->get();
        return view('home.myanswer',['type'=>$data]);
    }

    public function AddMyAnswer(Request $request)
    {
        if(!$request->session()->get("user_id")){
            //用户名不存在 返回值为-1
            return -1;
        }

        $user_id = $request->session()->get("user_id");
        $data = $request->all();

        if(empty($data["type"])){
            //没选类别 返回-2
            return -2;
        }
        if(count($data['type'])>3){
         //类型最多为3个
            return -5;
        }
        if(empty($data['title'])){
            //没输入标题  返回值为-3
            return -3;
        }
        if(empty(trim($data['content']))){
            //没输入内容  返回值为-4
            return -4;
        }
        $type = implode(",",$data["type"]);
        $title = $data['title'];
        $content = $data['content'];
        $res = DB::table('answer')->insert(['answer_title'=>$title,"answer_content"=>$content,'type'=>$type,"user_id"=>$user_id]);
        return $res ? 1 : 0 ;
    }

    //中转页面
    public function Turn()
    {
        return view("home/turn");
    }


}