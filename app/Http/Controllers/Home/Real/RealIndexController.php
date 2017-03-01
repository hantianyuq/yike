<?php

namespace App\Http\Controllers\Home\Real;

use App\Http\Model\Home\Real\CourseModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Model\Home\Real\RealIndexModel;
use App\Http\Model\Home\Real\DirectionModel;

class RealIndexController extends Controller
{
    public function RealIndex()
    {
        $real_turns = new RealIndexModel();
        $Turns = $real_turns->ShowTurns();
        $real_direction = new DirectionModel();
        $Direction = $real_direction->ShowDirection();
        return view('home.real.coding', ['turns' => $Turns,'direction'=>$Direction]);
    }


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
}
