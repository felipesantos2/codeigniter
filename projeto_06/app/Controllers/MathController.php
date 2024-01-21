<?php

namespace App\Controllers;

class MathController extends BaseController
{
    public function index()
    {
    }

    public function add($num1, $num2)
    {
        echo "{$num1} + {$num2} = ".$num1 + $num2;
    }

    public function sub($num1, $num2)
    {
        echo "{$num1} - {$num2} = ".$num1 - $num2;
    }

    public function mult($num1, $num2)
    {
        echo "{$num1} x {$num2} = ".$num1 * $num2;
    }

    public function divide($num1, $num2)
    {
        echo "{$num1} / {$num2} = ".$num1 / $num2;
    }
}
