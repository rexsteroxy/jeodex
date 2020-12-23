<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jeodex Logistics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">


    <style>

#loader-wrapper {
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  z-index:1000;
}
#loader {
  display:block;
  position: relative;
  top:50%;
  left:50%;
  width:150px;
  height:150px;
  margin:-75px 0 0 -75px;
  border:3px solid transparent;
  border-top-color:white;
  border-radius:100%;
  -webkit-animation: spin 2s linear infinite;
          animation: spin 2s linear infinite;
  z-index:1001;
}
#loader:before {
  content:"";
  position: absolute;
  top:5px;
  left:5px;
  right:5px;
  bottom:5px;
  border:3px solid transparent;
  border-top-color: yellow;
  border-radius:100%;
  -webkit-animation: spin 3s linear infinite;
          animation: spin 3s linear infinite;
}
#loader:after {
  content:"";
  position: absolute;
  top:12px;
  left:12px;
  right:12px;
  bottom:12px;
  border:3px solid transparent;
  border-top-color:orange;
  border-radius:100%;
  -webkit-animation: spin 1.5s linear infinite;
          animation: spin 1.5s linear infinite;
}
@-webkit-keyframes spin {
  0%   { 
    -webkit-transform: rotate(0deg); 
      -ms-transform: rotate(0deg); 
          transform: rotate(0deg);
  }
  100% { 
    -webkit-transform: rotate(360deg); 
      -ms-transform: rotate(360deg); 
          transform: rotate(360deg);
  }
}
@keyframes spin {
  0%   { 
    -webkit-transform: rotate(0deg); 
      -ms-transform: rotate(0deg); 
          transform: rotate(0deg);
  }
  100% { 
    -webkit-transform: rotate(360deg); 
      -ms-transform: rotate(360deg); 
          transform: rotate(360deg);
  }
}

#loader-wrapper .loader-section {
  position:fixed;
  top:0;
  background:#000;
  width:51%;
  height:100%;
  z-index:1000;
}

#loader-wrapper .loader-section.section-left {
  left:0
}
#loader-wrapper .loader-section.section-right {
  right:0;
}

/* Loaded Styles */
.loaded #loader-wrapper .loader-section.section-left {
  transform: translateX(-100%);
  transition: all 0.7s 0.3s cubic-bezier(0.645,0.045,0.355,1.000);
}
.loaded #loader-wrapper .loader-section.section-right {
  transform: translateX(100%);
  transition: all 0.7s 0.3s cubic-bezier(0.645,0.045,0.355,1.000);
}
.loaded #loader {
  opacity: 0;
  transition: all 0.3s ease-out;
}
.loaded #loader-wrapper {
  visibility: hidden;
  transform:translateY(-100%);
  transition: all 0.3s 1s ease-out;
}
    </style>
    
    
  </head>
  <body>

   
   <!-- Add loader-wrapper just below the body tag -->
<div id="loader-wrapper">
  <div id="loader">
  
  </div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <img src="images/logo.png" alt="Logo" width="100" height="100">
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li class="has-children">
                  <a>Our Services</a>
                  <ul class="dropdown">
                    <li><a href="/domestic">DOMESTIC COURIER SOLUTIONS</a></li>
                    <li><a href="/ecommerce">E-COMMERCE LOGISTICS</a></li>
                   
                  </ul>
                </li>
                <li><a href="/login">Merchant Login</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="">MON-SUN : 8AM-8PM</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

 <!--====== HEADER PART ENDS ======-->

 @yield('content')

<!--====== FOOTER PART START ======-->


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">JEODEX LOGISTICS</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">DOMESTIC COURIER SOLUTIONS</a></li>
                  <li><a href="#">E-COMMERCE LOGISTICS</a></li>
                </ul>
              </div>

            

              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Quici Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Merchant Login</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="">MON-SUN : 8AM-8PM</a></li>
                  
                </ul>
              </div>


              
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>


            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-8">
            <div class="border-top pt-5">
            <p>
           
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
            All rights reserved | Powered by <i class="icon-heart" aria-hidden="true">

            </i> by <a href="https://owerritechhub.com" target="_blank" >Owerri-Tech-Hub</a>
          
            </p>
            </div>
          </div>
          <div class="col-md-4">
            <h2 class="footer-heading mb-4">Quick Contact</h2>
            <a href="#" style=color:white">CALL : (+234)90 370 962 90</a>
            <a href="#" style=color:white">Email:info@jeodex.com</a>
           
          </div>
          
        </div>
      </div>
    </footer>
  </div>


  <script>
//For Live Projects
window.addEventListener('load',function(){
  document.querySelector('body').classList.add("loaded")  
});


  </script>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>