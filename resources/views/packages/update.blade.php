@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2"> 
       
            <div class="panel">
                <div class="panel-heading">Delivery Update</div>

                <div class="panel-body">
                    @if(count($packages)  > 0)
                    @foreach($packages as $package)
                <form class="form-horizontal" method="POST" action="/package/{{$package->id}}/update_status">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="tracking_id" class="col-md-4 control-label">Tracking ID</label>

                            <div class="col-md-6">
                                <input id="tracking_id" type="text" class="form-control" value="{{$package->tracking_id}}" name="tracking_id"
                                required autofocus placeholder="Eg Germany">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="current_location" class="col-md-4 control-label">Current Location</label>

                            <div class="col-md-6">
                                <input id="current_location" type="text" class="form-control" name="current_location"
                                required autofocus placeholder="Eg Germany">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="previous_location" class="col-md-4 control-label">Previous Location</label>

                            <div class="col-md-6">
                                <input id="previous_location" type="text" class="form-control" value="{{$package->sender_location}}" name="previous_location"
                                required autofocus placeholder="Eg France">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-top:10px">
                                    Update Delivery Status
                                </button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                    @endif
                </div>

                
            </div>
        </div>
    </div>

@endsection



                