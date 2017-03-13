<?php
namespace app\Http\Controllers\Admin\free;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReviewController extends Controller

{


    public function show()
    {

        $res = DB::table('free_review')->get();
        return view('admin.freeReview.show',[
            'review'=>$res,
        ]);


    }

    public function del(Request $request)
    {
        $id = $request->input('id');
        $res = DB::table('free_review')->where('review_id',$id)->delete();
        if($res){
            echo 1;
        }else{
            echo 0;
        }

    }
























}