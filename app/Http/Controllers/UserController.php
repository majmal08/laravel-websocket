<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;


class UserController extends BaseController
{

    public function camel_omething()
    {

       $var_case = "hello world";
       $var = "Not using";

       return $var_case;

    }

}
