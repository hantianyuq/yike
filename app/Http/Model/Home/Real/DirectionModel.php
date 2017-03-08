<?php

namespace App\Http\Model\Home\Real;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DirectionModel extends Model
{
    protected $_table = 'real_direction';

    public function ShowDirection()
    {
        return DB::table($this->_table)->orderBy("direction_sort")->get();
    }

}
