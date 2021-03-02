@extends('layouts.admin')

@section('content')
<div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel">
        @include('includes.messages')
          <div class="panel-heading">
            @if(count($updateStatuses)  > 0)
            <h2>Delivery Status</h2>
            @if($status)
            <h2 style="color:green; text-align:center">: Delivered</h2>
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 100%; background: green" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            @else
            <h2 style="color:red; text-align:center">: Pending</h2>
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 100%; background: red" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            @endif
          </div>

          <div class="panel-body">
        
            <table class="table bootstrap-datatable countries">
            <thead>
                <tr>
                  <th>Tracking ID</th>
                  <th>Current Location</th>
                  <th>Date</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
            @foreach($updateStatuses as $updateStatus)
             
                <tr>
                  <td>{{$updateStatus->tracking_id}}</td>
                  <td>{{$updateStatus->current_location}}</td>
                  <td>{{$updateStatus->previous_location}}</td>
                </tr>
              
            @endforeach
            </tbody>
            </table>
            @else
              <h4>No Updates Yet</h4>
            @endif
          </div>

        </div>

      </div>
     
    </div>


@endsection