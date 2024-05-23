<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{

    private $snakeCase;
    protected $snakeCaseProtected;
    public $snake_casePublic;

    public function camel_omething()
    {

       $var_case = "hello world";
       $cameCase = "camel Case";

       return $var_case . $cameCase;

    }
}
