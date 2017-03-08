<?php

namespace App\Http\Model\Home\Real;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ClassChapterModel extends Model
{
    protected $_table = 'real_chapter';
    /**
     * 课程章节
     * @param $course_id
     */
    public function ClassChapter($course_id)
    {
        return DB::table($this->_table)->where("real_course_id",$course_id)->get();
    }
}
