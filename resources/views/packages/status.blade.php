@extends('layouts.admin')

@section('content')
<div class="container">
<div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel" style="margin-top: 100px;">
        @include('includes.messages')
          <div class="panel-heading" style="background: #262947; color:#ffffff;">
              <h1>
                <strong style="padding:10px">Status Update</strong>
              </h1>  
            </div>
          <div class="panel-body">
            <table class="table bootstrap-datatable countries">
              <thead>
                <tr>
                  <th>Tracking ID</th>
                  <th>Receiver</th>
                  <th>Destination</th>
                  <th>Current Location</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
            @foreach($packages as $package)

                <tr>
                  <td>{{$package->tracking_id}}</td>
                  <td>{{$package->receiver_name}}</td>
                  <td>{{$package->destination}}</td>
                  <td>{{$package->sender_location}}</td>
            
                  <td><a href="{{ url("/view_status/{$package->id}") }}"><span class="btn btn-warning">Status</span></a></td>
                  <td><a href="{{ url("/status_update/{$package->id}") }}"><span class="btn btn-danger">Update Status</span></a></td>
                </tr>

            @endforeach
          </tbody>
        </table>
          </div>

        </div>

      </div>
     
    </div>
  </div>
@endsection