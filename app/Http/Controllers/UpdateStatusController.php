<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\UpdateStatus;
use App\Models\Package;

class UpdateStatusController extends Controller
{
    public function status()
    {
        $packages = Package::latest()->get();
        return view('packages.status')->with('packages', $packages);
    }

    // Returning the Update Status Page
    public function update($package_id) 
    {
        $packages = Package::where('id', '=', $package_id)->get();
        return view('packages.update')->with('packages', $packages);
    }

    public function store(Package $package)
    {
        $this->validate(request(), [
            'tracking_id' => 'required',
            'current_location' => 'required',
            'previous_location' => 'required'
        ]);

       UpdateStatus::create([
        'tracking_id' => request('tracking_id'),
        'current_location' => request('current_location'),
        'previous_location' => request('previous_location'),
        'package_id' => $package->id
       ]);
        $package_id = request('package_id');
       $package = Package::find($package_id);

       $data = array(
        
        "current_location"=>request('current_location'),
       
        );

        Package::where('id',$package_id)->update($data);
        $package->update();
        
        return redirect('/status')->with('success', 'Delivery Status Updated');
    }

    public function viewStatus($id)
    {
     $status = false;
     //get destination
        $updateStatuses = UpdateStatus::where('package_id', '=', $id)->get();
        $package = Package::find($id);
        
        if ($package->current_location == $package->destination) {
            //set status to true
            $status = true;
    }
        return view('packages.delivery_status', compact('updateStatuses', 'status'));
    }



}
