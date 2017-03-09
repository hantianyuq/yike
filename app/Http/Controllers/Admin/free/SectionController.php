<?php
namespace app\Http\Controllers\Admin\free;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionController extends Controller

{
    /**
     * 章节添加
     */
    public function add(){
        $course = DB::table('section_course')->select('course_id','course_name')->get();
       /* $section = DB::table('section_section')->select('section_id','name')->where('status','1')->where('pid',0)->get();*/
        return view('admin.freeSection.add',[

            'course'=>$course,

        ]);
    }

    public function addDo(Request $request)
    {
        $name = $request->input('name');
        $course = $request->input('course');
        $all = $request->input('all');
        if($name != "" || $course !=  "" || $all !=  ""){

            $result = DB::table('section_section')->insert(
                    ['name'=>$name,'pid'=>$section,'course_id'=>$course,'intro'=>$all]
            );

            if($result){

                return redirect('admin/section/list');

            }else{

                exit('添加失败');
            }

        }else{

            exit('不能有为空项');

        }



    }

    /**
     * 章节展示
     */
    public function lists()
    {
        $section = DB::table('section_section')->get();
        return view('admin.freeSection.lists',[
            'section'=>$section,
        ]);


    }

    /**
     * 删除
     *
     */

    public function del(Request $request){
        $id = $request->input('id');
        $res = DB::table('section_section')->where('section_id',$id)->delete();
        if($res){
            echo 1;
        }else{
            echo 0;
        }

    }




    public function update(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $val = $request->input('val');
        $res = DB::table('section_section')->where('section_id',$id)->update([
            "$name"=>$val,
        ]);

        if($res){
            echo 1;
        }else{
            echo 0;
        }

    }


   /* public function arraySort($arr)
    {
        $res = [];
        foreach($arr as $k=>$v){
            if($v['pid']==0){

                $res[$v['section_id']] = $v;

            }else{
                $res[$v['pid']]['child'][] = $v;

            }
        }


        return $res;

    }*/








































}