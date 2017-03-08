<?php
namespace app\Http\Controllers\Admin\free;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
	// 问题 展示
	public function issueShow()
	{
		$issue = DB::table('free_issue')->get();
		return view('admin.freeAnswer.issueShow',[
				'issue'=>$issue,
			]);
	}


	// 问题 删除
	public function issueDel(Request $request)
	{
		$id = $request->input('id');
		$res = DB::table('free_issue')->where("issue_id",$id)->delete();
		$res = DB::table('free_answer')->where("issue_id",$id)->delete();
		return $res ? 1 : 0;
	}


	// 回答 展示
	public function answerShow()
	{
		$answer = DB::table('free_answer')->get();
		return view('admin.freeAnswer.answerShow',[
				'answer'=>$answer,
			]);
	}


	// 回答 删除
	public function answerDel(Request $request)
	{
		$id = $request->input('id');
		$res = DB::table('free_answer')->where('answer_id',$id)->delete();
		$res = DB::table('free_answer')->where('p_id',$id)->delete();
		// var_dump($res);
		return $res ? 1 : 0;
	}


}