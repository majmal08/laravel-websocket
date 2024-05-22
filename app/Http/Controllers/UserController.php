<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index_case(Request $request)
    {
       $var_case = "hello world";
       return $var_case;


    }
}
