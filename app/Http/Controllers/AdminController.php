<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
    // public function notice() 
    // {
    //     return view('admin.notice');
    // }

    public function manage()
    {
        if (Auth::user()->super_admin === 1) {

            $users = User::latest()->get(); 
            return view('admin.users', compact('users'));
        }
        else {
            return redirect('/admin')->with('error', 'Unauthorised page');
        }
        
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('profile.index', compact('user'));
    }


    public function edit($id)
    {
        $user = User::find($id);
         return view('profile.edit');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->image = $request->input('image');
        if($request->hasfile('image')){     
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('public/Admins/', $filename);
            $user->image = $filename;
        }else {
            return $request;
            $user->image = "";
        }
        $data =array(
            "name"=> $user->name,
            "email"=> $user->email,
            "image"=> $filename
    );
        User::where('id', $id)->update($data);
            $user->update();

         return redirect('/admin');
    }

    public function deleteAdmin($user_id)
    {
        if (Auth::user()->super_admin === 1) {

            User::where('id',$user_id)->delete();
            return redirect('/admin')->with('success','Admin Deleted  Successfully');
        }
        return redirect('/admin');
        }

}
