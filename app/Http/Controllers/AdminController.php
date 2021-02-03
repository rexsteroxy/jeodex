<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminController extends Controller
{
    public function create() 
    {
        return view('admin.create');
    }

    public function store() 
    {
        
        //Validate the form
        $this->validate(request(), [
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required|confirmed'
        ]);

        //Create and save the user

        $user = User::create([
            'name' => request('name'), 
            'email' => request('email'), 
            'password' => bcrypt(request('password'))
            ]);
        
       

        //Redirect to the home the page
        return redirect('admin.index');
    }


    public function index() 
    {
        return view('admin.index');
    }

    // Method to return the view for the Notification menu in the admin navabr
    public function notice() 
    {
        return view('admin.notice');
    }

}
