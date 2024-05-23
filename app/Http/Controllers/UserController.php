<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{


    public function camel_omething()
    {

       $var_case = "hello world";
       $cameCase = "camel Case";

       return $var_case . $cameCase;

    }
}
