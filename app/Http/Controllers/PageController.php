<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        
        return view('index');
    }

    public function about()
    {
        
        return view('about');
    }
    public function domestic()
    {
        
        return view('domestic');
    }
    public function ecommerce()
    {
        
        return view('ecommerce');
    }
    public function login()
    {
        
        return view('login');
    }

    public function register()
    {
        
        return view('register');
    }

    public function contact()
    {
        
        return view('contact');
    }
}
