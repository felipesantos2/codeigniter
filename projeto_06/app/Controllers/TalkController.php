<?php

namespace App\Controllers;

class TalkController extends BaseController
{
    public function index()
    {
    }

    public function word($word)
    {
        echo 'Palavra -> '.$word;
    }

    public function words($value1, $value2)
    {
        echo $value1;
        echo '<br>';
        echo $value2;
    }

    public function other($value1 = 'Felipe')
    {
        echo $value1;
    }
}
