@extends('layouts.admin')

@section('content')
<br><br><br><br>
<div class="container" style="border: 1px solid #2a4b66">

  <div class="row">
    
    <div class="col-lg-4 col-sm-6">
      <div class="single-blog-post style-2 mb-5">
          <!-- Blog Thumbnail -->
          <div class="blog-thumbnail" style="margin: 10px;">
            @if ($user->image == null)
            <img src="{{ asset('admin_img/avatar.png')}}" style="width: 40rem; heigth: 20rem;" alt="No Image">
              @else   
              <img src="{{ url('public/Admins/'. $user->image )}}" style="width: 40rem; heigth: 25rem;" alt="No Image">
            @endif
            
          </div>

          <!-- Blog Content -->
          <div class="profile" style="margin: 10px;">
              <p class="post-title">NAME: {{$user->name}}</p>
              <p class="post-date">EMAIL: {{$user->email}}</p>
              <p class="post-date">ROLE: Admin</p>
              <p class="post-date">DATE APPROVED: {{$user->created_at->diffForHumans()}}</p>
              <a href="/profile/edit/{{Auth::user()->id}}" class="btn btn-success">Edit Profile</a>
          </div>
      </div>
    </div>
    
  </div>

</div>

@endsection






    