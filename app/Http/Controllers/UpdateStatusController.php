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
        
        return redirect('/status')->with('success', 'Delivery Status Updated');
    }

    public function viewStatus($package_id)
    {
        $updateStatuses = UpdateStatus::where('package_id', '=', $package_id)->get();
        return view('packages.delivery_status')->with('updateStatuses', $updateStatuses);
    }

}
