<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function welcome(){
        return view('welcome');
    }
    public function tentang(){
        return view('tentang');
    }
    public function galery(){
        return view('galery');
    }
    public function berita(){
        return view('berita');
    }
    public function kontak(){
        return view('kontak');
    }
}
