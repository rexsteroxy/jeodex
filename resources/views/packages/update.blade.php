<div class="form-group{{ $errors->has('Shipment_fee') ? ' has-error' : '' }}">
    <label for="Shipment_fee" class="col-md-4 control-label">Shipment Status:</label>
    <div class="col-md-6">
    <select  name="shipment_status" class="form-control">
        <option value="PENDING">PENDING</option>
        <option value="ON ROUTE">ON ROUTE</option>
    </select>
    </div>
    </div>

    <div class="form-group{{ $errors->has('progress') ? ' has-error' : '' }}">
    <label for="progress" class="col-md-4 control-label">Shipment Progress:</label>
    <div class="col-md-6">
    <select  name="progress" class="form-control">
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="75">75</option>
        <option value="100">100</option>                          
    </select>
    </div>
    </div>

    <div class="form-group{{ $errors->has('current_location') ? ' has-error' : '' }}">
    <label for="current_location" class="col-md-4 control-label">Current_Location:</label>

    <div class="col-md-6">
        <input id="current_location"  rows="4" type="text" class="form-control" 
        name="current_location"
        value="{{ old('current_location') }}" required autofocus placeholder="Eg France">
    </div>
    </div>             

    <div class="form-group{{ $errors->has('location_1') ? ' has-error' : '' }}">
    <label for="current_location" class="col-md-4 control-label">Location-1:</label>

    <div class="col-md-6">
        <input id="location_1"  rows="4" type="text" class="form-control" 
        name="location_1"
        value="{{ old('location_1') }}"  autofocus placeholder="Eg France">
    </div>
    </div>

    <div class="form-group{{ $errors->has('location_2') ? ' has-error' : '' }}">
    <label for="current_location" class="col-md-4 control-label">Location-2:</label>

    <div class="col-md-6">
        <input id="location_2"  rows="4" type="text" class="form-control" 
        name="location_2"
        value="{{ old('location_2') }}"  autofocus placeholder="Eg France">
    </div>
    </div>


    <div class="form-group{{ $errors->has('location_3') ? ' has-error' : '' }}">
    <label for="current_location" class="col-md-4 control-label">Location-3:</label>

    <div class="col-md-6">
        <input id="location_3"  rows="4" type="text" class="form-control" 
        name="location_3"
        value="{{ old('location_3') }}" autofocus placeholder="Eg France">
    </div>
    </div>

    <div class="form-group{{ $errors->has('location_4') ? ' has-error' : '' }}">
    <label for="current_location" class="col-md-4 control-label">Location-4:</label>

    <div class="col-md-6">
        <input id="location_4"  rows="4" type="text" class="form-control" 
        name="location_4"
        value="{{ old('location_4') }}" autofocus placeholder="Eg France">
    </div>
    </div>