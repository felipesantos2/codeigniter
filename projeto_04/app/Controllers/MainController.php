<?php

namespace App\Controllers;

class MainController extends BaseController
{
    public function index()
    {
        echo 'Estou no método index';
    }

    public function falar($palavra)
    {
        echo 'Estou a falar com o '.ucfirst($palavra);
    }
}
