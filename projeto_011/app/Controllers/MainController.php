<?php

namespace App\Controllers;

class MainController extends BaseController
{
    // return view with title
    public function index()
    {
        return view('home', ['title' => 'CiGBurguer 2024']);
    }

    // return view with title
    public function products()
    {
        return view('products', ['title' => 'Products']);
    }

    // return view with title
    public function where_we_are()
    {
        return view('where_we_are', ['title' => 'Where We Are']);
    
    }

    public function pagina_3($id)
    {
        $data['id'] = $id;

        return view('pagina_3', $data);
    }

    public function metodo_3($id)
    {
        return view('pagina_3', ['id' => $id]);
    }
}
