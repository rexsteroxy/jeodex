<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{ ('admin_img/favicon.png') }}">

  <title>Admin Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="{{ ('admin_css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ ('admin_css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ ('admin_css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ ('admin_css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ ('admin_assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
  <link href="{{ ('admin_assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ ('admin_assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ ('admin_css/owl.carousel.css') }}" type="text/css">
  <link href="{{ ('admin_css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ ('admin_css/fullcalendar.css') }}">
  <link href="{{ ('admin_css/widgets.css') }}" rel="stylesheet">
  <link href="{{ ('admin_css/style.css') }}" rel="stylesheet">
  <link href="{{ ('admin_css/style-responsive.css') }}" rel="stylesheet" />
  <link href="{{ ('admin_css/xcharts.min.css') }}" rel=" stylesheet">
  <link href="{{ ('admin_css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">

      <!--logo start-->
      <a href="{{ ('/admin') }}" class="logo">DASH <span class="lite">BOARD</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <li class="active">
            <a class="" href="{{('/admin/package_upload')}}">
              <i class="icon_house_alt"></i>
              <span>Package</span>
            </a>
          </li>
          <li class="active">
            <a class="" href="{{('/upload')}}">
              <i class="icon_house_alt"></i>
              <span>Deliveries</span>
            </a>
          </li>
          <li class="active">
            <a class="" href="{{('/upload')}}">
              <i class="icon_house_alt"></i>
              <span>Delivery Update</span>
            </a>
          </li>
          <li class="active">
            <a class="" href="{{('/upload')}}">
              <i class="icon_house_alt"></i>
              <span>Notifications</span>
            </a>
          </li>
         
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="{{ ('admin_img/avatar1_small.jpg') }}">
                            </span>
                            <span class="username">{{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> Deliveries</a>
              </li>
              <li>
                <a href="{{ ('/logout') }}"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->