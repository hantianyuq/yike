<?php

namespace App\Http\Model\Admin\Real;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TurnsModel extends Model
{
    protected $_table = "real_turns";

    public function add($array)
    {
        $add_array = [
            'real_turns_name' => $array['real_turns_name'],
            'real_turns_path' => $array['real_turns_path'],
            'real_turns_sort' => $array['real_turns_sort']
        ];
        $result = DB::table($this->_table)->insert($add_array);
        return $result;
    }
}
