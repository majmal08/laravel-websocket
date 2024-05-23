<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{

    private $snake_case;
    protected $snake_case_protected;
    public $snake_case_public;

    public function camel_omething()
    {

       $var_case = "hello world";
       $cameCase = "camel Case";

       return $var_case . $cameCase;

    }
}
