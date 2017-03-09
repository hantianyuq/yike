<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function p($var){
        echo "<pre>";
        if(is_bool($var)){
            var_dump($var);
        }else if (is_null($var)){
            var_dump(NULL);
        }else{
            echo print_r($var,true);
        }
    }
}
