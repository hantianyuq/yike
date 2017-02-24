<?php
namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CategrayController extends Controller

{
    /**
     * 后台首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        $cate = DB::table('yi_section_categray')->get();
        return view("admin.cate.show",[
            'cate'=>$cate,
        ]);
    }

    public function addDo()
    {
        $data[] = Input::get('categray_name');
        $data[] = Input::get('pid');
        $cate = DB::table('yi_section_categray')->where('categray_name',$data[0])->first();
        if(empty($cate)){
            $res = DB::insert('insert into yi_section_categray (categray_name, pid) values (?, ?)', $data);
            if($res){

                return redirect('admin/cate/add');

            }else{

                return redirect('admin/cate/add');

            }
        }else{

            exit('此分类已经存在');

        }


    }

    /**
     * 分类展示
     */
    public function show()
    {
        $cate = DB::table('yi_section_categray')->get();
        $cate = $this->arraySort($cate);
        return view('admin.cate.list',[
            'cate'=>$cate,
        ]);

    }

    public function arraySort($arr,$pid = 0,$level=0){
        static $res = [];
        foreach($arr as $k=>$v){
            if($v['pid'] == $pid){
                $v['level'] = $level;
                $res[$k] = $v;
                $this->arraySort($arr,$v['categray_id'],$level+1);

            }
        }
        return $res;

    }


    /**
     * 删除
     */

    public function del(){
        $id = Input::get('cid');
        $res = DB::table('yi_section_categray')->where('pid',$id)->first();
        if(empty($res)){
            $deleted = DB::delete("delete from yi_section_categray where categray_id =$id");
            if($deleted){
                echo 1;
            }else{
                echo 0;
            }
        }else{
            echo -1;
        }


    }

    /**
     * 修改
     */
    public function update()
    {

       $id =  Input::get('id_');
        $cate = DB::table('yi_section_categray')->get();
        foreach($cate as $k=>$v){
            if($v['categray_id'] == $id){
                $data = $v;
                unset($cate[$k]);
            }

        }
       return view('admin.cate.update',[
           'cate'=>$cate,
           'data'=>$data,

       ]);


    }


    public function updateDo()
    {
        $id = Input::get('cid');
        $categray_name = Input::get('categray_name');
        $pid = Input::get('pid');
        $res = DB::table('yi_section_categray')->where('categray_name',$categray_name)->first();
        if(empty($res)){

            $affected = DB::update("update yi_section_categray set categray_name ='".$categray_name."',pid=$pid  where categray_id = ?", ["$id"]);
            if($affected){
                return redirect('admin/cate/show');

            }else{
                exit('修改失败');
            }

        }else{
            exit('已存在这个分类');
        }
    }





































}