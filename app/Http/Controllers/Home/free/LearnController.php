<?php
namespace app\Http\Controllers\Home\free;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LearnController extends Controller
{
	// 章节展示
	public function learnShow(Request $request)
	{	
		$id = $request->input('id');
		// $id = '1';
		$course = DB::table('section_course')->where('course_id',$id)->first();

		$section = DB::table('section_section')->where('course_id',$id)->get();
		foreach($section as $k=>$v){
			$section[$k]['child'] = DB::table('free_chapter')->where('section_id',$v['section_id'])->get();
		}

		return view('home.freeLearn.learnShow',[
				'course'=>$course,
				'section'=>$section,
			]);
	}


	// 提问
	public function learnIssue(Request $request)
	{	
		$id = $request->input('id');
		// 课程查询
		$course = DB::table('section_course')->where('course_id',$id)->first();
		// 问题查询
		$issue = DB::table('free_issue')->where('course_id',$id)->get();
		// 查询有多少回答
		foreach($issue as $k=>$v){
			$issue[$k]['hui'] = count(DB::table('free_answer')->where('issue_id',$v['issue_id'])->get());

		}	
		return view('home.freeLearn.learnIssue',[
				'course'=>$course,
				'issue'=>$issue,
			]);
	}




	// 回答回复展示
	public function learnAnswer(Request $request)
	{	
		$id = $request->input('id');
		// 问题查询
		$issue = DB::table('free_issue')->where('issue_id',$id)->first();
		// 答案第一层查询
		$answer = DB::table('free_answer')->where('issue_id',$id)->where('p_id','0')->get();
		
		foreach($answer as $k=>$v){
			$answer[$k]['xin'] = DB::table('free_answer')->where('one_id',$v['answer_id'])->get();
		}
		// var_dump($answer);die;
		$name = [];
		foreach($answer as $k=>$v){
			$name[$v['answer_id']] = $v['user_name'];
			if(!empty($v['xin'])){
				foreach($v['xin'] as $kk=>$vv){
					$name[$vv['answer_id']] = $vv['user_name'];
            		
                 }
			}
				
		}
		// 显示 谁回复谁
		foreach($answer  as $k=>$v){
			foreach($v['xin'] as $kk=>$vv){
				$answer[$k]['xin'][$kk]['user_name'] = $answer[$k]['xin'][$kk]['user_name']."回复：".$name[$vv['p_id']]; 
			    
			}
			
		}
		// 赋值前台
		return view('home.freeLearn.learnAnswer',[
				'issue'=>$issue,
				'answer'=>$answer,
			]);
	}



	// 回答提交处理
	public function learnAnswer_do(Request $request)
	{

		// $user = unserialize($_COOKIE['user']);
		$user_id = '5';
		$user_name = '斯柯达';
		// $user_name = $user['user_name'];  	// 用户名
		// $user_id = $user['user_id'];		// 用户ID
		$content = $request->input('content');  
		$issue_id = $request->input('issue_id');
		$time = date('Y-m-d H:i:s');

		$res = DB::table('free_answer')->insert([
				'user_id'=>$user_id,
				'user_name'=>$user_name,
				'answer_content'=>$content,
				'answer_time'=>$time,
				'issue_id'=>$issue_id,
			]);

		return $res ? 1 : 0;

	}



	// 回复提交处理
	public function learnRevert(Request $request)
	{
		// $user = unserialize($_COOKIE['user']);
		$user_id = '7';
		$user_name = '黑衣人';
		// $user_name = $user['user_name'];  	// 用户名
		// $user_id = $user['user_id'];		// 用户ID
		$one = $request->input('one');
		$p_id = $request->input('p_id');
		$issue = $request->input('issue');
		$content = $request->input('content');
		$time = date('Y-m-d H:i:s');
		$res = DB::table('free_answer')->insert([
				'one_id'=>$one,
				'p_id'=>$p_id,
				'issue_id'=>$issue,
				'answer_content'=>$content,
				'answer_time'=>$time,
				'user_id'=>$user_id,
				'user_name'=>$user_name,
			]);
		return $res ? 1 : 0;

	}



	// 笔记
	public function learnNote(Request $request)
	{
		$id = $request->input('id');       
		// 查询课程
		$course = DB::table('section_course')->where('course_id',$id)->first();
		// 查询笔记
		$note = DB::table('free_note')->where('course_id',$id)->get();
		var_dump($note);
		return view('home.freeLearn.learnNote',[
				'course'=>$course,
				'note'=>$note,
			]);
	}



}