<?php

namespace App\Controllers;

class Solution extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Solution'
        ];

        return view('solution', $data);
    }
}
