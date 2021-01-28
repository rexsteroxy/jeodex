@extends('layouts.admin')

@section('content')

<div class="row">

    <div class="col-lg-9 col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
        <h1><i class="fa fa-flag-o red"></i><strong>Uploaded Packages</strong></h1>
        </div>
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
              </tr>
            </tbody>

          </table>
          @endforeach
        </div>

      </div>

    </div>



<!----------------------------------------------------------------

($packages as $package)
<div class="well">
    <div class="row">
        <div class="col-md-8 col-sm-8">
            <h3><a href="/{{$package->id}}">{{$package->receiver_name}}</a></h3>

            <p class="blog-post-meta">{{$package->receiver_name}}</p>
        
            <p>{{$package->description}}</p>
        </div>
    </div>
   
   
</div>

---->


@endsection