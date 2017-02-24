<?php
namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller

{
    /**
     * 后台首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        $cate = DB::table('section_category')->get();
        return view("admin.cate.show",[
            'cate'=>$cate,
        ]);
    }

    public function addDo()
    {
        $data[] = Input::get('category_name');
        $data[] = Input::get('pid');
        $cate = DB::table('section_category')->where('category_name',$data[0])->first();
        if(empty($cate)){
            $res = DB::insert('insert into yi_section_category (category_name, pid) values (?, ?)', $data);
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
        $cate = DB::table('section_category')->get();
        $cate = $this->arraySort($cate);
        var_dump($cate);
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
                $this->arraySort($arr,$v['category_id'],$level+1);

            }
        }
        return $res;

    }


    /**
     * 删除
     */

    public function del(){
        $id = Input::get('cid');
        $res = DB::table('section_category')->where('pid',$id)->first();
        if(empty($res)){
            $deleted = DB::delete("delete from yi_section_category where category_id =$id");
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
        $cate = DB::table('section_category')->get();
        foreach($cate as $k=>$v){
            if($v['category_id'] == $id){
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
        $category_name = Input::get('category_name');
        $pid = Input::get('pid');
        $res = DB::table('section_category')->where('category_name',$category_name)->first();
        if(empty($res)){

            $affected = DB::update("update yi_section_category set category_name ='".$category_name."',pid=$pid  where category_id = ?", ["$id"]);
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