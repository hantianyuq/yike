<?php
namespace app\Http\Controllers\Admin\Real;

/**
 * 实战课程轮播图控制器
 */

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Model\Admin\Real\TurnsModel;

class TurnsController extends Controller
{
    public function TurnsShow()
    {
        $turns_arr = DB::table("real_turns")->get();
        return view("admin.real.turns")->with("turns_arr",$turns_arr);
    }

    public function TurnsAdd(Request $request)
    {
        if($request->isMethod("get")){
            return view("admin.real.turns_add");
        };
        if($request->isMethod("post")){
            $post_info = $request->input();
            if($post_info){
                $model = new TurnsModel();
                $result = $model->add($post_info);
                if($result){
                    return back()->with("msg","添加成功");
                }
            }
        }
    }

    public function TurnsUpload()
    {
        $file = Input::file("Filedata");
        if ($file->isValid()) {
            $realPath = $file -> getRealPath();                     //临时文件的绝对路径
            $entension = $file -> getClientOriginalExtension();     //上传文件的后缀
            $newName = date("YmdHis").mt_rand(1000,9999).'.'.$entension;
            $path = $file -> move(base_path().'/public/real_turns',$newName);
            $return = "real_turns/".$newName;
            return $return;
        }
    }

}