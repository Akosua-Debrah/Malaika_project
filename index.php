<?php
require ("crud_operations.php");
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Malaika-GH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicons -->
 <link href="assets/img/malaika/" rel="icon">
  <link href="assets/img/malaika/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
        <!-- <a href="index.html" class="scrollto"><img src="assets/img/malaika/malaika logo.jpg" alt="" title=""></a> -->
        <a href="/" class="scrollto">
          <div class="timeline-image"><img class="img-fluid" src="assets/img/malaika/navbar-logo.png" 
              alt="..."  /></div>
        </a>

      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link" href="vote.php">Vote</a></li>
          <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</a>
              </li>
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#signinModal">Login</a></li>
            </ul>
          </li>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a class="buy-tickets scrollto" href="#buy-tickets">Buy Tickets</a>

    </div>
  </header><!-- End Header -->

  <!-- sign up modal -->
  <div class="modal fade" id="signupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form action="crud_operations.php" method="post" class="ajax">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabelSignin">Sign Up</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="username" class="form-label">Name</label>
              <input name="name" type="name" class="form-control" id="username" placeholder="Enter Your Name"
                aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
              <label for="useremail" class="form-label">Email address</label>
              <input name="email" type="email" class="form-control" id="useremail"
                placeholder="Enter Your Email" aria-describedby="emailHelp">
            </div>
            <!-- <div class="mb-3">
              <label for="exampleInputConteact" class="form-label">Contact</label>
              <input name="number" type="number" class="form-control" id="exampleInputContact"
                placeholder="Enter Your Number">
            </div> -->
            <div class="mb-3">
              <label for="userpassword" class="form-label">Password</label>
              <input name="password" type="password" class="form-control" id="userpassword"
                placeholder="Enter Your Password">
            </div>
            <div class="mb-3">
              <label for="userconfirmpassword" class="form-label">Confirm Password</label>
              <input name="confirmpassword" type="password" class="form-control" id="userconfirmpassword"
                placeholder="Confirm Password">
            </div>

            <br>
              <span id="response"></span>
              <div class="col-md-4"></div>
          </div>
          <div class="modal-footer">
            <p>Already have an account?<a class="other-option" href="" data-bs-toggle="modal"
                data-bs-target="#signinModal">login</a></p>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button id="signinmodal" name= "signup"type="submit" class="btn btn-primary" style="background-color:#f8234a" onclick="return check()">Sign
              Up</button>
              <br>
              <span id="response"></span>
              <div class="col-md-4"></div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- sign in modal -->
  <div class="modal fade" id="signinModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form action="crud_operations.php" method="post" class="ajax">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input name="email" type="email" class="form-control" id="signin-email" placeholder="Enter Your Email"
                aria-describedby="emailHelp">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input name="password" type="password" class="form-control" id="signin-password"
                placeholder="Enter Your Password" >
            </div>

            <br>
              <span id="response"></span>
              <div class="col-md-4"></div>
          </div>
          <div class="modal-footer">
            <p>Not a member?<a class="other-option" href="" data-bs-toggle="modal" data-bs-target="#signupModal">sign
                up</a></p>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button name="login" id="loginmodal" type="submit" class="btn btn-primary d-flex justify-content-center"
              style="background-color:#f8234a">login</button>
              <br>
              <span id="response"></span>
              <div class="col-md-4"></div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Register in modal -->
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form action="crud_operations.php" method="POST" class="ajax">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabelSignin">Register</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Name</label>
              <input name="name" type="name" class="form-control" id="username" placeholder="Enter Your Name"
                aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                placeholder="Enter Your Email" aria-describedby="emailHelp">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <!-- <div class="mb-3">
              <label for="exampleInputConteact" class="form-label">Contact</label>
              <input name="number" type="number" class="form-control" id="exampleInputContact"
                placeholder="Enter Your Number">
            </div> -->
            <div class="mb-3">
              <label for="age" class="form-label">Age</label>
              <input name="age" type="number" class="form-control" id="age"
                placeholder="Enter Your Age">
            </div>
            <div class="mb-3">
              <label for="user-contact" class="form-label">Contact</label>
              <input name="contact" type="text" class="form-control" id="user-contact"
                placeholder="Enter Your Contact">
            </div>

            <!-- file upload -->
            <label class="form-label" for="customFile">Upload Your Headshot</label>
            <input name="image" type="file" class="form-control " id="customFile" />
            <div class="invalid-feedback" data-sb-feedback="message:required">Headshot is Required.
            </div>

            <br>
              <span id="response"></span>
              <div class="col-md-4"></div>
          </div>
          
          <div class="modal-footer justify-content-center">
            <div class="text-center">
              <button id="registermodal" name="register" type="submit" class="btn btn-primary" style="background-color:#f8234a;">Register</button>
              
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Miss<br><span>Malaika</span> Ghana</h1>
      <p class="mb-4 pb-0">Powered by Charter House Ghana</p>
      <a href="https://youtu.be/tUyPnlY-rXI" class="glightbox play-btn mb-4"></a>
      <a href="#about" class="about-btn scrollto">Tell me more</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

  <?php
    // display data from the database
    $squery = "select * from event_details where event_id=1;";
    $results= $connection->query($squery) or die($connection->error);

    // code for edit button
    while($row =$results->fetch_assoc()):{
  
  ?>


    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Event</h2>
            <p>The Grand Finale is the biggest event in the history of Miss Malaika shows. This event is to finally
               crown a Queen. Don't forget to vote for your favorite Delegate either via the shortcode <strong> *711*80# </strong> or
               vote here on or website.</p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p ><?= $row['event_venue']?></p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p ><?= $row['event_date']?></p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    <?php
    }endwhile;
    ?>

    <!-- About-->
 <section class="page-section" id="about">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase" style="color:white;"> ABOUT</h2>
          <h3 class="section-subheading text" style="color:white;">The Genesis of Miss Malaika.</h3>
        </div>
        <ul class="timeline">
          <li>
            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/malaika/malaika logo.jpg"
                alt="..." /></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>2009-2011</h4>
                <h4 class="subheading">Miss Malaika</h4>
              </div>
              <div class="timeline-body">
                <p class="text">Miss Malaika Ghana is a beauty pageant, reality show that was 
                  first aired in Ghana in 2003. The show is produced by charter House Productions
                   which is produced as a 12- to -13 week reality show. The concept of the show 
                   presented to the audience is reality show that also allows its viewers to vote
                    in order to keep their favorite contestants in the run. Each week contestants 
                    are given task to complete which range from performances to organizing events.
                     They are then assessed by a panel of judges and a contestant is evicted each
                      week till we are down to the final 10 who qualify for the finale and the queen
                       is finally crowned 
</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/malaika/charter-house.jpg"
                alt="..." /></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>March 2011</h4>
                <h4 class="subheading">Charter House Ghana</h4>
              </div>
              <div class="timeline-body">
                <p class="text">The Experiential Concepts Behind Charterhouse Company Limited
                   established in 2000 as a Production and Events subsidiary of Multiple Concepts
                    Group. Charterhouse has since then, become the biggest company in Event management
                     and Audio-visual production in Ghana.As a one stop production house, we have developed
                      the capacity to organize and produce any event or production of any size, from small to 
                      medium to large, in either outdoor or indoor venues, anywhere in Ghana and WEST AFRICA.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>
                Be Part
                <br />
                Of Our
                <br />
                Story!
              </h4>
            </div>
          </li>
        </ul>
      </div>
    </section>

  

    <!-- ======= Hosts Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Event Host</h2>
          <p>Here are our Lovely Hosts</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/malaika/Berla_Mundi.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><u>Berla Mundi</u></h3>
                <p>Host 1</p>
                <div class="social">
                  <a href="https://twitter.com/berlamundi" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/berlamundi" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/berlamundi/" target="_blank"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/malaika/Naa_Ashorkor.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><u>Naa Ashorkor Mensah</u></h3>
                <p>Host 2</p>
                <div class="social">
                  <a href="https://twitter.com/Naa_Ashorkor" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/naa.ashorkor.md" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/naa_ashorkor_/" target="_blank"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/malaika/Regina_malaika.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><u> Regina Vanhelvert</u></h3>
                <p>Host 3</p>
                <div class="social">
                  <a href="https://twitter.com/regivanhelvert" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/reginavanhelvert" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/reginavanhelvert_/" target="_blank"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
    </section><!-- End Speakers Section -->



    <!-- ======= Venue Section ======= -->
    <section id="venue">

      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Event Venue</h2>
        </div>

        <div class="row g-0">
          <div class="col-lg-6 venue-map">
            <iframe
              src="https://maps.google.com/maps?q=Accra%20International%20Conference%20Centre&t=&z=13&ie=UTF8&iwloc=&output=embed"
              frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <!-- <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width="600" height="500" id="gmap_canvas" 
              src="https://maps.google.com/maps?q=Accra%20International%20Conference%20Centre&t=&z=13&ie=UTF8&iwloc=&output=embed" 
              frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              <a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> -->

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8 position-relative">
                <h3>Accra International Conference Centre (AICC)</h3>
                <p>The Accra International Conference Centre is an events venue in Accra, Ghana. It is located
                  in the Christiansborg area in Accra Osu and is close to a number of important locations such
                  as the Parliament of Ghana, the Accra Sports Stadium, the Independence Square and the Black
                  Star Square. It provides seating for upto 1800 audience..</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      </div>
      </div>

    </section><!-- End Venue Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Gallery</h2>
          <a href="https://www.instagram.com/missmalaikagh/?hl=en" target="_blank">
            <p>Check our gallery from the recent events</p>
          </a>
        </div>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a href="assets/img/malaika/2021-host.jpg" class="gallery-lightbox"><img
                src="assets/img/malaika/2021-host.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/malaika/2021_diaries.jpg" class="gallery-lightbox"><img
                src="assets/img/malaika/2021_diaries.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/malaika/2021_winner.jpg" class="gallery-lightbox"><img
                src="assets/img/malaika/2021_winner.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/malaika/2021_winners.jpg" class="gallery-lightbox"><img
                src="assets/img/malaika/2021_winners.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/malaika/delegates.jpg" class="gallery-lightbox"><img
                src="assets/img/malaika/delegates.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/malaika/grand_finale.jpg" class="gallery-lightbox"><img
                src="assets/img/malaika/grand_finale.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/malaika/gym-session.jpg" class="gallery-lightbox"><img
                src="assets/img/malaika/gym-session.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/malaika/delegates-trip.jpg" class="gallery-lightbox"><img
                src="assets/img/malaika/delegates-trip.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </section><!-- End Gallery Section -->

    <!-- ======= Supporters Section ======= -->
    <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/malaika/GHOne-tv.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/malaika/Guiness-logo.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/malaika/kenya-airways.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/malaika/lux-logo.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/malaika/Royal-Senchi-logo.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/malaika/Tomreik-hotel.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/malaika/GTP-logo.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/malaika/verna-logo.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Sponsors Section -->

    <!-- ======= Register Section ======= -->
    <section id="subscribe">
      <div class="container" data-aos="zoom-in">
        <div class="section-header">
          <h2>Interested in Competing for the Next Season of Miss Malaika Ghana?</h2>
          <p>Click the button to Register</p>
        </div>

        <form method="POST" action="#">
          <div class=" justify-content-center" style="text-align: center;">
            <!-- <div class="col-lg-6 col-md-10 d-flex"> -->
            <!-- <input type="text" class="form-control" placeholder="Enter your Email"> -->
            <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal"><button type="button"
                class="ms-2">Register</button></a>
            <!-- <button type="button" class="ms-2"><a href="#" data-bs-toggle="modal"
                data-bs-target="#registermodal">Register</a></button> -->
            <!-- </div> -->
          </div>
        </form>

        

      </div>
    </section><!-- End Register Section -->

    <!-- ======= Buy Ticket Section ======= -->
    <section id="buy-tickets" class="section-with-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Buy Tickets</h2>
          <p>Grab Your Tickets Now!</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Early Bird Tickets</h5>
                <h6 class="card-price text-center">GH₵ 80.00</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Refreshments</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span> PhotoBooth</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Free Merch</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Swag Bag</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal"
                    data-ticket-type="standard-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Regualr Tickets</h5>
                <h6 class="card-price text-center">GH₵ 100.00</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Refreshments</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>PhotoBooth</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Free Merch</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Swag Bag</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal"
                    data-ticket-type="pro-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">VIP Tickets</h5>
                <h6 class="card-price text-center">GH₵ 200.00</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span> Refreshments</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>PhotoBooth</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Free Merch</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Swag Bag</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal"
                    data-ticket-type="premium-access">Buy Now</button>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Modal Order Form -->
      <div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buy Tickets</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                </div>
                <div class="form-group mt-3">
                  <select id="ticket-type" name="ticket-type" class="form-select">
                    <option value="">-- Select Your Ticket Type --</option>
                    <option value="standard-access">Early Bird Tickets</option>
                    <option value="pro-access">Regular Tickets</option>
                    <option value="premium-access">ViP Tickets</option>
                  </select>
                </div>
                <div class="text-center mt-3">
                  <button type="submit" class="btn">Buy Now</button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

    </section><!-- End Buy Ticket Section -->

  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="assets/img/logo.png" alt="TheEvenet">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro.
              Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore
              consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="">Home</a></li>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="#about">About </a></li>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="#services">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="vote.php">Vote</a></li>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="#buy-tickets">Buy Tickets</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="">Home</a></li>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="#about">About </a></li>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="#services">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="vote.php">Vote</a></li>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="#buy-tickets">Buy Tickets</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              B824/10 Feo Oyeo Link, Accra,<br>
              P. O. Box KN 1234,<br>
              Accra-North <br>
              <strong>Phone:</strong> +233(0) 501 288 474<br>
              <strong>Email:</strong> info@charterhouseghana.com<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/missmalaikagh" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/missmalaikaghana/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/missmalaikagh/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UChZJkSv8MBOx9WMXq3chOOA" class="youtube"><i class="bi bi-youtube"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Charter House Productions</strong>.| All Rights Reserved 2021  
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
      -->
        Designed by Akosua Takyiwa-Debrah
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  

  <script src="index.js"></script>

  <?php $connection->close(); ?>
</body>

</html>