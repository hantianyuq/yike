<?php
namespace app\Http\Controllers\Home\free;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LearnController extends Controller
{
	// 章节展示
	public function learnShow()
	{
		return view('home.freeLearn.learnShow');
	}


	// 章节展示
	public function learn()
	{
		return view('home.freeLearn.learnShow');
	}


}