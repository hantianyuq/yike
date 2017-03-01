<?php

namespace App\Http\Controllers\Home\Pay;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class PayController extends Controller
{
    public function Shop()
    {
        return view("home.pay.shop");
    }
}
