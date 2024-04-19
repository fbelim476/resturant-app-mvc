<?php
$mainurl="http://localhost/resturentsapp/"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Yummy Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="fs-5">FB Yummy-Mummy<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo $mainurl;?>">Home</a></li>
          <li><a href="<?php echo $mainurl;?>about-us">About</a></li>
          <li><a href="<?php echo $mainurl;?>our-menu">Menu</a></li>
          <li><a href="<?php echo $mainurl;?>our-events">Events</a></li>
          <li><a href="<?php echo $mainurl;?>our-chefs">Chefs</a></li>
          <li><a href="<?php echo $mainurl;?>our-menu-gallery">Gallery</a></li>
          <?php
          if(!isset($_SESSION["customerid"]))
          { 
          ?>
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?php echo $mainurl;?>register">Sign Up!</a></li>
              <li><a href="<?php echo $mainurl;?>login">Sign In!</a></li>
             
            </ul>
          </li>
         <?php 
          }
          else 
          {
            ?>  

          <li class="dropdown"><a href="#"><span class="text-success">Welcome:<?php echo ucfirst($_SESSION["name"]);?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?php echo $mainurl;?>manageprofile">Manage Profile</a></li>
              <li><a href="<?php echo $mainurl;?>changepassword">Change Password</a></li>
              <li><a href="<?php echo $mainurl;?>managenotifications">Manage Notifications</a></li>
              <li><a href="<?php echo $mainurl;?>manageorders">Manage Orders</a></li>
              <li><a href="<?php echo $mainurl;?>?logouthere" class="btn btn-sm btn-danger bg-danger text-white">Logout ?</a></li>
             
            </ul>
          </li>
          <?php 
          }
          ?>
          <li><a href="<?php echo $mainurl;?>contact-us">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->
      <?php
      if(!isset($_SESSION["customerid"]))
      { 
      ?>
      <a class="btn-book-a-table" href="#" onclick='lg()'>Book a Table</a>
      <?php 
      }
      else 
      {
      ?>
      <a class="btn-book-a-table" href="<?php echo $mainurl;?>book-appointment">Book a Table</a>
      <?php 
      }
      ?>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <script>
    function lg()
    {
      alert('want to Book table ? Login First')
      window.location='./login';
    }
  </script>


</body>

</html>
  