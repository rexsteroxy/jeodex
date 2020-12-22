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

    let trackButton = document.getElementById("track_button");
    let track_id = document.getElementById("track_id");

    trackButton.addEventListener("click", function(e){
e.preventDefault();
let track = track_id.value.split("");
if (track.length < 10) {
  console.log("Invalid track")
}else{
  console.log("valid track")
}

// console.log(track_id.value);

    })


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