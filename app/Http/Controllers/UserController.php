<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexCase()
    {
       $varCase = "hello world";
       return $varCase; //this is the default comment to check the rules


    }
}
