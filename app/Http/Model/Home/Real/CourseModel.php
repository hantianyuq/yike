<?php

namespace App\Http\Model\Home\Real;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CourseModel extends Model
{
    protected $_table = 'real_course';

    public function ShowCourse()
    {
        return DB::table($this->_table)->get();
    }

}
