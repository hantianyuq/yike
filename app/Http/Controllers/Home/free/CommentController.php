<?php
namespace app\Http\Controllers\Home\free;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class CommentController extends Controller

{


    public function show(\Illuminate\Http\Request $request)
    {
        $user = unserialize(Cookie::get('user'));
        $course_id = $request ->input('course_id');
        $section = DB::table('section_section')->select('section_id')->where('course_id',$course_id)->get();

        $chapter_id = [];
        foreach ($section as $k=>$v){
            $a = DB::table('free_chapter')->select('chapter_id')->where('section_id',$v['section_id'])->get();

            $chapter_id = array_merge($chapter_id ,$a);
        }
        $chapter_id = array_column($chapter_id,'chapter_id');
        $review = DB::table('free_review')->whereIn('chapter_id',$chapter_id)->paginate(1);
        foreach($review as $v){
            if(in_array(1,explode(',',rtrim($v['praise_people'])))){
               $v['praise_people'] = 1;
            }else{
                $v['praise_people'] = 0;
            }

        }
        $course = DB::table('section_course')->where('course_id',$course_id)->first();
        $cate = DB::table('section_category')->select('pid','category_id','category_name')->where('category_id',$course['category_id'])->first();
        if($cate['pid'] != 0){
            $cate_parent = DB::table('section_category')->select('pid','category_id','category_name')->where('category_id',$cate['pid'])->first();
             $arr[0]['name'] = $cate_parent['category_name'];
             $arr[0]['a'] = "?tid=".$cate_parent['category_id'];
        }
        $arr[1]['name'] = $cate['category_name'];
        $arr[1]['a'] = "?bid=".$cate['category_id'];

        return view('home.free.chapterShow',[
            'course'=>$course,
            'review'=>$review,
            'course_id'=>$course_id,
            'bread'=>$arr,
        ]);
    }

    /**
     * 点赞
     */
    public function praise(\Illuminate\Http\Request $request)
    {
        $review_id = $request->input('rid');
        $user = unserialize(Cookie::get('user'));
        $parise = DB::table('free_review')->select('praise_num','praise_people')->where('review_id',$review_id)->first();
        $res = DB::table('free_review')->where('review_id',$review_id)->update(['praise_num'=>$parise['praise_num']+1,'praise_people'=>$parise['praise_people'].$user['user_id'].',']);
        if($res){
            echo 1;
        }else{
            echo 0;
        }



    }

    /**
     * 取消赞
     */

    public function praiseCancel(\Illuminate\Http\Request $request)
    {

        $review_id = $request->input('rid');
        $user = unserialize(Cookie::get('user'));
        $parise = DB::table('free_review')->select('praise_num','praise_people')->where('review_id',$review_id)->first();
        $arr = explode(',',$parise['praise_people']);
        unset($arr[array_search($user['user_id'],$arr)]);
        $parise['praise_people'] = implode(',',$arr);
        $res = DB::table('free_review')->where('review_id',$review_id)->update(['praise_num'=>$parise['praise_num']+1,'praise_people'=>$parise['praise_people']]);

        if($res){
            echo 1;
        }else{
            echo 0;
        }


    }





















}