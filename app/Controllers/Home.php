<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function products(){
        return view('products');
    }

    public function where_we_are(){
        return view('where_we_are');
    }
}
