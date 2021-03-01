<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{ asset('admin_img/favicon.png') }}">

  <title>Admin Registration </title>

  <!-- Bootstrap CSS-->
  <link href="{{ asset('admin_css/bootstrap.min.css') }}" rel="stylesheet">
   <!--bootstrap theme-->
  <link href="{{ asset('admin_css/bootstrap-theme.css') }}" rel="stylesheet">
  <!-- Custom styles -->
  <link href="{{ asset('admin_css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('admin_css/style-responsive.css') }}" rel="stylesheet" />
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('admin_css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin_css/font-awesome.css') }}" rel="stylesheet" />
</head>

  <body class="login-img3-body">
  <div class="container">

    <form class="login-form" action="/register" method="POST">
      {{ csrf_field() }}
      <div class="login-wrap">
        @include('includes.messages')
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="name" class="form-control" placeholder=" Full Name" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
        </div>
        
        <button class="btn btn-primary btn-lg btn-block" type="submit">Register Admin</button>
      </div>
    </form>
    
  </div>

</body>

</html>











