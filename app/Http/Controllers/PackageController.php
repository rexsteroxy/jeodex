<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Models\Package;

class PackageController extends Controller
{

    // Returning all the available packages in the database
    public function index()
    {
        $packages = Package::latest()->get();
        return view('packages.index')->with('packages', $packages);
    }


    //Viewing the Package Upload Form
    public function uploadPackage()
    {
        return view('packages.upload');
    }

    //Adding or Uploading  Packages 
    public function addPackage(Request $request)
    {
        $this->validate($request, [
            "tracking_id"=>'required',
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
        
            $package->tracking_id = $request->input('tracking_id');
            $package->sender_name = $request->input('sender_name');
            $package->sender_location = $request->input('sender_location');
            $package->receiver_name = $request->input('receiver_name');
            $package->receiver_email = $request->input('receiver_email');
            $package->receiver_phonenumber = $request->input('receiver_phonenumber');
            $package->receiver_address = $request->input('receiver_address');
            $package->destination = $request->input('destination');
            $package->delivery_date = $request->input('delivery_date');
            $package->description = $request->input('description');
            $package->weight = $request->input('weight');
            $package->cost = $request->input('cost');
            $package->save();

           return redirect('/admin')->with('success','Package Uploaded Successfully');
    }

    // Returning Packages with its initial values
    public function edit($package_id){
        $package = Package::find($package_id);
        return view('packages.edit')->with('package', $package);
    }

    // Updating Uploaded Packages 
    public function update(Request $request, $package_id)
    {
        $this->validate($request, [
            "tracking_id"=>'required',
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
            
            $package = Package::find($package_id);

            $package->tracking_id = $request->input('tracking_id');
            $package->sender_name = $request->input('sender_name');
            $package->sender_location = $request->input('sender_location');
            $package->receiver_name = $request->input('receiver_name');
            $package->receiver_email = $request->input('receiver_email');
            $package->receiver_phonenumber = $request->input('receiver_phonenumber');
            $package->receiver_address = $request->input('receiver_address');
            $package->destination = $request->input('destination');
            $package->delivery_date = $request->input('delivery_date');
            $package->description = $request->input('description');
            $package->weight = $request->input('weight');
            $package->cost = $request->input('cost');


            $data = array(
            "tracking_id"=>$package->tracking_id,
            "sender_name"=>$package->sender_name,
            "sender_location"=>$package->sender_location,
            "receiver_name"=>$package->receiver_name,
            "receiver_email"=>$package->receiver_email,
            "receiver_phonenumber"=>$package->receiver_phonenumber,
            "receiver_address"=>$package->receiver_address,
            "destination"=>$package->destination,
            "delivery_date"=>$package->delivery_date,
            "description"=>$package->description,
            "weight"=>$package->weight,
            "cost"=>$package->cost
            );

            Package::where('id',$package_id)->update($data);
            $package->update();

           return redirect('/admin')->with('success','Package Updated Successfully');

           return $package_id;
        
    } 

    // Viewing Uploaded Packages
    public function show($package_id)
    {
        $packages = Package::where('id', '=', $package_id)->get();
        return view('packages.view')->with('packages', $packages);
    }

    // Deleting Packages
    public function delete($package_id){
        Package::where('id',$package_id)->delete();
        return redirect('/admin')->with('success','Package Deleted  Successfully');
    
    }


}
