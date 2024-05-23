<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index_case()
    {
       $var_case = "hello world";
       $var = 'test';
       return $var_case;

    }
}
