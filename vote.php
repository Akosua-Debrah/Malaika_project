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

  <!-- logo -->
 <link href="assets/img/malaika/malaika logo.jpg" rel="icon">

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
          <div class="timeline-image"><img class="img-fluid" src="assets/img/malaika/navbar-logo.png" alt="..." /></div>
        </a>

      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php">About</a></li>
          <li><a class="nav-link scrollto" href="index.php">Gallery</a></li>
          <li><a class="nav-link scrollto active" href="#speakers">Vote</a></li>
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
      <a class="buy-tickets scrollto" href="index.php">Buy Tickets</a>

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
              <input name="email" type="email" class="form-control" id="useremail" placeholder="Enter Your Email"
                aria-describedby="emailHelp">
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
            <button id="signinmodal" name="signup" type="submit" class="btn btn-primary"
              style="background-color:#f8234a" onclick="return check()">Sign
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
                placeholder="Enter Your Password">
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
              <input name="age" type="number" class="form-control" id="age" placeholder="Enter Your Age">
            </div>
            <div class="mb-3">
              <label for="user-contact" class="form-label">Contact</label>
              <input name="contact" type="text" class="form-control" id="user-contact" placeholder="Enter Your Contact">
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
              <button id="registermodal" name="register" type="submit" class="btn btn-primary"
                style="background-color:#f8234a;">Register</button>

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
      <a href="#speakers" class="about-btn scrollto">Vote</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" class="main-page">


    <!-- voting -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Vote for Your Desired Delegate</h2>
          <p>To keep them in the run to be Miss Malaika Ghana 2021.</p>
          <p>Click on their name to confirm your vote</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/malaika/10-top Delegates/Delegate-1.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="#" data-bs-toggle="modal" data-bs-target="#voteModal">Abena</a></h3>
                <p>Delegate -1</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/malaika/10-top Delegates/Delegate-2.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="#" data-bs-toggle="modal" data-bs-target="#voteModal">Nguseli</a></h3>
                <p>Delegate -2</p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/malaika/10-top Delegates/Delegate-3.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="#" data-bs-toggle="modal" data-bs-target="#voteModal"> Asia</a></h3>
                <p>Delegate -3</p>
              </div>
            </div>
          </div>

          <!-- second row -->

          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                <img src="assets/img/malaika/10-top Delegates/Delegate-4.jpg" alt="Speaker 1" class="img-fluid">
                <div class="details">
                  <h3><a href="#" data-bs-toggle="modal" data-bs-target="#voteModal">Bintuo</a></h3>
                  <p>Delegate -4</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/malaika/10-top Delegates/Delegate-5.jpg" alt="Speaker 2" class="img-fluid">
                <div class="details">
                  <h3><a href="#" data-bs-toggle="modal" data-bs-target="#voteModal">Ama</a></h3>
                  <p>Delegate -5</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                <img src="assets/img/malaika/10-top Delegates/Delegate-6.jpg" alt="Speaker 3" class="img-fluid">
                <div class="details">
                  <h3><a href="#" data-bs-toggle="modal" data-bs-target="#voteModal"> Frimpomaa</a></h3>
                  <p>Delegate -6</p>
                </div>
              </div>
            </div>

            <!-- third row -->

            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                  <img src="assets/img/malaika/10-top Delegates/Delegate-7.jpg" alt="Speaker 1" class="img-fluid">
                  <div class="details">
                    <h3><a href="#" data-bs-toggle="modal" data-bs-target="#voteModal">Iris</a></h3>
                    <p>Delegate -7</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                  <img src="assets/img/malaika/10-top Delegates/Delegate-8.jpg" alt="Speaker 2" class="img-fluid">
                  <div class="details">
                    <h3><a href="#" data-bs-toggle="modal" data-bs-target="#voteModal">Precious</a></h3>
                    <p>Delegate -8</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                  <img src="assets/img/malaika/10-top Delegates/Delegate-9.jpg" alt="Speaker 3" class="img-fluid">
                  <div class="details">
                    <h3><a href="#" data-bs-toggle="modal" data-bs-target="#voteModal"> Hilary</a></h3>
                    <p>Delegate -9</p>
                  </div>
                </div>
              </div>

              <!-- fourth row -->
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/malaika/10-top Delegates/Delegate-10.jpg" alt="Speaker 1" class="img-fluid">
                    <div class="details">
                      <h3><a href="#" data-bs-toggle="modal" data-bs-target="#voteModal">Marqueen</a></h3>
                      <p>Delegate -10</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/malaika/10-top Delegates/Delegate-11.jpg" alt="Speaker 2" class="img-fluid">
                    <div class="details">
                      <h3><a href="#" data-bs-toggle="modal" data-bs-target="#voteModal">Lazo</a></h3>
                      <p>Delegate -11</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/img/malaika/10-top Delegates/Delegate-12.jpg" alt="Speaker 3" class="img-fluid">
                    <div class="details">
                      <h3><a href="#" data-bs-toggle="modal" data-bs-target="#voteModal"> Winnie </a></h3>
                      <p>Delegate -12</p>
                    </div>
                  </div>
                </div>
    </section><!-- End Speakers Section -->


    <!-- voting modal -->
    <div id="voteModal" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Confirm Vote</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="crud_operations.php" class="ajax">
              <div class="form-group">
                <input type="text" class="form-control" name="delegate-name" placeholder="Enter Delegate Name">
              </div>
              <div class="form-group mt-3">
                <select id="ticket-type" name="delegate-number" class="form-select">
                  <option value="">-- Select Delegate --</option>
                  <option value="standard-access">Delegate -1</option>
                  <option value="pro-access">Delegate -2</option>
                  <option value="premium-access">Delegate -3</option>
                  <option value="premium-access">Delegate -4</option>
                  <option value="premium-access">Delegate -5</option>
                  <option value="premium-access">Delegate -6</option>
                  <option value="premium-access">Delegate -7</option>
                  <option value="premium-access">Delegate -8</option>
                  <option value="premium-access">Delegate -9</option>
                  <option value="premium-access">Delegate -10</option>
                  <option value="premium-access">Delegate -11</option>
                  <option value="premium-access">Delegate -12 </option>
                </select>
              </div>
              <br>
            <span id="response"></span>
            <div class="col-md-4"></div>
              <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary" name="vote" style="background-color:#f8234a;">Vote</button>
              </div>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->




  </main><!-- End #main -->


  <section >
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Analysis of votes</h2>
        <p>Top 3 Delegates with highest votes</p>
      </div>

      <?php
    // display data from the database
    $squery = "SELECT Delegate_name, COUNT(Delegate_name) AS `value_occurrence` 
    FROM vote GROUP BY Delegate_name ORDER BY `value_occurrence`
     DESC LIMIT 3;";
    $results= $connection->query($squery);

    // code for edit button
    while($row =$results->fetch_assoc()):
  
  ?>

      <div class="col" style="margin:100px;">
        <div class="row-lg-4 row-md-6" >
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem; ">
            <div class="card-body" style="background-color:#f8234a;">
              <h1 class="card-title">
                <?= $row['Delegate_name']?> -
                <?= $row['value_occurrence']?>
              </h1>
            </div>
          </div>
        </div>


        <?php
    endwhile;
    ?>


        <style>
          .vl {
            border-left: 6px solid #f82249;
            ;
            height: 200px;
            text-align: center;
          }
        </style>

        <div class="vl"></div>
        <br>


        <?php
    // display data from the database
    $squery = "SELECT  COUNT(Delegate_name) AS `num_vote` 
    FROM vote;";
    $results= $connection->query($squery);

    // code for edit button
    while($row =$results->fetch_assoc()):
  
  ?>


        <div class="col-lg- col-md-6">
          <div class="card text-black bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-body" style="background-color:#f8234a;">
              <h1 class="card-title" style="text-align:center;">Vote Count </h1>
              <h1 class="card-text" style="text-align:center;">
                <?= $row['num_vote']?>
              </h1>
            </div>
          </div>
        </div>
        <?php
    endwhile;
    ?>
      </div>

  </section>






  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="assets/img/logo.png" alt="TheEvenet">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et
              totam porro.
              Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore
              consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="index.php">Home</a></li>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="index.php">About </a></li>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="index.php">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#speakers">Vote</a></li>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="index.php">Buy Tickets</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="index.php">Home</a></li>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="index.php">About </a></li>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="index.php">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#speakers">Vote</a></li>
              <li><i class="bi bi-chevron-right scrollto"></i> <a href="index.php">Buy Tickets</a></li>
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
              <a href="https://www.youtube.com/channel/UChZJkSv8MBOx9WMXq3chOOA" class="youtube"><i
                  class="bi bi-youtube"></i></a>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="index.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <?php $connection->close(); ?>

</body>

</html>