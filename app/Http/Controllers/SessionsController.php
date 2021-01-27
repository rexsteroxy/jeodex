<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except'=> 'destroy']);
    }

    public function create()
    {
        return view('admin.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin');
        }

        return back()->withErrors([
            'Please check your credentials and try again.'
        ]);
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->home();
    }
}
