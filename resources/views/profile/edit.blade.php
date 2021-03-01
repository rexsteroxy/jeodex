@extends('layouts.admin')
@section('content')

<div class="container">
    <form class="login-form" action="/profile/update/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="login-wrap">
          @include('includes.messages')
          <p class="login-img"><i class="icon_lock_alt"></i></p>
          <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" placeholder=" Full Name" autofocus>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            <input type="text" name="email" value="{{ Auth::user()->email }}" class="form-control" placeholder="Email" autofocus>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            <input type="file" name="image" class="form-control" placeholder="Image">
          </div>
          
          <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
        </div>
      </form>
      
</div>

@endsection
