<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {
        echo "This is for testing page<br> and my name is $this->name";
    }

    public function parameterFunc($warna = 'biru')
    {
        echo "warna kesukaan saya adalah $warna bisa dikosongin url nya bisa diganti atau ditambah";
    }
}
