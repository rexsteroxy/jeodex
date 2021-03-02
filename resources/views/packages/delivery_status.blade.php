@extends('layouts.admin')

@section('content')
<div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel" style="margin-top: 100px;">
          @include('includes.messages')
            <div class="panel-heading" style="background: #262947; color:#ffffff;">
              @if(count($updateStatuses)  > 0) 
              @if($status) 
              <h1>
                  <strong style="padding:10px">Package Delivery: <span style="color: green;">Delivered</span></strong>
              </h1>              
              </div>      
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
           
          </div>
          @else
          <div class="container" style="margin-top: 50px">
            <h1 style="text-align: center; color:#ffffff">No Updates Yet</h1>
          </div>
          @endif
        </div>

      </div>
     
    </div>


@endsection