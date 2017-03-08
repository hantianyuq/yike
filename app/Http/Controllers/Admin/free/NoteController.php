<?php
namespace app\Http\Controllers\Admin\free;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NoteController extends Controller
{
	// 笔记展示
	public function noteShow()
	{
		$note = DB::table('free_note')->get();
		return view('admin.freeNote.noteShow',[
				'note'=>$note,
			]);
	}



	// 笔记删除
	public function noteDel(Request $request)
	{
		$id = $request->input('id');
		$res = DB::table('free_note')->where('note_id',$id)->delete();
		return $res ? 1 : 0;
	}



	// 笔记 即点即改更新
	public function noteUpdate(Request $request)
	{
		// 接受ajax 传值
		$status = $request->input('status');    // status 值
		$id = $request->input('id');      		// id 值
		//修改语句
		$res = DB::table('free_note')->where("note_id",$id)->update([
				'status'=>$status,
			]);
		return $res ? 1 : 0;   // 返回值
	}


}
