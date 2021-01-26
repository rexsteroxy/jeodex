@include('layouts.admin_header')

<div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(count($errors) > 0)
            @foreach($errors->all as $error)
            <div class="alert alert-danger">
                <li>{{$error}}</li>
            </div>
            @endforeach
            @endif
            @if (session('response'))
            <div class="alert alert-success">
                {{ session('response') }}
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Parcel Upload</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/addparcel')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('tracking_id') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Tracking ID:</label>

                            <div class="col-md-6">
                                <input id="tracking_id" type="text" class="form-control" name="tracking_id" value="{{ old('tracking_id') }}" required autofocus placeholder="Eg 45678ghjkdbnm">

                                @if ($errors->has('tracking_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->parcel('tracking_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('sender_name') ? ' has-error' : '' }}">
                            <label for="sender_name" class="col-md-4 control-label">Sender Name</label>

                            <div class="col-md-6">
                                <input id="sender_name" type="text" class="form-control" name="sender_name" value="{{ old('sender_name') }}" required autofocus placeholder="Eg Mike Onyema">

                                @if ($errors->has('sender_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sender_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sender_location') ? ' has-error' : '' }}">
                            <label for="sender_location" class="col-md-4 control-label">Sender Location</label>

                            <div class="col-md-6">
                                <input id="sender_location" type="text" class="form-control" name="sender_location" value="{{ old('sender_location') }}" required autofocus placeholder="Eg Germany">

                                @if ($errors->has('sender_location'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sender_location') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('reciever_name') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Reciever Name</label>

                            <div class="col-md-6">
                                <input id="reciever_name" type="text" class="form-control" name="reciever_name" value="{{ old('reciever_name') }}" required autofocus placeholder="Eg Eke Anthony">

                                @if ($errors->has('reciever_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('reciever_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('reciever_email') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Reciever Email</label>

                            <div class="col-md-6">
                                <input id="reciever_email" type="email" class="form-control" name="reciever_email" value="{{ old('reciever_email') }}" required autofocus placeholder="Eg EkeAnthony@gmail.com">

                                @if ($errors->has('reciever_email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('reciever_email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('reciever_phonenumber') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Reciever Phone Number</label>

                            <div class="col-md-6">
                                <input id="reciever_phonenumber" type="number" class="form-control" name="reciever_phonenumber" value="{{ old('reciever_phonenumber') }}" required autofocus placeholder="Eg +2345666777755">

                                @if ($errors->has('reciever_phonenumber'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('reciever_phonenumber') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('reciever_address') ? ' has-error' : '' }}">
                            <label for="reciever_address" class="col-md-4 control-label">Reciever Address</label>

                            <div class="col-md-6">
                                <textarea id="reciever_address" rows="2" type="text" class="form-control" name="reciever_address" value="{{ old('reciever_address') }}" required autofocus></textarea>

                                @if ($errors->has('reciever_address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('reciever_address') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Shipment_fee') ? ' has-error' : '' }}">
                            <label for="Shipment_fee" class="col-md-4 control-label">Shipment Status:</label>
                            <div class="col-md-6">
                                <select name="shipment_status" class="form-control">
                                    <option value="PENDING">PENDING</option>
                                    <option value="ON ROUTE">ON ROUTE</option>

                                </select>
                                @if ($errors->has('Shipment_status'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Shipment_status') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('progress') ? ' has-error' : '' }}">
                            <label for="progress" class="col-md-4 control-label">Shipment Progress:</label>
                            <div class="col-md-6">
                                <select name="progress" class="form-control">
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="75">75</option>
                                    <option value="100">100</option>

                                </select>
                                @if ($errors->has('progress'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('progress') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('current_location') ? ' has-error' : '' }}">
                            <label for="current_location" class="col-md-4 control-label">Current_Location:</label>

                            <div class="col-md-6">
                                <input id="current_location" rows="4" type="text" class="form-control" name="current_location" value="{{ old('current_location') }}" required autofocus placeholder="Eg France">

                                @if ($errors->has('current_location'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('current_location') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!-- <div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}">
                            <label for="longitude" class="col-md-4 control-label">Current_Location_Longitude:</label>

                            <div class="col-md-6">
                                <input id="longitude"  rows="4" type="text" class="form-control" 
                                name="longitude"
                                 value="{{ old('longitude') }}" required autofocus placeholder="Eg 5.6789">

                                @if ($errors->has('longitude'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('longitude') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div> -->

                        <!-- <div class="form-group{{ $errors->has('latitude') ? ' has-error' : '' }}">
                            <label for="latitude" class="col-md-4 control-label">Current_Location_Latitude:</label>

                            <div class="col-md-6">
                                <input id="latitude"  rows="4" type="text" class="form-control" 
                                name="latitude"
                                 value="{{ old('latitude') }}" required autofocus placeholder="Eg 6.8899">

                                @if ($errors->has('latitude'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('latitude') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div> -->


                        <div class="form-group{{ $errors->has('location_1') ? ' has-error' : '' }}">
                            <label for="current_location" class="col-md-4 control-label">Location-1:</label>

                            <div class="col-md-6">
                                <input id="location_1" rows="4" type="text" class="form-control" name="location_1" value="{{ old('location_1') }}" autofocus placeholder="Eg France">

                                @if ($errors->has('location_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('location_1') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('location_2') ? ' has-error' : '' }}">
                            <label for="current_location" class="col-md-4 control-label">Location-2:</label>

                            <div class="col-md-6">
                                <input id="location_2" rows="4" type="text" class="form-control" name="location_2" value="{{ old('location_2') }}" autofocus placeholder="Eg France">

                                @if ($errors->has('location_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('location_2') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('location_3') ? ' has-error' : '' }}">
                            <label for="current_location" class="col-md-4 control-label">Location-3:</label>

                            <div class="col-md-6">
                                <input id="location_3" rows="4" type="text" class="form-control" name="location_3" value="{{ old('location_3') }}" autofocus placeholder="Eg France">

                                @if ($errors->has('location_3'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('location_3') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('location_4') ? ' has-error' : '' }}">
                            <label for="current_location" class="col-md-4 control-label">Location-4:</label>

                            <div class="col-md-6">
                                <input id="location_4" rows="4" type="text" class="form-control" name="location_4" value="{{ old('location_4') }}" autofocus placeholder="Eg France">

                                @if ($errors->has('location_4'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('location_4') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('destination') ? ' has-error' : '' }}">
                            <label for="destination" class="col-md-4 control-label">Destination</label>

                            <div class="col-md-6">
                                <input id="destination" type="text" class="form-control" name="destination" value="{{ old('destination') }}" required autofocus placeholder="Eg France">

                                @if ($errors->has('destination'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('destination') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('delivery_date') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Estimated Delivery Date</label>

                            <div class="col-md-6">
                                <input id="delivery_date" type="text" class="form-control" name="delivery_date" value="{{ old('delivery_date') }}" required autofocus placeholder="Eg 4days">

                                @if ($errors->has('delivery_date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('delivery_date') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Package Description</label>

                            <div class="col-md-6">
                                <textarea id="description" rows="2" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus></textarea>

                                @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('parcel_color') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Parcel Color</label>

                            <div class="col-md-6">
                                <input id="parcel_color" type="text" class="form-control" name="parcel_color" value="{{ old('parcel_color') }}" required autofocus placeholder="Eg red">

                                @if ($errors->has('parcel_color'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('parcel_color') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">weight</label>

                            <div class="col-md-6">
                                <input id="weight" type="text" class="form-control" name="weight" value="{{ old('weight') }}" required autofocus placeholder="Eg 4kg">

                                @if ($errors->has('weight'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('weight') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Cost</label>

                            <div class="col-md-6">
                                <input id="cost" type="text" class="form-control" name="cost" value="{{ old('cost') }}" required autofocus placeholder="Eg $750">

                                @if ($errors->has('cost'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cost') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-top:10px">
                                    Upload Parcel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- <script type="text/javascript">


                $(document).ready(function() {

                $(".btn-success").click(function(){ 
                    var html = $(".clone").html();
                    $(".increment").after(html);
                });

                $("body").on("click",".btn-danger",function(){ 
                    $(this).parents(".control-group").remove();
                });

                });

            </script> -->
            </div>
        </div>
    </div>
</div>
