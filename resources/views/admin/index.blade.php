@extends('layouts.admin')

@section('content')
    
    <!--main content start-->
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header" style="color: blue;"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a style="font-size: 15px;" href="/">Home</a></li>
            </ol>
          </div>
        </div>

        <div class="row">
          <!--====== INFO BOX ======-->
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count"><a href="/packages">Package</a></div>
              <div class="title">Lists</div>
            </div>
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count"><a href="/package_upload">Package</a></div>
              <div class="title">Upload</div>
            </div>
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box yellow-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count"><a href="/status">Delivery</a></div>
              <div class="title">Status</div>
            </div>
          </div>
          <!--/.col-->
          @if (Auth::user()->super_admin === 1)
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box red-bg">
              <i class="fa fa-cubes"></i>
              <div class="count"><a href="/admin/management">Admin</a></div>
              <div class="title">Management</div>
            </div>
          </div>
          @else 
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box red-bg">
              <i class="fa fa-cubes"></i>
              <div class="count"><a href="/profile/{{Auth::user()->id}}">Admin</a></div>
              <div class="title">Profile</div>
            </div>
          </div>
          @endif
          
        </div>
        

        <div class="row">
        <!--====== Map Area ======-->
          <div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body-map">
                <div id="map" style="height:380px;"></div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <!-- List starts -->
            <ul class="today-datas">
              <!-- List #1 -->
              <li>
                <!-- Graph -->
                <div><span id="todayspark1" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text">11,500 visitors/day</div>
              </li>
              <li>
                <div><span id="todayspark2" class="spark"></span></div>
                <div class="datas-text">15,000 Pageviews</div>
              </li>
              <li>
                <div><span id="todayspark3" class="spark"></span></div>
                <div class="datas-text">30.55% Bounce Rate</div>
              </li>
              <li>
                <div><span id="todayspark4" class="spark"></span></div>
                <div class="datas-text">$16,00 Revenue/Day</div>
              </li>
              <li>
                <div><span id="todayspark5" class="spark"></span></div>
                <div class="datas-text">12,000000 visitors every Month</div>
              </li>
            </ul>
          </div>

        </div>

      </section>

      @endsection
     