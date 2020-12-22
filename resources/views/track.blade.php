<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jeodex Logistics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
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

</head>

<body>

    <div class="preloader">
        <div class="spin">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
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
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="has-children">
                                    <a href="services.html">Our Services</a>
                                    <ul class="dropdown">
                                        <li><a href="domestic.html">DOMESTIC COURIER SOLUTIONS</a></li>
                                        <li><a href="ecommerce.html">E-COMMERCE LOGISTICS</a></li>

                                    </ul>
                                </li>
                                <li><a href="login.html">Merchant Login</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="">MON-SUN : 8AM-8PM</a></li>
                            </ul>
                        </nav>
                    </div>


                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                            href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                                class="icon-menu h3"></span></a></div>

                </div>

            </div>
    </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg.png); color:black;"
        data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">

                    <br><br><br><br><br><br><br>

                    <h1 class="text-white font-weight-light mb-5 text-uppercase ">...Swift delivery always!</h1>
                    <h6 class="text-white mb-5 px-5">Effective logistics Solutions for every business.</h6>
                    <div class="progress">
                        <div class="progress-bar"  role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100" style="width:90%;">
                            90%
                            Owerri
                        </div>
                    </div>
                    <p class="btn btn-default py-3 px-5 text-white">Current Location</p>






                    <div class="card order-customer-details">
                        <div class="card-content">
                            <!---->
                            <!---->
                            <div class="card-title alt" ng-if="orderCtrl.alternetStyle === " tracker"">
                                <h4 style="color:black">Tracking:{{$parcel->tracking_id }}</h4>
                            </div>
                            <!---->
                            <div class="details-container">
                                <!---->
                                <div class="details" ng-if="orderCtrl.alternetStyle === " tracker"">
                                    <p style="color:red">
                                        Sender Details:</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h5 style="color:#687284;">Name:</h5>
                                        </li>
                                        <li class="list-inline-item">{{ $parcel->sender_name }}</li>
                                    </ul>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h5 style="color:#687284;">Location:</h5>
                                        </li>
                                        <li class="list-inline-item">{{ $parcel->sender_location }}</li>
                                    </ul>

                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h5 style="color:#687284;">Tel:</h5>
                                        </li>
                                        <li class="list-inline-item">{{ $parcel->reciever_phonenumber }}</li>
                                    </ul>
                                </div>
                                <!---->

                                <div class="details">
                                    <p style="color:red">
                                        Reciever Details:</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h5 style="color:#687284;">Name:</h5>
                                        </li>
                                        <li class="list-inline-item">{{ $parcel->reciever_name }}</li>
                                    </ul>
                                    <!---->
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h5 style="color:#687284;">Address:</h5>
                                        </li>
                                        <li class="list-inline-item">{{ $parcel->reciever_address }}</li>
                                    </ul>
                                    <!---->
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h5 style="color:#687284;">Tel:</h5>
                                        </li>
                                        <li class="list-inline-item">{{ $parcel->reciever_phonenumber }}</li>
                                    </ul>
                                    <!---->
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h5 style="color:#687284;">Email:</h5>
                                        </li>
                                        <li class="list-inline-item">{{ $parcel->reciever_email }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="package-additional-info">
                        <div class="value">
                            <dl>
                                <dd style="color:red">Destination:</dd>
                                <dt> {{$parcel->destination}}</dt>
                            </dl>
                        </div>
                        <!---->
                        <div class="estimated-delivery value"
                            ng-if="pack.minEstDeliveryDate &amp;&amp; pack.maxEstDeliveryDate">

                            <dl>
                                <dd style="color:red">Date Sent:</dd>
                                <dt>{{date('M j, Y h:i', strtotime($parcel->created_at))}}
                                    <!---->
                                </dt>
                            </dl>
                        </div>
                        <!---->
                        <div class="estimated-delivery value"
                            ng-if="pack.minEstDeliveryDate &amp;&amp; pack.maxEstDeliveryDate">
                            <dl>
                                <dd style="color:red">Estimated Delivery Date:</dd>
                                <dt>{{date('M j, Y h:i', strtotime($parcel->delivery_date))}}
                                    <!---->
                                </dt>
                            </dl>
                        </div>
                        <!---->
                    </div>


                </div>
            </div>
            
        </div>
        
    </div>









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