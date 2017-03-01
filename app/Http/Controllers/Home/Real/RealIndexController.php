<?php

namespace App\Http\Controllers\Home\Real;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Model\Home\Real\RealIndexModel;
use App\Http\Model\Home\Real\DirectionModel;
use App\Http\Model\Home\Real\CourseModel;
use App\Http\Model\Home\Real\ClassChapterModel;

class RealIndexController extends Controller
{
    /**
     * 实战首页展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
//    public function RealIndex()
//    {
//        //查出实战首页轮播图
//        $real_turns = new RealIndexModel();
//        $Turns = $real_turns->ShowTurns();
//        //查出实战的方向分类
//        $real_direction = new DirectionModel();
//        $Direction = $real_direction->ShowDirection();
//        //查出实战的全部课程
//        $real_course = new CourseModel();
//        $Course = $real_course->ShowCourse();
//
//        return view('home.real.coding', ['turns' => $Turns,'direction'=>$Direction,'course'=>$Course,'result'=>-1]);
//    }

    /**
     * 首战首页分类
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Direction(Request $request)
    {
        $result = $request->input();
        $real_turns = new RealIndexModel();
        $Turns = $real_turns->ShowTurns();
        $real_direction = new DirectionModel();
        $Direction = $real_direction->ShowDirection();
        $Course=new CourseModel();
        $real_course=$Course->ShowCourse();
        return view("home.real.coding",['turns' => $Turns,'direction'=>$Direction,'course'=>$real_course,'result'=>$result]);
    }

    /**
     * 课程详情页
     */
    public function CouresClass(Request $request)
    {
        if($request->isMethod("get")){
            $course_id = $request->input("real_course_id");
            $real_coures = new CourseModel();
            $class_course = $real_coures->CourseClass($course_id);
            return view("home.real.class",['course_id'=>$course_id,'class_course'=>$class_course]);
        };
    }

    /**
     * 课程章节
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ClassChapter(Request $request)
    {
        if($request->isMethod("get")){
            $course_id = $request->input("real_course_id");
            //课程详情
            $real_coures = new CourseModel();
            $class = $real_coures->CourseClass($course_id);
            //课程对应章节
            $real_class = new ClassChapterModel();
            $chapter = $real_class->ClassChapter($course_id);
            return view("home.real.class_chapter",['course_id'=>$course_id,'class_course'=>$class,'chapter'=>$chapter]);
        }
    }

    public function ClassCommit(Request $request)
    {
        if($request->isMethod("get")){
            $course_id = $request->input("real_course_id");
            //课程详情
            $real_coures = new CourseModel();
            $class = $real_coures->CourseClass($course_id);
            //课程对应章节
            $real_class = new ClassChapterModel();
            $chapter = $real_class->ClassChapter($course_id);
            return view("home.real.commit",['course_id'=>$course_id,'class_course'=>$class,'chapter'=>$chapter]);
        }
    }
}
