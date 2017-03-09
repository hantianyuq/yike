<?php

namespace App\Http\Model\Home\Real;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RealIndexModel extends Model
{
    protected $_table = 'real_turns';

    public function ShowTurns()
    {
        return DB::table($this->_table)->orderBy("real_turns_sort")->limit(3)->get();
    }


}
