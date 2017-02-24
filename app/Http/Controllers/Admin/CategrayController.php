<?php
namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategrayController extends Controller

{
    /**
     * 后台首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $cate = DB::table('yi_section_categray')->get();
        var_dump($this->array_sort($cate));
        return view("admin.cate.show",[
            'cate'=>$cate,
        ]);
    }


    public function array_sort($arr,$level=0){
        $res = [];
        foreach($arr as $k=>$v){
            if($level == $v['pid']){
                $res[] = $v;
            }else{
                
            }
        }

    }










































}