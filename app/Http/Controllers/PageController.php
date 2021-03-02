<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $index_page = true;
        $about_page = false;
        $contact_page = false;
        

        return view('index', compact('index_page','about_page','contact_page'));
    }

    public function about()
    {

        $index_page = false;
        $about_page = true;
        $contact_page = false;
        
        return view('about',compact('index_page','about_page','contact_page'));
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

    public function contact()
    {
        $index_page = false;
        $about_page = false;
        $contact_page = true;
        
        
        return view('contact',compact('index_page','about_page','contact_page'));
    }

  
}
