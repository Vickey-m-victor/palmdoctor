<?php
session_start();
include('connection.php');
include('functions.php');

$user_data = check_login($con);

?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="keywords" content="Site keywords here" />
  <meta name="description" content="" />
  <meta name="copyright" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Title -->
  <title>Doctor mediplus.</title>

  <!-- Favicon -->
  <link rel="icon" href="img/favicon2.jpeg" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Nice Select CSS -->
  <link rel="stylesheet" href="css/nice-select.css" />
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <!-- icofont CSS -->
  <link rel="stylesheet" href="css/icofont.css" />
  <!-- Slicknav -->
  <link rel="stylesheet" href="css/slicknav.min.css" />
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="css/owl-carousel.css" />
  <!-- Datepicker CSS -->
  <link rel="stylesheet" href="css/datepicker.css" />
  <!-- Animate CSS -->
  <link rel="stylesheet" href="css/animate.min.css" />
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css" />

  <!-- Medipro CSS -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <div class="loader">
      <div class="loader-outter"></div>
      <div class="loader-inner"></div>

      <div class="indicator">
        <svg width="16px" height="12px">
          <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
          <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
        </svg>
      </div>
    </div>
  </div>
  <!-- End Preloader -->

  <!-- Header Area -->
  <header class="header">
    <!-- Topbar -->
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-5 col-12">
            <!-- Contact -->
            <ul class="top-link">
              <li><a href="#">About</a></li>
              <li><a href="admin/index.php">Doctors</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="logout.php">Logout: (<?php echo $user_data['full_name']; ?>)</a></li>
            </ul>
            <!-- End Contact -->
          </div>
          <div class="col-lg-6 col-md-7 col-12">
            <!-- Top Contact -->
            <ul class="top-contact">
              <li><i class="fa fa-phone"></i>+254717448403</li>
              <li>
                <i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">support@mediplus.com</a>
              </li>
            </ul>
            <!-- End Top Contact -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
      <div class="container">
        <div class="inner">
          <div class="row">
            <div class="col-lg-3 col-md-Pull up for precise seeking
Most replayed
0:03
￼￼
￼
￼
3 col-12">
              <!-- Start Logo -->
              <div class="logo">
                <a href="index.html"><img src="img/logo2.jpeg" alt="#" /></a>
              </div>
              <!-- End Logo -->
              <!-- Mobile Nav -->
              <div class="mobile-nav"></div>
              <!-- End Mobile Nav -->
            </div>
            <div class="col-lg-7 col-md-9 col-12">
              <!-- Main Menu -->
              <div class="main-menu">
                <nav class="navigation">
                  <ul class="nav menu">
                    <li class="active">
                      <a href="#">Home <i class=""></i></a>
                    </li>
                    <li><a href="admin/login.php">Doctors </a></li>
                    <li><a href="#">Services </a></li>
                    <li>
                      <a href="#">Login<i class="icofont-rounded-down"></i></a>
                      <ul class="dropdown">
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                      </ul>
                    </li>

                    <li><a href="#newsletter">News Letter</a></li>
                  </ul>
                </nav>
              </div>
              <!--/ End Main Menu -->
            </div>
            <div class="col-lg-2 col-12">
              <div class="get-quote">
                <a href="#Appointment" class="btn">Book Appointment</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Header Inner -->
  </header>
  <!-- End Header Area -->

  <!-- Slider Area -->
  <section class="slider">
    <div class="hero-slider">
      <!-- Start Single Slider -->
      <div class="single-slider" style="background-image: url('img/happymale.jpeg')">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="text">
                <h1>
                  We Provide <span>Medical</span> Services That You Can
                  <span>Trust!</span>
                </h1>
                <p>
                  Get the most trusted medical services at MEDIPLUS!
                </p>
                <div class="button">
                  <a href="#Appointment" class="btn">Get Appointment</a>
                  <a href="#" class="btn primary">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Single Slider -->
      <!-- Start Single Slider -->
      <div class="single-slider" style="background-image: url('img/africanwoman.jpeg')">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="text">
                <h1 style="color: white;">
                  We Provide <span>Medical</span> Services That You Can
                  <span>Trust!</span>
                </h1>
                <p style="color: white;">
                  Get the most trusted medical services at MEDIPLUS!
                </p>
                <div class="button">
                  <a href="#" class="btn">Get Appointment</a>
                  <a href="#" class="btn primary">About Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start End Slider -->
      <!-- Start Single Slider -->
      <div class="single-slider" style="background-image: url('img/doctormedicine.jpeg')">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="text">
                <h1 style="color: white;">
                  We Provide <span>Medical</span> Services That You Can
                  <span>Trust!</span>
                </h1>
                <p style="color: white;">
                  Get the most trusted medical services at MEDIPLUS!
                </p>
                <div class="button">
                  <a href="#" class="btn">Get Appointment</a>
                  <a href="#" class="btn primary">Contact Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Single Slider -->
    </div>
  </section>
  <!--/ End Slider Area -->

  <!-- Start Schedule Area -->
  <section class="schedule">
    <div class="container">
      <div class="schedule-inner">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <!-- single-schedule -->
            <div class="single-schedule first">
              <div class="inner">
                <div class="icon">
                  <i class="fa fa-ambulance"></i>
                </div>
                <div class="single-content">
                  <span>Clinical Research Unit</span>
                  <h4>The (CRU)</h4>
                  <p>
                    The Clinical Research Unit (CRU) is a core facility of the Mediplus Medical Facility-
                    Experimental Therapeutics program and has established in line with Mediplus' clinical and translational research agenda.
                  </p>
                  <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <!-- single-schedule -->
            <div class="single-schedule middle">
              <div class="inner">
                <div class="icon">
                  <i class="icofont-prescription"></i>
                </div>
                <div class="single-content">
                  <span>Clinical Diagnostics</span>
                  <h4>Diagnostics </h4>
                  <p>
                    Diagnostics Services and Health Information Division provides Health Information services to support clinical excellence.
                  </p>
                  <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-12">
            <!-- single-schedule -->
            <div class="single-schedule last">
              <div class="inner">
                <div class="icon">
                  <i class="icofont-ui-clock"></i>
                </div>
                <div class="single-content">
                  <span>Opening Hours</span>
                  <h4>Opening Hours</h4>
                  <ul class="time-sidual">
                    <li class="day">
                      Monday - Friday <span>8.00-20.00</span>
                    </li>
                    <li class="day">Saturday <span>9.00-18.30</span></li>
                    <li class="day">
                      Monday - Thusday <span>9.00-15.00</span>
                    </li>
                  </ul>
                  <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/End Start schedule Area -->

  <!-- Start Feautes -->
  <section class="Feautes section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>We Are Always Ready to Help You & Your Family</h2>
            <img src="img/section-img.png" alt="#" />
            <p>
              With you, every step of the way
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-12">
          <!-- Start Single features -->
          <div class="single-features">
            <div class="signle-icon">
              <i class="icofont icofont-ambulance-cross"></i>
            </div>
            <h3>Emergency Help</h3>
            <p>
              Get a fast response from our medical team
            </p>
          </div>
          <!-- End Single features -->
        </div>
        <div class="col-lg-4 col-12">
          <!-- Start Single features -->
          <div class="single-features">
            <div class="signle-icon">
              <i class="icofont icofont-medical-sign-alt"></i>
            </div>
            <h3>Enriched Pharmecy</h3>
            <p>
              We stock up on drugs and medicine that help to enhance your health and wellness
            </p>
          </div>
          <!-- End Single features -->
        </div>
        <div class="col-lg-4 col-12">
          <!-- Start Single features -->
          <div class="single-features last">
            <div class="signle-icon">
              <i class="icofont icofont-stethoscope"></i>
            </div>
            <h3>Medical Treatment</h3>
            <p>
              Our health consultants shall conduct medical check-ups on you when necessary
            </p>
          </div>
          <!-- End Single features -->
        </div>
      </div>
    </div>
  </section>
  <!--/ End Feautes -->

  <!-- Start Fun-facts -->
  <div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Fun -->
          <div class="single-fun">
            <i class="icofont icofont-home"></i>
            <div class="content">
              <span class="counter">3468</span>
              <p>Hospital Rooms</p>
            </div>
          </div>
          <!-- End Single Fun -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Fun -->
          <div class="single-fun">
            <i class="icofont icofont-user-alt-3"></i>
            <div class="content">
              <span class="counter">557</span>
              <p>Specialist Doctors</p>
            </div>
          </div>
          <!-- End Single Fun -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Fun -->
          <div class="single-fun">
            <i class="icofont-simple-smile"></i>
            <div class="content">
              <span class="counter">4379</span>
              <p>Happy Patients</p>
            </div>
          </div>
          <!-- End Single Fun -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Fun -->
          <div class="single-fun">
            <i class="icofont icofont-table"></i>
            <div class="content">
              <span class="counter">32</span>
              <p>Years of Experience</p>
            </div>
          </div>
          <!-- End Single Fun -->
        </div>
      </div>
    </div>
  </div>
  <!--/ End Fun-facts -->


  <!-- Start Call to action -->

  <!--/ End Call to action -->

  <!-- Start portfolio -->
  <section class="portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>World-class care, here and now</h2>
            <img src="img/section-img.png" alt="#" />
            <p>
              The Mediplus medical facility has set the standard for comprehensive healthcare and modern medical education in East Africa.
              Our dedicated staff, advanced facilities and state-of-the-art technologies have earned the hospital great reputation as a leading medical institution and teaching hospital in the region, and beyond.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-12">
          <div class="owl-carousel portfolio-slider">
            <div class="single-pf">
              <img src="img/blackdoctor.jpg" alt="#" />
              <a href="portfolio-details.html" class="btn">View Details</a>
            </div>
            <div class="single-pf">
              <img src="img/doctormedicine.jpeg" alt="#" />
              <a href="portfolio-details.html" class="btn">View Details</a>
            </div>
            <div class="single-pf">
              <img src="img/blacknurse.jpg" alt="#" />
              <a href="portfolio-details.html" class="btn">View Details</a>
            </div>
            <div class="single-pf">
              <img src="img/happymale.jpeg" alt="#" />
              <a href="portfolio-details.html" class="btn">View Details</a>
            </div>
            <div class="single-pf">
              <img src="img/labdoctor.jpg" alt="#" />
              <a href="portfolio-details.html" class="btn">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!--/ End portfolio -->
  <section class="call-action overlay" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
          <div class="content">
            <h2>Do you need Emergency Medical Care? Call @+254717448403</h2>
            <p>
            </p>
            <div class="button">
              <a href="#" class="btn">Contact Now</a>
              <a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start service -->
  <section class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>We Offer Different Services To Improve Your Health</h2>
            <img src="img/section-img.png" alt="#" />
            <p>

            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="icofont icofont-prescription"></i>
            <h4><a href="service-details.html">General Treatment</a></h4>
            <p>
              We offer general body check ups when you visit out facility
            </p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="icofont icofont-tooth"></i>
            <h4><a href="service-details.html">Teeth Whitening</a></h4>
            <p>
              Teeth whitening is offered by the most experienced dentists
              from our facility
            </p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="icofont icofont-heart-alt"></i>
            <h4><a href="service-details.html">Heart Surgery</a></h4>
            <p>
              We have an experienced team who will conduct heart surgeries with 100% success rate
            </p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="icofont icofont-listening"></i>
            <h4><a href="service-details.html">Ear Treatment</a></h4>
            <p>
              Are you having any earing problems? Look no further, we are here for you
            </p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="icofont icofont-eye-alt"></i>
            <h4><a href="service-details.html">Vision Problems</a></h4>
            <p>
              We have modernised equipments that will aid in administering the right glasses for you
            </p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="icofont icofont-blood"></i>
            <h4><a href="service-details.html">Blood Transfusion</a></h4>
            <p>
              Look no further be cause we have a huge blood bank for the safest
              blood transfusion
            </p>
          </div>
          <!-- End Single Service -->
        </div>
      </div>
    </div>
  </section>
  <!--/ End service -->

  <!-- Pricing Table -->
  <section class="pricing-table section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>We Provide You The Best Treatment In Resonable Price</h2>
            <img src="img/section-img.png" alt="#" />
            <p>
              The most pocket friendly medical service!
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Single Table -->
        <div class="col-lg-4 col-md-12 col-12">
          <div class="single-table">
            <!-- Table Head -->
            <div class="table-head">
              <div class="icon">
                <i class="icofont icofont-ui-cut"></i>
              </div>
              <h4 class="title">Plastic Suggery</h4>
              <div class="price">
                <p class="amount">ksh 19,999<span>/ Per Visit</span></p>
              </div>
            </div>
            <!-- Table List -->
            <ul class="table-list">
              <li>
                <i class="icofont icofont-ui-check"></i>Details About the procedure
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i>Additional Information
              </li>
              <li class="cross">
                <i class="icofont icofont-ui-close"></i>Medicine Information
              </li>
              <li class="cross">
                <i class="icofont icofont-ui-close"></i>More Information
              </li>
              <li class="cross">
                <i class="icofont icofont-ui-close"></i>Any specific instructions or notes
              </li>
            </ul>
            <div class="table-bottom">
              <a class="btn" href="#">Book Now</a>
            </div>
            <!-- Table Bottom -->
          </div>
        </div>
        <!-- End Single Table-->
        <!-- Single Table -->
        <div class="col-lg-4 col-md-12 col-12">
          <div class="single-table">
            <!-- Table Head -->
            <div class="table-head">
              <div class="icon">
                <i class="icofont icofont-tooth"></i>
              </div>
              <h4 class="title">Teeth Whitening</h4>
              <div class="price">
                <p class="amount">ksh 29,900<span>/ Per Visit</span></p>
              </div>
            </div>
            <!-- Table List -->
            <ul class="table-list">
              <li>
                <i class="icofont icofont-ui-check"></i>Details About the procedure
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i>Additional Information
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i>Medicine Information
              </li>
              <li class="cross">
                <i class="icofont icofont-ui-close"></i>More Information
              </li>
              <li class="cross">
                <i class="icofont icofont-ui-close"></i>Any specific instructions or notes
              </li>
            </ul>
            <div class="table-bottom">
              <a class="btn" href="#">Book Now</a>
            </div>
            <!-- Table Bottom -->
          </div>
        </div>
        <!-- End Single Table-->
        <!-- Single Table -->
        <div class="col-lg-4 col-md-12 col-12">
          <div class="single-table">
            <!-- Table Head -->
            <div class="table-head">
              <div class="icon">
                <i class="icofont-heart-beat"></i>
              </div>
              <h4 class="title">Heart Suggery</h4>
              <div class="price">
                <p class="amount">ksh 399,000<span>/ Per Visit</span></p>
              </div>
            </div>
            <!-- Table List -->
            <ul class="table-list">
              <li>
                <i class="icofont icofont-ui-check"></i>Details About the procedure
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i>Additional Information
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i>Medicine Information
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i>More Information
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i>Any specific instructions or notes
              </li>
            </ul>
            <div class="table-bottom">
              <a class="btn" href="#">Book Now</a>
            </div>
            <!-- Table Bottom -->
          </div>
        </div>
        <!-- End Single Table-->
      </div>
    </div>
  </section>
  <!--/ End Pricing Table -->

  <!-- Start Blog Area -->
  <section class="blog section" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Keep up with Our Most Recent Medical News.</h2>
            <img src="img/section-img.png" alt="#" />
            <p>

            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Single Blog -->
          <div class="single-news">
            <div class="news-head">
              <img src="img/blogsec1.jpg" alt="#" />
            </div>
            <div class="news-body">
              <div class="news-content">
                <div class="date">23, Dec, 2023</div>
                <h2>
                  <a href="blog-single.html">We have announced our new product.</a>
                </h2>
                <p class="text">
                  Introducing the new MEDIPLUS app for android, the IOS alternative is under development
                </p>
              </div>
            </div>
          </div>
          <!-- End Single Blog -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Single Blog -->
          <div class="single-news">
            <div class="news-head">
              <img src="img/blogsec2.jpg" alt="#" />
            </div>
            <div class="news-body">
              <div class="news-content">
                <div class="date">15 Dec, 2023</div>
                <h2>
                  <a href="blog-single.html">Top five way for solving teeth problems.</a>
                </h2>
                <p class="text">
                  Rinsing your mouth with water or mouthwash, chewing gum (sugar-free of course!),
                  or popping a mint in your mouth are all temporary fixes ...learn more
                </p>
              </div>
            </div>
          </div>
          <!-- End Single Blog -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Single Blog -->
          <div class="single-news">
            <div class="news-head">
              <img src="img/blogsec3.jpg" alt="#" />
            </div>
            <div class="news-body">
              <div class="news-content">
                <div class="date">05 Jan, 2024</div>
                <h2>
                  <a href="blog-single.html">We provide highly business solutions</a>
                </h2>
                <p class="text">
                  We have business opportunities for indivinduals who are interested in
                  selling and supplying qualified drugs to the institution
                </p>
              </div>
            </div>
          </div>
          <!-- End Single Blog -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Blog Area -->

  <!-- Start clients -->
  <div class="clients overlay">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
          <div class="owl-carousel clients-slider">
            <div class="single-clients">
              <img src="img/client1.png" alt="#" />
            </div>
            <div class="single-clients">
              <img src="img/client2.png" alt="#" />
            </div>
            <div class="single-clients">
              <img src="img/client3.png" alt="#" />
            </div>
            <div class="single-clients">
              <img src="img/client4.png" alt="#" />
            </div>
            <div class="single-clients">
              <img src="img/client5.png" alt="#" />
            </div>
            <div class="single-clients">
              <img src="img/client1.png" alt="#" />
            </div>
            <div class="single-clients">
              <img src="img/client2.png" alt="#" />
            </div>
            <div class="single-clients">
              <img src="img/client3.png" alt="#" />
            </div>
            <div class="single-clients">
              <img src="img/client4.png" alt="#" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/Ens clients -->

  <!-- Start Appointment -->
  <section class="appointment" id="Appointment">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>We Are Always Ready to Help You. Book An Appointment</h2>
            <img src="img/section-img.png" alt="#" />
            <p>
              Book an appointment with a doctor, fill in the information in the table below
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12 col-12">
          <form class="form" action="submit_form.php" method="POST">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <input name="name" type="text" placeholder="Name" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <input name="email" type="email" placeholder="Email" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <input name="phone" type="text" placeholder="Phone" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <select name="department" class="nice-select form-control wide">
                    <option value="1">Department</option>
                    <option value="Cardiac Clinic">Cardiac Clinic</option>
                    <option value="Neurology">Neurology</option>
                    <option value="Dentistry">Dentistry</option>
                    <option value="Gastroenterology">Gastroenterology</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <select name="doctor" class="nice-select form-control wide">
                    <option value="1">Doctor</option>
                    <option value="Dr.A Alex">Dr. V Mutua</option>
                    <option value="Dr Bridget">Dr. Bridget K</option>
                    <option value="Dr John">Dr John</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <input name="appointment_date" type="text" placeholder="Date" id="datepicker" />
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-12">
                <div class="form-group">
                  <textarea name="message" placeholder="Write Your Message Here....."></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-5 col-md-4 col-12">
                <div class="form-group">
                  <div class="button">
                    <button type="submit" class="btn">
                      Book An Appointment
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-8 col-12">
                <p>( We will confirm by a Text Message )</p>
              </div>
            </div>
          </form>

        </div>
        <div class="col-lg-6 col-md-12">
          <div class="appointment-image">
            <img src="img/whitegroundnurse.jpeg" alt="#" class="nurse" style="max-width: 55%; margin-left: 200px;" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Appointment -->

  <!-- Start Newsletter Area -->
  <section class="newsletter section" id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <!-- Start Newsletter Form -->
          <div class="subscribe-text">

            <h6>
              World-class doctors from World-Class Institutions
            </h6>
          </div>
          <!-- End Newsletter Form -->
        </div>
        <div class="col-lg-6 col-12">
          <!-- Start Newsletter Form -->
          <p>
            Whatever your medical needs, we’ve got you covered with world-class doctors from Columbia University and Weill Cornell Medicine.
            With our newly expanded services,
            you’ll have more access to extraordinary care –
            from every day care to access to top specialists in every field, all designed to fit your needs.</p>
          <!-- End Newsletter Form -->
        </div>
      </div>
    </div>
  </section>
  <!-- /End Newsletter Area -->

  <!-- Footer Area -->
  <footer id="footer" class="footer">
    <!-- Footer Top -->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-footer">
              <h2>
                CONTACT US
              </h2>
              <p>
                The Chief Executive Officer, <br>
                Mediplus organisation, <br>
                P.O. Box 20723-00202 Nairobi <br>
                Tel. 020 2726300, 0709854000, 0730643000 <br>
                Email: mediplus@support.or.ke
              </p>
              <!-- Social -->
              <ul class="social">
                <li>
                  <a href="#"><i class="icofont-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icofont-google-plus"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icofont-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icofont-vimeo"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icofont-pinterest"></i></a>
                </li>
              </ul>
              <!-- End Social -->
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-footer f-link">
              <h2>Quick Links</h2>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-footer">
              <h2>Open Hours</h2>
              <p>
                These are our working hours
              </p>
              <ul class="time-sidual">
                <li class="day">Monday - Friday <span>8.00-20.00</span></li>
                <li class="day">Saturday <span>9.00-18.30</span></li>
                <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-footer">
              <h2>Newsletter</h2>
              <p>
                Enter your e-mail address,and we promise not to send spam mails.
              </p>
              <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                <input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required="" type="email" />
                <button class="button">
                  <i class="icofont icofont-paper-plane"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="copyright-content">
              <p>
                © Copyright 2018 | All Rights Reserved by
                <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Copyright -->
  </footer>
  <!--/ End Footer Area -->

  <!-- jquery Min JS -->
  <script src="js/jquery.min.js"></script>
  <!-- jquery Migrate JS -->
  <script src="js/jquery-migrate-3.0.0.js"></script>
  <!-- jquery Ui JS -->
  <script src="js/jquery-ui.min.js"></script>
  <!-- Easing JS -->
  <script src="js/easing.js"></script>
  <!-- Color JS -->
  <script src="js/colors.js"></script>
  <!-- Popper JS -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap Datepicker JS -->
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- Jquery Nav JS -->
  <script src="js/jquery.nav.js"></script>
  <!-- Slicknav JS -->
  <script src="js/slicknav.min.js"></script>
  <!-- ScrollUp JS -->
  <script src="js/jquery.scrollUp.min.js"></script>
  <!-- Niceselect JS -->
  <script src="js/niceselect.js"></script>
  <!-- Tilt Jquery JS -->
  <script src="js/tilt.jquery.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="js/owl-carousel.js"></script>
  <!-- counterup JS -->
  <script src="js/jquery.counterup.min.js"></script>
  <!-- Steller JS -->
  <script src="js/steller.js"></script>
  <!-- Wow JS -->
  <script src="js/wow.min.js"></script>
  <!-- Magnific Popup JS -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Counter Up CDN JS -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Main JS -->
  <script src="js/main.js"></script>
</body>

</html>