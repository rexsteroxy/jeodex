@extends('layouts.frontApp')
@section('content')

    <div class="site-blocks-cover overlay"  style="background-image: url(images/hero_bg.png); color:black;"
     data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            

            <h1 class="text-white font-weight-light mb-5 text-uppercase ">...Swift delivery always!</h1>
            <h6 class="text-white mb-5 px-5">Effective Logistics Solutions For Every Business</h6>
            <form action="/track" method="post" >
              {{ csrf_field() }}
              @include('includes.messages')
              <div class="form-group">
                <input type="text" class="form-control btn-block"  name="track_id" placeholder="Enter Way Bill Number">
              </div>
              <input type="submit" class="btn btn-primary py-3 px-5 text-white"  value="Track My Order">
            </form>
           

          </div>
        </div>
      </div>
    </div>  

    <div class="container">
      <a id="services"></a>
      <div class="row align-items-center no-gutters align-items-stretch overlap-section">
        <div class="col-md-4">
          <div class="feature-1 pricing h-100 text-center">
            <img src="images/cou2.jpg" alt="Logo" width="250" height="200">
            <h2 class="my-4 heading">Local Delivery</h2>
            <p>We deliver your packages to anywhere in the country, with care and on time. Track the process every step of the way.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="free-quote bg-dark h-100">
            <img src="images/courier1.svg" alt="Logo" width="250" height="200">
            <h2 class="my-4 heading">E-Commerce Partnership</h2>
            <p>Impress your customers with an efficient doorstep delivery. Let us do the work, while you take the credit.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-3 pricing h-100 text-center">
            <img src="images/customer.jpg" alt="Logo" width="250" height="200">
            <h2 class="my-4 heading">24/7 Customer Support</h2>
            <p>We have a ready team to answer your questions when you have them.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="mb-0 text-primary">Why Choose Us</h2>
            <p class="color-black-opacity-5">Tailored solutions to serve you better.</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary "></span></div>
              <div>
                <h3>Real-Time Tracking </h3>
                <p>A transparent process that allows you monitor your package from pickup to delivery.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary "></span></div>
              <div>
                <h3>E-Commerce Partnership</h3>
                <p>We offer a quick and reliable delivery service. Where possible, it can even get to you within 24 hours. </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary "></span></div>
              <div>
                <h3>Customer Service</h3>
                <p>We a 24/7 standby team to answer your questions and resolve complaints if you ever have any. </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>



  
    <div class="site-section bg-image overlay" style="background-image: url('images/hero_bg_4.jpg');">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary" data-aos="fade">A Simple and Seamless Process</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="how-it-work-item">
              <span class="number">1</span>
              <div class="how-it-work-body">
                <h2>Visit An Office Nearest To You </h2>
                <p class="mb-5">Check in at any of our offices or request for pick up.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="how-it-work-item">
              <span class="number">2</span>
              <div class="how-it-work-body">
                <h2>Drop-Off-Your Package</h2>
                <p class="mb-5">A simple sign-on and documentation process to get all necessary details.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="how-it-work-item">
              <span class="number">3</span>
              <div class="how-it-work-body">
                <h2>Get Real-Time Tracking Details</h2>
                <p class="mb-5">Track your package every step of the way.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>




  

    <div class="site-section block-13">
      <!-- <div class="container"></div> -->


      <div class="owl-carousel nonloop-block-13">
        <div>
          <a href="#services" class="unit-1 text-center">
            <img src="images/dev6.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Warehousing</h3>
              <p class="px-5">We have a warehousing and distribution services that helps your business achieve a seamless flow of goods across suppliers, vendors and customers.</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#services" class="unit-1 text-center">
            <img src="images/dev2.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Air Transport</h3>
              <p class="px-5">We work with selected carriers to offer a range of secure and flexible air shipping products—allowing a tailored experience of speed.</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#services" class="unit-1 text-center">
            <img src="images/dev3.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Cargo Shipping</h3>
              <p class="px-5">Now, you can worry less about ensuring your cargo reaches the right place, at the right time and on a convenient budget.</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#services" class="unit-1 text-center">
            <img src="images/dev4.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Pickup and Delivery</h3>
              <p class="px-5">Eliminate the hassles of sending packages with a delivery partner that ensures efficient pickup and drop off at preferred locations.</p>
            </div>
          </a>
        </div>

      </div>
    </div>

    
    <div class="site-section border-top">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-5 text-black">Your package is in the right hands</h2>
            <p class="mb-0"><a href="/" class="btn btn-primary py-3 px-5 text-white">Get Started</a></p>
          </div>
        </div>
      </div>
    </div>
    
@endsection 