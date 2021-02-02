@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2"> 
       
            <div class="panel panel-default">
                <div class="panel-heading">Modify Packages</div>

                <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ url('/update', array($package->id)) }}" enctype = "multipart/form-data" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('sender_name') ? ' has-error' : '' }}">
                            <label for="sender_name" class="col-md-4 control-label">Sender Name</label>

                            <div class="col-md-6">
                                <input id="sender_name" type="text" class="form-control" name="sender_name"
                                 value="{{ $package->sender_name }}" required autofocus placeholder="Eg Mike Onyema">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sender_location') ? ' has-error' : '' }}">
                            <label for="sender_location" class="col-md-4 control-label">Sender Location</label>

                            <div class="col-md-6">
                                <input id="sender_location" type="text" class="form-control" name="sender_location"
                                 value="{{ $package->sender_location }}" required autofocus placeholder="Eg Germany">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('receiver_name') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Receiver Name</label>

                            <div class="col-md-6">
                                <input id="receiver_name" type="text" class="form-control" name="receiver_name"
                                 value="{{ $package->receiver_name }}" required autofocus placeholder="Eg Eke Anthony">
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('receiver_email') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Receiver Email</label>

                            <div class="col-md-6">
                                <input id="receiver_email" type="email" class="form-control" name="receiver_email"
                                 value="{{ $package->receiver_email }}" required autofocus placeholder="Eg EkeAnthony@gmail.com">
                            </div>
                        </div>
                        
                       
                        <div class="form-group{{ $errors->has('receiver_phonenumber') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Receiver Phone Number</label>

                            <div class="col-md-6">
                                <input id="receiver_phonenumber" type="number" class="form-control" name="receiver_phonenumber"
                                 value="{{ $package->receiver_phonenumber }}" required autofocus placeholder="Eg +2345666777755">
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('receiver_address') ? ' has-error' : '' }}">
                            <label for="receiver_address" class="col-md-4 control-label">Receiver Address</label>

                            <div class="col-md-6">
                                <input id="destination" type="text" class="form-control" name="receiver_address"
                                 value="{{ $package->receiver_address}}" required autofocus placeholder="Eg France">
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('destination') ? ' has-error' : '' }}">
                            <label for="destination" class="col-md-4 control-label">Destination</label>

                            <div class="col-md-6">
                                <input id="destination" type="text" class="form-control" name="destination"
                                 value="{{ $package->destination }}" required autofocus placeholder="Eg France">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('delivery_date') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Estimated Delivery Date</label>

                            <div class="col-md-6">
                                <input id="delivery_date" type="text" class="form-control" name="delivery_date"
                                 value="{{ $package->delivery_date }}" required autofocus placeholder="Eg 4days">
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Package Description</label>

                            <div class="col-md-6">
                                <input id="destination" type="text" class="form-control" name="description"
                                 value="{{ $package->description }}" required autofocus placeholder="Eg France">
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">weight</label>

                            <div class="col-md-6">
                                <input id="weight" type="text" class="form-control" name="weight"
                                 value="{{ $package->weight }}" required autofocus placeholder="Eg 4kg">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Cost</label>

                            <div class="col-md-6">
                                <input id="cost" type="text" class="form-control" name="cost"
                                 value="{{ $package->cost }}" required autofocus placeholder="Eg $750">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-top:10px">
                                    Edit Package
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                
            </div>
        </div>
    </div>

@endsection



                