<?php

namespace App\Controllers;

class MainController extends BaseController
{
    // return view with title
    public function index()
    {
        return view('home', ['title' => 'CiGBurguer']);
    }

    // return view with title
    public function products()
    {
        return view('products', ['title' => 'Products']);
    }

    // return view with title
    public function where_we_are()
    {
        return view('products', ['title' => 'Where We Are']);
    }
}
