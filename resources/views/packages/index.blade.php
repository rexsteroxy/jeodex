@extends('layouts.admin')

@section('content')

<div class="container">
<div class="row">

    <div class="col-lg-12 col-md-12">
      <div class="panel" style=" margin-top:100px;">
        @include('includes.messages')
        <div class="panel-heading" style="background: #262947; color:#ffffff;">
          <h1>
            <strong style="padding:10px">Available Package Deliveries</strong>
          <a style="float: right;" href="/package_upload"><span class="btn btn-default">Add Delivery</span></a>
          </h1>  
        </div>
        @if (count($packages) > 0)
        <div class="panel-body">
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
                <td><a href="{{ url("/delete/{$package->id}") }}"><span class="btn btn-danger" onclick="">Delete</span></a></td>
              </tr>
            </tbody>

          </table>
          @endforeach
        </div>
        @else
        <div class="container" style="margin-top: 50px">
          <h1 style="text-align: center; color:red">No Available Packages</h1>
        </div>
        @endif
      </div>
    </div>
  </div>
@endsection