<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function food()
    {
        return view('category.food');
    }

    public function beauty()
    {
        return view('category.beauty');
    }

    public function home()
    {
        return view('category.home');
    }

    public function baby()
    {
        return view('category.baby');
    }
}