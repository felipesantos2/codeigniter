<?php

namespace App\Controllers;

class MainController extends BaseController
{
    public function index()
    {
        return view('home');
    }
}
