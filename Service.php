<?php

namespace App\Controllers;

class Service extends BaseController
{
    public function index(): string
    {
        return view('services');
    }
}
