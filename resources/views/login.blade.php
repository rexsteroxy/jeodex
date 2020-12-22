@extends('layouts.frontApp')

@section('content')

  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg.png);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Merchant Login</a>
            <p class="breadcrumb-custom"><a href="index.html">Home</a> <span class="mx-2">&gt;</span> <span>Merchant</span></p>
          </div>
        </div>
      </div>
    </div>  

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
          <div class="col-md-6 mb-5">
            <form action="#" class="p-5 bg-white">
             

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Password</label> 
                  <input type="password" id="subject" class="form-control">
                </div>
              </div>

            

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="login" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
         
          <div class="col-md-3"></div>
        </div>
      </div>
    </div>
    
    @endsection 