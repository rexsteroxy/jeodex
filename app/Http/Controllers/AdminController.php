<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.admin_index');
    }

    public function signUp()
    {
        return view('admin.signup');
    }

    public function signIn()
    {
        return view('admin.signin');
    }

    public function upload()
    {
        return view('admin.upload');
    }

   
}
