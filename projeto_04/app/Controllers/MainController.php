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

    public function ph_any($valor1, $valor2)
    {
        echo $valor1.' '.$valor2;
    }

    public function ph_segment($valor1)
    {
        echo $valor1;
    }

    public function ph_num($valor1, $valor2)
    {
        echo $valor1;
        echo '<br>';
        echo $valor2;
    }

    public function ph_alpha($valor1, $valor2)
    {
        echo $valor1;
        echo '<br>';
        echo $valor2;
    }

    public function ph_alphanum($valor1, $valor2)
    {
        echo $valor1;
        echo '<br>';
        echo $valor2;
    }
}
