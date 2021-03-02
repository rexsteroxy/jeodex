<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{ asset('admin_img/favicon.png') }}">

  <title>Johdex Admin Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('admin_css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('admin_css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('admin_css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin_css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ asset('admin_assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin_assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ asset('admin_assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ asset('admin_css/owl.carousel.css') }}" type="text/css">
  <link href="{{ asset('admin_css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('admin_css/fullcalendar.css') }}">
  <link href="{{ asset('admin_css/widgets.css') }}" rel="stylesheet">
  <link href="{{ asset('admin_css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('admin_css/style-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin_css/xcharts.min.css') }}" rel=" stylesheet">
  <link href="{{ asset('admin_css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
    <header class="header dark-bg">

      <!--logo start-->
      <a href="{{ asset('/admin') }}" class="logo">Johdex <span class="lite">Logistics</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form action="/search" method="GET" class="navbar-form">
              <input class="form-control" name="search" placeholder="Search" type="text">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <li>
            <a class="" href="{{ asset('/')}}">
              <i class="icon_house_alt"></i>
              <span>Home</span>
            </a>
          </li>

          <li>
            <a class="" href="{{ asset('/packages')}}">
              <i class="icon_house_alt"></i>
              <span>Deliveries</span>
            </a>
          </li>
          <li>
            <a class="" href="{{ asset('/package_upload')}}">
              <i class="icon_house_alt"></i>
              <span>Package Upload</span>
            </a>
          </li>
          <li>
            <a class="" href="{{ asset('/status')}}">
              <i class="icon_house_alt"></i>
              <span>Delivery Status</span>
            </a>
          </li>
          {{-- <li>
            <a class="" href="{{ asset('/notifications')}}">
              <i class="icon_house_alt"></i>
              <span>Notifications</span>
            </a>
          </li> --}}
         
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                              @if (Auth::user()->image == null)
                              <img style="width: 5.5rem; height:5.5rem" alt="" src="{{ asset('admin_img/avatar.png' ) }}">
                              @else 
                              <img style="width: 5.5rem; height:5.5rem" alt="" src="{{ asset('public/Admins/'. Auth::user()->image ) }}">
                              @endif
                            </span>
                            <span class="username">{{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="/profile/{{ Auth::user()->id }}"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="/packages"><i class="icon_mail_alt"></i> Deliveries</a>
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
  
  <!-- container section start -->
        @yield('content')
    
        
        
</body>
      <!-- javascripts -->
      <script src="{{ asset('admin_js/jquery.js') }}"></script>
      <script src="{{ asset('admin_js/jquery-ui-1.10.4.min.js') }}"></script>
      <script src="{{ asset('admin_js/jquery-1.8.3.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('admin_js/jquery-ui-1.9.2.custom.min.js') }}"></script>
      <!-- bootstrap -->
      <!-- nice scroll-->
      <script src="{{ asset('admin_js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('admin_js/jquery.scrollTo.min.js') }}"></script>
      <script src="{{ asset('admin_js/jquery.nicescroll.js') }}" type="text/javascript"></script>
      <!-- charts scripts -->
      <script src="{{ asset('admin_assets/jquery-knob/js/jquery.knob.js') }}"></script>
      <script src="{{ asset('admin_js/jquery.sparkline.js') }}" type="text/javascript"></script>
      <script src="{{ asset('admin_assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
      <script src="{{ asset('admin_js/owl.carousel.js') }}"></script>
      <!-- jQuery full calendar -->
      <script src="{{ asset('admin_js/fullcalendar.min.js') }}"></script>
      <!-- Full Google  Calendar -->
      <script src="{{ asset('admin_assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
      <!--script for this page only-->
      <script src="{{ asset('admin_js/calendar-custom.js') }}"></script>
      <script src="{{ asset('admin_js/jquery.rateit.min.js') }}"></script>
      <!-- custom select -->
      <script src="{{ asset('admin_js/jquery.customSelect.min.js') }}"></script>
      <script src="{{ asset('admin_assets/chart-master/Chart.js') }}"></script>
      
      <!--custome script for all page-->
      <script src="{{ asset('admin_js/scripts.js') }}"></script>
      <!-- custom script for this page-->
      <script src="{{ asset('admin_js/sparkline-chart.js') }}"></script>
      <script src="{{ asset('admin_js/easy-pie-chart.js') }}"></script>
      <script src="{{ asset('admin_js/jquery-jvectormap-1.2.2.min.js') }}"></script>
      <script src="{{ asset('admin_js/jquery-jvectormap-world-mill-en.js') }}"></script>
      <script src="{{ asset('admin_js/xcharts.min.js') }}"></script>
      <script src="{{ asset('admin_js/jquery.autosize.min.js') }}"></script>
      <script src="{{ asset('admin_js/jquery.placeholder.min.js') }}"></script>
      <script src="{{ asset('admin_js/gdp-data.js') }}"></script>
      <script src="{{ asset('admin_js/morris.min.js') }}"></script>
      <script src="{{ asset('admin_js/sparklines.js') }}"></script>
      <script src="{{ asset('admin_js/charts.js') }}"></script>
      <script src="{{ asset('admin_js/jquery.slimscroll.min.js') }}"></script>
      <script>
        //knob
        $(function() {
          $(".knob").knob({
            'draw': function() {
              $(this.i).val(this.cv + '%')
            }
          })
        });
      
        //carousel
        $(document).ready(function() {
          $("#owl-slider").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true
      
          });
        });
      
        //custom select box
      
        $(function() {
          $('select.styled').customSelect();
        });
      
        /* ---------- Map ---------- */
        $(function() {
          $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
              regions: [{
                values: gdpData,
                scale: ['#000', '#000'],
                normalizeFunction: 'polynomial'
              }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function(e, el, code) {
              el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
          });
        });
      </script>
        
        </html>
        

      