<?php
namespace app\Http\Controllers\home\free;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;


class SectionController extends Controller

{

     public function lists(Request $request)
     {
         $tid = $request->input('tid');
         $bid = $request->input('bid');
         $top = DB::table('section_category')->where('pid',0)->get();
         if($bid != 0){

             $res = DB::table('section_course')->where('category_id',$bid)->paginate(5);
             $cate_one = DB::table('section_category')->select('category_name','pid')->where('category_id',$bid)->first();
             $body= DB::table('section_category')->where('pid',$cate_one['pid'])->get();

         }else if($tid != 0){

             $body = DB::table('section_category')->where('pid',$tid)->get();
             $where = array_column($body,'category_id');
             $res = DB::table('section_course')->whereIn('category_id', $where)->paginate(5);
             $cate_one['pid'] = $tid;
             $cate_one['category_name'] = "";

         }else{

             $res = DB::table('section_course')->paginate(5);
             $cate_one['pid'] =0;
             $cate_one['category_name'] = "";
             $body = DB::table('section_category')->whereNotIn('category_id', [0])->get();


         }


         return view('home.free.sectionLists',[
             'top'=>$top,
             'body'=>$body,
             'res'=>$res,
             'tid'=>$tid,
             'bid'=>$bid,
             'cate'=>$cate_one,
         ]);


     }


    /**
     * 展示章节的内容
     */

    public function show(Request $request)
    {
        $chapter_id = $request->input('chapter_id');
        $chapter = DB::table('free_chapter')->where('chapter_id',$chapter_id)->first();
        $user = unserialize(Cookie::get('user'));
        if(empty($user)){
            $review = DB::table('free_review')->where('chapter_id',$chapter_id)->paginate(1);
            return view('home.free.sectionShow',[
                'review'=>$review,
                'chapter'=>$chapter,
                'chapter_id'=>$chapter_id,
            ]);
        }else{
           exit('请先登录');
        }



    }


    /**
     * 发表评论
     */
    public function publish(Request $request)
    {
        $val = $request->input('val');
        $chapter_id = $request->input('chapter_id');
        $chapter_name = $request->input('chapter_name');
        $user = unserialize(Cookie::get('user'));
        $time = date('Y-m-d H:i:s',time());
        $res = DB::table('free_review')->insert([
            'chapter_id'=>$chapter_id,
            'chapter_name'=>$chapter_name,
            'user_id'=>'1',
            'user_name'=>'nans',
            'time'=>$time,
            'review_content'=>$val,
        ]);
        if($res){
            echo 1;
        }else{
            echo 0;
        }

    }



}