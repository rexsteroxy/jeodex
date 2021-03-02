<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Package;
use App\Models\updateStatus;
use App\Mail\NotificationMail;

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
            "sender_name"=>'required',
            "sender_location"=>'required',
            "receiver_name"=>'required',
            "receiver_email"=>'required',
            "receiver_phonenumber"=>'required',
            "receiver_address"=>'required',
            "destination"=>'required',
            "current_location"=>'required',
            "delivery_date"=>'required',
            "description"=>'required',
            "weight"=>'required',
            "cost"=>'required'
           
        ]);


        // For Generating Unique Tracking_id for the uploads

        $chars = '0123456789qwertyasdfghmnbvcxzlkjpoiu';
        $chars_length = strlen($chars);
        $track_code = 'johdex';
        for($i = 0; $i < 11; $i++) {
            $track_code.= $chars[mt_rand(0, $chars_length-1)];
        }
        $track_code;

            $package = new Package;
        
            $package->sender_name = $request->input('sender_name');
            $package->sender_location = $request->input('sender_location');
            $package->receiver_name = $request->input('receiver_name');
            $package->receiver_email = $request->input('receiver_email');
            $package->receiver_phonenumber = $request->input('receiver_phonenumber');
            $package->receiver_address = $request->input('receiver_address');
            $package->destination = $request->input('destination');
            $package->current_location = $request->input('current_location');
            $package->delivery_date = $request->input('delivery_date');
            $package->description = $request->input('description');
            $package->weight = $request->input('weight');
            $package->cost = $request->input('cost');
            // Calling the generate track id function
            $tracking_id = $track_code;
            $package->tracking_id = $tracking_id;
            $package->admin = Auth::user()->email;
            $package->save();

            // Send email to admin user
            //$data = $request->all();
            //\Mail::to($data['receiver_email'])->send(new NotificationMail($data));

           return redirect('/packages')->with('success','Package Uploaded Successfully');
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
            "sender_name"=>'required',
            "sender_location"=>'required',
            "receiver_name"=>'required',
            "receiver_email"=>'required',
            "receiver_phonenumber"=>'required',
            "receiver_address"=>'required',
            "destination"=>'required',
            "current_location"=>'required',
            "delivery_date"=>'required',
            "description"=>'required',
            "weight"=>'required',
            "cost"=>'required'
           
        ]);
            
            $package = Package::find($package_id);

            $package->sender_name = $request->input('sender_name');
            $package->sender_location = $request->input('sender_location');
            $package->receiver_name = $request->input('receiver_name');
            $package->receiver_email = $request->input('receiver_email');
            $package->receiver_phonenumber = $request->input('receiver_phonenumber');
            $package->receiver_address = $request->input('receiver_address');
            $package->destination = $request->input('destination');
            $package->current_location = $request->input('current_location');
            $package->delivery_date = $request->input('delivery_date');
            $package->description = $request->input('description');
            $package->weight = $request->input('weight');
            $package->cost = $request->input('cost');


            $data = array(
            //"tracking_id"=>$package->tracking_id,
            "sender_name"=>$package->sender_name,
            "sender_location"=>$package->sender_location,
            "receiver_name"=>$package->receiver_name,
            "receiver_email"=>$package->receiver_email,
            "receiver_phonenumber"=>$package->receiver_phonenumber,
            "receiver_address"=>$package->receiver_address,
            "destination"=>$package->destination,
            "current_location"=>$package->current_location,
            "delivery_date"=>$package->delivery_date,
            "description"=>$package->description,
            "weight"=>$package->weight,
            "cost"=>$package->cost,
           
            );

            Package::where('id',$package_id)->update($data);
            $package->update();

           return redirect('/packages')->with('success','Package Updated Successfully');

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
        return redirect('/packages')->with('success','Package Deleted  Successfully');
    
    }

    // Getting the tracking page for the client
    public function getPackage(Request $request)
    {
        //Validating the clients track ID input
        $this->validate($request, [
           "track_id"=>'required'
        ]);

        $code = 'johdex';
    
        $id = $request->input('track_id');
        if(strpos($id, $code)!== false) {
            $packages = Package::where('tracking_id', '=', $id)->get();
            return view('packageView',compact('packages'));
        } else {
            return redirect('/')->with('error','Invalid Track Code');
        }
       
    }

    public function search(Request $request)
    {
        // Get the search value from the request
        $keyword = $request->input('search');

        //Search in the Trackiing_id, Receiver_name, Email, Destination and Sender_name from the Packages table
        $packages = Package::query()
            ->where('tracking_id', 'LIKE', "%{$keyword}%")
            ->orWhere('receiver_name', 'LIKE', "%{$keyword}%")
            ->orWhere('receiver_email', 'LIKE', "%{$keyword}%")
            ->orWhere('destination', 'LIKE', "%{$keyword}%")
            ->orWhere('sender_name', 'LIKE', "%{$keyword}%")
            ->get();
        return view('packages.search', compact('packages'));
    }

}
