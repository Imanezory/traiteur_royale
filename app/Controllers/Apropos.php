<?php

namespace App\Controllers;

class Apropos extends BaseController
{
    public function index(): string
    {
        return view('a-propos');
    }
}
