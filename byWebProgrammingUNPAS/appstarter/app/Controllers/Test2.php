<?php

namespace App\Controllers;

class Test2 extends BaseController
{
    public function index($fav1 = '', $fav2 = '')
    {
        echo "my favorite things are $fav1 and $fav2";
    }
}
