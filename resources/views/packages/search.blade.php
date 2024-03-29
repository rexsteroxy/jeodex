@extends('layouts.admin')

@section('content')

<div class="row">

    <div class="col-lg-12 col-md-12">
      <div class="panel">
        @include('includes.messages')
        <div class="panel-heading">
        <i class="fa fa-flag-o red"></i><strong>Available Package</strong>
        </div>
        <div class="panel-body">
            @if ($packages and $packages->isNotEmpty())
            @foreach($packages as $package)
            <table class="table bootstrap-datatable countries">
              <thead>
                <tr>
                  <th>Tracking ID</th>
                  <th>Destination</th>
                  <th>Sender</th>
                  <th>Receiver</th>
                  <th>Receiver Email</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
  
              <tbody>
                <tr>
                  <td>{{$package->tracking_id}}</td>
                  <td>{{$package->destination}}</td>
                  <td>{{$package->sender_name}}</td>
                  <td>{{$package->receiver_name}}</td>
                  <td>{{$package->receiver_email}}</td>
                  <td><a href="{{ url("/view/{$package->id}") }}"><span class="btn btn-primary">View</span></a></td>
                  <td><a href="{{ url("/delete/{$package->id}") }}"><span class="btn btn-primary">Delete</span></a></td>
                </tr>
              </tbody>
  
            </table>
            @endforeach
            @else
                <div>
                    <h2>No Package Found</h2>
                </div>
            @endif
           
        </div>

      </div>

    </div>

@endsection