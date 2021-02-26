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
        
            @if(count($updateStatuses)  > 0)
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