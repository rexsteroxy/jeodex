@extends('layouts.admin')

@section('content')
<br><br>
<div class="row">
    <div class="col-lg-10 col-md-12" style="margin-left:10rem">
      <div class="panel">
        @include('includes.messages')
        <div class="panel-heading" style="background: #262947; color:#ffffff">
        <h1>
          <strong>ADMINISTRATOR'S MANAGEMENT</strong>
        <a style="float: right;" href="/register"><span class="btn btn-default">Create New Admin</span></a>
        </h1>  
        </div>
          <div class="panel-body">
              <table class="table bootstrap-datatable countries" style="border: 1px solid #262947;">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Role</th>
                      <th>Email</th>
                      <th>Date Created</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>  
                  <tbody>
              @foreach($users as $user)
                <tr>
                  <td>{{$user->name}}</td>
                  <td>Admin</td>
                  <td>{{$user->email}}</td>
                  @if ($user->created_at == null)
                  <td>{{$user->created_at}}</td>
                  @else
                  <td>{{$user->created_at->diffForHumans()}}</td>
                  @endif
                  <td><a href="/admin/delete/{{ $user->id }}"><span class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Admin?');">Delete</span></a></td>
                  <td><a href="/profile/{{ $user->id }}"><span class="btn btn-warning">Profile</span></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>

    </div>

@endsection