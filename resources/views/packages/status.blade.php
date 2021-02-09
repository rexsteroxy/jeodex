@extends('layouts.admin')

@section('content')
<div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel">
        @include('includes.messages')
          <div class="panel-heading">
            <h2>Delivery Status</h2>
            <div class="progress thin">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                </div>
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                </div>
              </div>
          </div>

          <div class="panel-body">
            @foreach($packages as $package)
            <table class="table bootstrap-datatable countries">
              <thead>
                <tr>
                  <th>Tracking ID</th>
                  <th>Receiver</th>
                  <th>Destination</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$package->tracking_id}}</td>
                  <td>{{$package->receiver_name}}</td>
                  <td>{{$package->destination}}</td>
                  <td><a href="{{ url("/view_status/{$package->id}") }}"><span class="btn btn-warning">Status</span></a></td>
                  <td><a href="{{ url("/status_update/{$package->id}") }}"><span class="btn btn-danger">Update Status</span></a></td>
                </tr>
              </tbody>
            </table>
            @endforeach
          </div>

        </div>

      </div>
     
    </div>

@endsection