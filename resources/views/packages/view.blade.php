@extends('layouts.admin')

@section('content')
<div class="row">
<div class="col-lg-12">
    <!--Viewing Unique Packages By their IDs-->
    <section class="panel">

    @if(count($packages)  > 0)
        @foreach($packages->all() as $package)

            <div class="panel-heading">
                <h3>The Package with Tracking ID: <strong>{{$package->tracking_id}}</strong></h3>
                <a href="{{ ("/edit/{$package->id}") }}" class="badge badge-warning">Edit</a>
            </div>

      <table class="table table-hover personal-task">
        <tbody>
          <tr>
            <td>Sender Name</td>
            <td>{{$package->sender_name}}</td> 
          </tr>

          <tr>
            <td>Sender Location</td>
            <td>{{$package->sender_location}}</td>     
          </tr>

          <tr>
            <td>Sender Name</td>
            <td>{{$package->sender_name}}</td>           
          </tr>

          <tr>
            <td>Sender Location</td>
            <td>{{$package->sender_location}}</td>   
          </tr>

          <tr>
            <td>Receiver Name</td>
            <td>{{$package->receiver_name}}</td>
            
          </tr>

          <tr>
            <td>Receiver Email</td>
            <td>{{$package->receiver_email}}</td>
            
          </tr>

          <tr>
            <td>Receiver Phonenumber</td>
            <td>{{$package->receiver_phonenumber}}</td>
            
          </tr>

          <tr>
            <td>Receiver Address</td>
            <td>{{$package->receiver_address}}</td>
            
          </tr>

          <tr>
            <td>Destination</td>
            <td>{{$package->destination}}</td>
            
          </tr>

          <tr>
            <td>Delivery Date</td>
            <td>{{$package->delivery_date}}</td>
            
          </tr>

          <tr>
            <td>Package Description</td>
            <td>{{$package->description}}</td>
            
          </tr>

          <tr>
            <td>Weight</td>
            <td>{{$package->weight}}</td>
            
          </tr>

          <tr>
            <td>Cost</td>
            <td>{{$package->cost}}</td>
            
          </tr>

        </tbody>
      </table>

        @endforeach
      @endif
    </section>
    <!--Project Activity end-->
  </div>
</div>
@endsection








<!------------------------------------------------------------------------------------->

