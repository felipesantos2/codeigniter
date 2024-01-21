<?php

namespace App\Controllers;

class MainController extends BaseController
{
    public function index()
    {
        echo view('html_header');
        echo view('nav');
        echo view('home');
        echo view('html_footer');
    }

    public function about()
    {
        echo view('html_header');
        echo view('nav');
        echo view('about');
        echo view('html_footer');
    }

    public function services()
    {
        echo view('html_header');
        echo view('nav');
        echo view('services');
        echo view('html_footer');
    }
}
