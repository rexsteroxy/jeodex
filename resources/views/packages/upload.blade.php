<div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2"> 
        <div class="panel panel-default">
        <div class="panel-heading">Package Upload</div>

        <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{url('/admin/store')}}" enctype = "multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('tracking_id') ? ' has-error' : '' }}">
                    <label for="firstName" class="col-md-4 control-label">Tracking ID:</label>

                    <div class="col-md-6">
                        <input id="tracking_id" type="text" class="form-control" name="tracking_id"
                            value="{{ old('tracking_id') }}" required autofocus placeholder="Eg 45678ghjkdbnm">
                    </div>
                </div>


                <div class="form-group{{ $errors->has('sender_name') ? ' has-error' : '' }}">
                    <label for="sender_name" class="col-md-4 control-label">Sender Name</label>

                    <div class="col-md-6">
                        <input id="sender_name" type="text" class="form-control" name="sender_name"
                            value="{{ old('sender_name') }}" required autofocus placeholder="Eg Mike Onyema">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('sender_location') ? ' has-error' : '' }}">
                    <label for="sender_location" class="col-md-4 control-label">Sender Location</label>

                    <div class="col-md-6">
                        <input id="sender_location" type="text" class="form-control" name="sender_location"
                            value="{{ old('sender_location') }}" required autofocus placeholder="Eg Germany">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('reciever_name') ? ' has-error' : '' }}">
                    <label for="firstName" class="col-md-4 control-label">Reciever Name</label>

                    <div class="col-md-6">
                        <input id="reciever_name" type="text" class="form-control" name="reciever_name"
                            value="{{ old('reciever_name') }}" required autofocus placeholder="Eg Eke Anthony">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('reciever_email') ? ' has-error' : '' }}">
                    <label for="firstName" class="col-md-4 control-label">Reciever Email</label>
                    <div class="col-md-6">
                        <input id="reciever_email" type="email" class="form-control" name="reciever_email"
                            value="{{ old('reciever_email') }}" required autofocus placeholder="Eg EkeAnthony@gmail.com">
                    </div>
                </div>              

                <div class="form-group{{ $errors->has('reciever_phonenumber') ? ' has-error' : '' }}">
                    <label for="price" class="col-md-4 control-label">Reciever Phone Number</label>

                    <div class="col-md-6">
                        <input id="reciever_phonenumber" type="number" class="form-control" 
                        name="reciever_phonenumber"
                            value="{{ old('reciever_phonenumber') }}" required autofocus placeholder="Eg +2345666777755">
                    </div>
                </div>


                <div class="form-group{{ $errors->has('reciever_address') ? ' has-error' : '' }}">
                    <label for="reciever_address" class="col-md-4 control-label">Reciever Address</label>

                    <div class="col-md-6">
                        <textarea id="reciever_address"  rows="2" type="text" class="form-control" 
                        name="reciever_address"
                            value="{{ old('reciever_address') }}" required autofocus></textarea>
                    </div>
                </div>


                <div class="form-group{{ $errors->has('destination') ? ' has-error' : '' }}">
                    <label for="destination" class="col-md-4 control-label">Destination</label>

                    <div class="col-md-6">
                        <input id="destination" type="text" class="form-control" name="destination"
                            value="{{ old('destination') }}" required autofocus placeholder="Eg France">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('delivery_date') ? ' has-error' : '' }}">
                    <label for="firstName" class="col-md-4 control-label">Estimated Delivery Date</label>

                    <div class="col-md-6">
                        <input id="delivery_date" type="text" class="form-control" name="delivery_date"
                            value="{{ old('delivery_date') }}" required autofocus placeholder="Eg 4days">
                    </div>
                </div>




                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description" class="col-md-4 control-label">Package Description</label>

                    <div class="col-md-6">
                        <textarea id="description"  rows="2" type="text" class="form-control" 
                        name="description"
                            value="{{ old('description') }}" required autofocus></textarea>
                    </div>
                </div>


                <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                    <label for="price" class="col-md-4 control-label">weight</label>

                    <div class="col-md-6">
                        <input id="weight" type="text" class="form-control" 
                        name="weight"
                        value="{{ old('weight') }}" required autofocus placeholder="Eg 4kg">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
                    <label for="price" class="col-md-4 control-label">Cost</label>

                    <div class="col-md-6">
                        <input id="cost" type="text" class="form-control" 
                        name="cost"
                        value="{{ old('cost') }}" required autofocus placeholder="Eg $750">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary" style="margin-top:10px">
                            Upload Package 
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>



                