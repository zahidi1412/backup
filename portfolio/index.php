<!doctype html>
<html lang="en">

  <head>
    <title>KeBOT </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.html" class="font-weight-bold">KeBOT</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-block"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                  <li><a href="about.html" class="nav-link">About</a></li>
                  <li><a href="work.html" class="nav-link">Work</a></li>
                  <li><a href="journal.html" class="nav-link">Journal</a></li>
                  <li><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h1 class="mb-4 text-white">Hi I'm Zahidi </h1>
              <p class="mb-4">I'm a front end web developer</p>
              <p><a href="#Contact" class="btn btn-primary btn-outline-white py-3 px-5">Contact</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Thanks For Your Feedback";
    }
    if($pesan == "fail"){
			echo "fail";
		}
	}
  ?>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <h2 class="h4 mb-4">About</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae voluptatem mollitia obcaecati quod maxime. Soluta libero eligendi voluptatum, natus debitis.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, quasi!</p>
            <p><a href="#" class="btn btn-primary text-white px-5">My works</a></p>
          </div>
          <div class="col-md-4">
            <img src="images/about_1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-4">
            
            <h2 class="h4 mb-4">Our expertise and skills</h2>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>Writing</span>
                <span class="ml-auto">55%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>WordPress</span>
                <span class="ml-auto">85%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>Bootstrap</span>
                <span class="ml-auto">93%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 93%;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>jQuery</span>
                <span class="ml-auto">83%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">My Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
                <span class="icon-desktop_mac"></span>
              </span>
              <h3>Web Design</h3>
              <p>i can design anything you need</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
                <span class="icon-desktop_mac"></span>
              </span>
              <h3>Graphic Design</h3>
              <p>Vector? Ilustration? i have a skill</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
                <span class="icon-desktop_mac"></span>
              </span>
              <h3>Web Apps</h3>
              <p>i can design Responsive UI for Any Device</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
                <span class="icon-desktop_mac"></span>
              </span>
              <h3>Ecommerce</h3>
              <p>Bussines? why not on air</p>
            </div>
          </div>
        </div>
      </div>
    </div>

   
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="fact-39281 d-flex align-items-center">
              <div class="wrap-icon mr-3">
                <span class="icon-smile-o"></span>
              </div>
              <div class="text">
                <span class="d-block">83</span>
                <span>Happy Clients</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="fact-39281 d-flex align-items-center">
              <div class="wrap-icon mr-3">
                <span class="icon-coffee"></span>
              </div>
              <div class="text">
                <span class="d-block">3892</span>
                <span>Cup of Coffee</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="fact-39281 d-flex align-items-center">
              <div class="wrap-icon mr-3">
                <span class="icon-code"></span>
              </div>
              <div class="text">
                <span class="d-block">3,923,892</span>
                <span>Line of Codes</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="fact-39281 d-flex align-items-center">
              <div class="wrap-icon mr-3">
                <span class="icon-desktop_mac"></span>
              </div>
              <div class="text">
                <span class="d-block">3892</span>
                <span>Project Finish</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  
    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">Testimonials</h2>
          </div>
        </div>
        
        <div class="row">
            <?php 
              include "konek.php";
              $sql= "SELECT * FROM tabel";
              $result = mysqli_query($host, $sql)or die("failed server");
              $no = 1;
              while($data = mysqli_fetch_array($result)){
              ?>
              <div style="opacity:0;"><?php echo $no++; ?></div>
              
              <div class="col-md-6 col-lg-3">
                <div class="service-29128 text-center">
                  <span class="d-block wrap-icon">
                    <span class="icon-desktop_mac"></span>
                  </span>
                  <a href="http://<?php echo $data['pass'];?>"><h3><?php echo $data['name']; ?></h3></a>
                  <p><?php echo $data['komen']; ?></p>
                </div>
              </div>
              </a>
              <?php } ?>
            </div>
                
        </div>
      </div>


      
      <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h5 >Review My Project</h5>
            <div class="social_29128 white mb-5">
                  <a href="log.php"><span class="icon-facebook"></span></a>  
                  <a href="log.php"><span class="icon-instagram"></span></a>  
                  <a href="log.php"><span class="icon-twitter"></span></a>
                  <a href="log.php"><span class="icon-google"></span></a>
            </div>
          </div>
        
      </div>
    
    </div>

    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-3">About Me</h2>
                <p>Far far away, behind the word mountains, far from the countries Indonesia, there live the blind texts. </p>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Connect</h2>
                <div class="social_29128 white mb-5">
                  
                 </div>
                <h2 class="footer-heading mb-4">Newsletter</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Zahidi
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

