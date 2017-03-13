<?php
namespace app\Http\Controllers\Admin\free;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChapterController extends Controller

{
    /**
     * 章节添加
     */
    public function add(){
        $section = DB::table('section_section')->select('section_id','name')->get();
        return view('admin.freeChapter.add',[

            'section'=>$section,

        ]);
    }

    public function addDo(Request $request)
    {
        $name = $request->input('name');
        $section = $request->input('course');
        $all = $request->input('all');
        if($name != "" || $section !=  "" || $all !=  ""){

            $result = DB::table('free_chapter')->insert(
                ['chapter_name'=>$name,'section_id'=>$section,'link'=>$all]
            );

            if($result){

                return redirect('admin/chapter/lists');

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
        $chapter= DB::table('free_chapter')->get();
        return view('admin.freeChapter.lists',[
            'chapter'=>$chapter ,
        ]);


    }


    /**
     * 删除
     *
     */

    public function del(Request $request){
        $id = $request->input('id');
        $res = DB::table('free_chapter')->where('chapter_id',$id)->delete();
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
        $res = DB::table('free_chapter')->where('chapter_id',$id)->update([
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