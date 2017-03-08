<?php

namespace App\Http\Model\Home\Real;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CourseModel extends Model
{
    protected $_table = 'real_course';

    /**
     * 实战首页展示全部内容
     * @return mixed
     */
    public function ShowCourse()
    {
        return DB::table($this->_table)->get();
    }

    /**
     * 实战课程详情页
     */
    public function CourseClass($course_id)
    {
        return DB::table($this->_table)->where("real_course_id",$course_id)->first();
    }


}
