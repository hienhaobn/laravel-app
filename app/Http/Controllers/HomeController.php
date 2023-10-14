<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];
    public function index()
    {
        $this->data['title'] = 'Trang chủ';

        return view('clients.home', $this->data);
    }

    public function getProductDetail($id)
    {
        return view('clients.products.detail', compact('id'));
    }
}
