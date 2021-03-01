<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Mail\NotificationMail;

class RegistrationController extends Controller
{
    public function create() 
    {  
        if (Auth::user()->super_admin === 1) {
            return view('admin.create');
        }
        else {
            return redirect('/admin');
        }
        
    }

    public function store() 
    {
        
        //Validate the form
        $this->validate(request(), [
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required|confirmed'
        ]);

        //Create and save the admin

        $user = User::create([
            'name' => request('name'), 
            'email' => request('email'), 
            'password' => bcrypt(request('password'))
            ]);
        
        //Sign them in
        //Auth::login($user);

        //Redirect to the admin the page
        return redirect('admin');
    }

    
}
