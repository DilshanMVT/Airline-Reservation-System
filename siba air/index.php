<!DOCTYPE html>
<html lang="en">

<head>
  <title>Smart Wing Airways</title>

  <style>
    * {
      box-sizing: border-box;
    }

    .container {
      position: relative;
      max-width: 100%;
      margin: 0 auto;
      padding-right: 80px;
    }

    .container img {
      vertical-align: middle;
    }

    .container .content {
      position: absolute;
      bottom: 0;
      background: rgb(0, 0, 0);
      background: rgba(0, 0, 0, 0.5);
      color: #f1f1f1;
      width: 100%;
      padding: 20px;
    }
  </style>
  <!--about logo-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="assets/css/style2.css">

  <!--link bootstrap css-->
  <link rel="stylesheet" href="assets/css/x/bootstrap.min.css">


  <!--link jquery  and java script-->
  <script src="assets/js/index_js/jquery.js"></script>
  <script src="assets/js/index_js/bootstrap.min.js"></script>

</head>

<body>

  <!-- header section starts  -->

  <header class="header">

    <a href="#" class="logo"> <i class="fas fa-plane"> Smart Wing Airways</i> </a>

    <nav class="navbar">
      <div id="nav-close" class="fas fa-times"></div>


      <div class="btn-bar">
        <a href="views/flight_detail.php" class="btn btn-custom theme_background_color">Flight Details</a>
      </div>

      <div class="btn-bar">
        <a href="#about" class="btn btn-custom theme_background_color">About</a>
      </div>

      <div class="btn-bar">
        <a href="reserved.php" class="btn btn-custom theme_background_color">Reserve Now</a>
      </div>

      <div class="btn-bar">
        <a href="#packages" class="btn btn-custom theme_background_color">Packages</a>
      </div>



      <div class="btn-bar">
        <a href="views/index.php" class="btn btn-custom theme_background_color">Login</a>
      </div>

    </nav>

    <div class="icons">

      <div id="menu-btn" class="fas fa-bars"></div>

      <div id="search-btn" class="fas fa-search"></div>
    </div>

  </header>

  <!-- header section ends -->

  <!-- search form  -->

  <div class="search-form">

    <div id="close-search" class="fas fa-times"></div>

    <form action="">
      <input type="search" name="" placeholder="search here..." id="search-box">
      <label for="search-box" class="fas fa-search"></label>
    </form>
  </div>

  <!-- home section starts  -->

  <section class="home" id="home">

    <div class="swiper home-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="box second" style="background: url(assets/images/new_bg_1.jpg) no-repeat;">
            <div class="content">
              <span>Life is a journey </span>
              <h3>Enjoy Flight</h3>
              <p style="color:white">The gladdest moment in human life is a departure into unknown lands | Travel makes one modest. You see what a tiny place you occupy in the world!</p>

            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="box" style="background: url(assets/images/home-bg-2.jpg) no-repeat;">
            <div class="content">
              <span>make tour</span>
              <h3>amazing</h3>
              <p>The gladdest moment in human life is a departure into unknown lands | Travel makes one modest. You see what a tiny place you occupy in the world!</p>

            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="box" style="background: url(assets/images/home-bg-3.jpg) no-repeat;">
            <div class="content">
              <span>explore the</span>
              <h3>new world</h3>
              <p style="color:white">The gladdest moment in human life is a departure into unknown lands | Travel makes one modest. You see what a tiny place you occupy in the world!</p>

            </div>
          </div>
        </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>

  </section>

  <!-- home section ends -->
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- packages section starts  -->

  <section class="packages" id="packages">
    <h1 class="heading">popular packages</h1>

    <div class="card-group">
      <div class="card">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="assets/images/Auss.png" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TRAVEL TO AUSTRALIA</h5>
          <p class="card-text">
            Flight from $1500
          </p>
          <a href="reserved.php" class="btn btn-primary">Book Now</a>
        </div>
      </div>
      <div class="card">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="assets/images/dub.jpg" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TRAVEL TO DUBAI</h5>
          <p class="card-text">
            Flight from $1000
          </p>
          <a href="reserved.php" class="btn btn-primary">Book Now</a>
        </div>
      </div>
      <div class="card">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="assets/images/singa.jpg" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TRAVEL TO SINGAPORE</h5>
          <p class="card-text">
            Flight from $1200
          </p>
          <a href="reserved.php" class="btn btn-primary">Book Now</a>
        </div>
      </div>
    </div>

    <div class="card-group">
      <div class="card">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="assets/images/sl.jpg" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TRAVEL TO SRILANKA</h5>
          <p class="card-text">
            Flight from $1000
          </p>
          <a href="reserved.php" class="btn btn-primary">Book Now</a>
        </div>
      </div>
      <div class="card">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="assets/images/japan.jpg" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TRAVEL TO JAPAN</h5>
          <p class="card-text">
            Flight from $1800
          </p>
          <a href="reserved.php" class="btn btn-primary">Book Now</a>
        </div>
      </div>
      <div class="card">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="assets/images/india.png" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TRAVEL TO INDIA</h5>
          <p class="card-text">
            Flight from $1000
          </p>
          <a href="reserved.php" class="btn btn-primary">Book Now</a>
        </div>
      </div>
    </div>

  </section>


  <!-- packages section ends -->

  <!--about us-->
  <br>
  <br>


  <section class="about" id="about" style="margin-bottom: 10px; display:flex">
    <div  style="margin-top: 0; width:100%; margin: bottom 40px;">
      <!-- <img src="assets/images/about.jpg" alt="Notebook" style="width:100%;"> -->

      <div class="footer-dark">

        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3 item">
              <h3>Services</h3>
              <ul>
                <li><a href="views/index.php">LOGIN</a></li>
                <li><a href="views/flight_detail.php">FLIGHT DETAILS</a></li>
                <li><a href="reserved.php">RESERVE NOW</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3 item">
              <h3>About</h3>
              <ul>
                <li><a href="#">Company</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Careers</a></li>
              </ul>
            </div>
            <div class="col-md-6 item text">
              <h3>TEAM A</h3>
              <p>Team Leader <br>
                R.H.D Saranga (BSc WD 212915) <br>
                Team Members <br>
                L.P.S.H.D Madusha (BSc WD 212902) <br>
                M.V.T Dilshan (BSc WD 212913)
              </p>
            </div>
            <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
          </div>
          <p class="copyright">project work © 2022</p>
        </div>

      </div>

    </div>
  </section>
      <!-- <div style="border: 1px solid red; height:100px; width:100%; margin: bottom 40px;">
      <div class="fooer-dark" style="height: 100%; width:100%">
        abc
      </div>

      </div> -->
      <br>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


      <!-- packages section ends -->

      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

      <!-- custom js file link  -->
      <script src="assets/js/index_js/script.js"></script>


</body>

</html>