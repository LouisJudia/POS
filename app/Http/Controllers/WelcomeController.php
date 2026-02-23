<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
    	    return 'Hello World';
	}
    
    public function index() {
    	    return 'Selamat Datang';
    }

    public function about() {
        return 'Nama : Louis Judia B Sinaga <br>
        NIM : 2141720004';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID '.$id;
    }
    
    public function greeting(){
        return view('blog.hello')
            ->with('name','Louis')
            ->with('occupation','Astronaut');
    }


}
