<?php
namespace app\Http\Controllers\Admin\free;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CourseController extends Controller

{
	// 课程展示
	public function courseShow()
	{
		$course = DB::table('section_course')->get();
		return view('admin.freeCourse.courseShow',[
				'course'=>$course,
			]);
	}



	// 课程添加
	public function courseAdd(Request $request)
	{	
		if($request->input()){
			$name = $request->input('name');
			$rank = $request->input('rank');
			$intro = $request->input('intro');
			$cate = $request->input('cate');
			$res = DB::table('section_course')->insert([
					'course_name'=>$name,
					'course_rank'=>$rank,
					'course_intro'=>$intro,
					'category_id'=>$cate,
				]);
			if($res){
				return redirect()->action('Admin\free\CourseController@courseShow');
			}else{
				echo "添加失败";
			}
		}else{
			$cate = DB::table('section_category')->where("pid",">","0")->get();
			return view('admin.freeCourse.courseAdd',[
					'cate'=>$cate,
				]);
		}
	}


	// 课程删除
	public function courseDel(Request $request)
	{
		$id = $request->input('id');
		$res = DB::table('section_course')->where("course_id",$id)->delete();
		return $res ? 1 : 0;
	}


	// 课程编辑
	public function courseEdit(Request $request)
	{
		$id = $request->input('id');
		$course = DB::table('section_course')->where("course_id",$id)->first();
		$cate = DB::table('section_category')->get();
		return view('admin.freeCourse.courseEdit',[
				'course'=>$course,
				'cate'=>$cate,
			]);
		
	}


	// 课程编辑处理
	public function courseEdit_do(Request $request)
	{
		$name = $request->input('name');
		$rank = $request->input('rank');
		$cate = $request->input('cate');
		$intro = $request->input('intro');
		$id = $request->input('id');
		$res = DB::table('section_course')->where('course_id',$id)->update([
				'course_name'=>$name,
				'course_rank'=>$rank,
				'course_intro'=>$intro,
				'category_id'=>$cate,
			]);
		if($res){
			return redirect()->action('Admin\free\CourseController@courseShow');
		}else{
			return redirect()->action('Admin\free\CourseController@courseShow');
		}
	}


}