<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;


class UserController extends BaseController
{

    private $snake_case;
    public $cameCase;

    public function camel_omething()
    {

       $var_case = "hello world";

       return $var_case;

    }

}
