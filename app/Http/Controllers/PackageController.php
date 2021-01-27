<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Models\Package;

class PackageController extends Controller
{

    public function uploadPackage()
    {
        return view('packages.upload');
    }

    public function addPackage(Request $request)
    {
        $this->validate($request, [
            "tracking_id"=>"required",
            "sender_name"=>'required',
            "sender_location"=>'required',
            "receiver_name"=>'required',
            "receiver_email"=>'required',
            "receiver_phonenumber"=>'required',
            "receiver_address"=>'required',
            "destination"=>'required',
            "delivery_date"=>'required',
            "description"=>'required',
            "weight"=>'required',
            "cost"=>'required'
           
        ]);
            
            $package = new Package;
            //$package->user_id = Auth::user()->id;
            $package->tracking_id = $request->input('tracking_id');
            $package->sender_name = $request->input('sender_name');
            $package->sender_location = $request->input('sender_location');
            $package->reciever_name = $request->input('reciever_name');
            $package->reciever_email = $request->input('reciever_email');
            $package->reciever_phonenumber = $request->input('reciever_phonenumber');
            $package->reciever_address = $request->input('reciever_address');
            $package->destination = $request->input('destination');
            $package->delivery_date = $request->input('delivery_date');
            $package->description = $request->input('description');
            $package->weight = $request->input('weight');
            $package->cost = $request->input('cost');
            $package->save();

           return redirect('/admin')->with('success','Package Uploaded Successfully');
    }

    public function show(Package $package)
    {
        $package = Package::find($id);

        return view('package.show');
    }

}
