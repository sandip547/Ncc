<?php
require_once("../Controllers/Registration/SessionManagement.php");
require_once("../DatabaseConnection/DatabaseConnection.php");
require_once("../Controllers/SaveDetails/SaveCartDetails.php");
require_once("../Controllers/GetDetails/GetStudentDetails.php");
require_once("../Controllers/GetDetails/GetEnrollmentDetails.php");
require_once("../Models/RegistrationModels/GetStudentUsername.php");
require_once("../Controllers/GetDetails/GetProductDetails.php");
$sm = new SessionManagement();
$sm->sessionStart();
$sm->checkLoginSession(isset($_SESSION["username"]),isset($_SESSION["user"]));
$sm->logOutSession(isset($_GET["logout"]));

?>
<!-- Header to be used when user is logged in -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="css/animate.css?<?php echo time(); ?>">

  <link rel="stylesheet" href="css/owl.carousel.min.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="css/owl.theme.default.min.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="css/magnific-popup.css?<?php echo time(); ?>">

  <link rel="stylesheet" href="css/aos.css?<?php echo time(); ?>">

  <link rel="stylesheet" href="css/ionicons.min.css?<?php echo time(); ?>">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="css/bootstrap.min.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="css/jquery.timepicker.css?<?php echo time(); ?>">


  <link rel="stylesheet" href="css/flaticon.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="css/icomoon.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="css/style-custom.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="css/dashboard.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="css/profile.css?<?php echo time(); ?>">

  <style>

  </style>
</head>

<body>

  <div>
    <nav class="navbar navbar-expand-xl ftco_navbar bg-primary position-relative bg-light sticky-top" id="ftco-navbar">
      <div class="col-md-12 col-lg-12 d-flex justify-content-between my-1">
        <div>
          <a class="navbar-brand bg-primary text-light" href="#">Logo</a>
        </div>
        <div>
          <button class="navbar-toggler m-2" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu text-light"></span>
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item dropdown position-absolute mr-4" style="z-index: +1;">
                <button type="button" id="menudrop" class="nav-link dropdown-toggle text-light button px-0 py-2 m-0" data-target="#drops" aria-controls="drop" aria-label="Toggle menu" role="button" data-toggle="collapse" aria-expanded="false">
                  Menu
                </button>
                <ul class="nav dropdown-menu m-0 p-0 px-1 bg-light collapse drop" id="drops">
                  <li class="nav-item dropdown-item-for-nav w-100">
                    <a class="nav-link fontul" href="dashboard.php" aria-selected="true">Dashboard</a>
                  </li>
                  <li class="nav-item dropdown-item-for-nav w-100">
                    <a class="nav-link fontul" href="profile.php" aria-controls="profile" aria-selected="false">My Profile</a>
                  </li>
                  <li class="nav-item dropdown-item-for-nav w-100">
                    <a class="nav-link fontul" href="enrolled_courses.php" aria-controls="enrolledcourses" aria-selected="false">Enrolled Courses</a>
                  </li>
                  <li class="nav-item dropdown-item-for-nav w-100">
                    <a class="nav-link fontul" href="wishlist.php" aria-controls="wishlist" aria-selected="false">Wishlist</a>
                  </li>
                  <li class="nav-item dropdown-item-for-nav w-100">
                    <a class="nav-link fontul" href="review.php" aria-selected="false">Reviews</a>
                  </li>
                  <li class="nav-item dropdown-item-for-nav w-100">
                    <a class="nav-link fontul" href="quiz_attempt.php" aria-selected="false">My Quiz Attempts</a>
                  </li>
                  <li class="nav-item dropdown-item-for-nav w-100">
                    <a class="nav-link fontul" href="purchase.php" aria-selected="false">Purchase History</a>
                  </li>
                  <li class="nav-item dropdown-item-for-nav w-100">
                    <a class="nav-link fontul" href="setting.php" aria-selected="false">Settings</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a href="index.php" class="nav-link mx-1 ml-5 pl-4 text-light">Home</a></li>
              <li class="nav-item"><a href="all_course.php" class="nav-link mx-1 text-light">All Courses</a></li>
              <li class="nav-item"><a href="blog.php" class="nav-link mx-1 text-light">Blog</a></li>
              <li class="nav-item dropdown">
                <button type="button" id="menusdrop" class="nav-link dropdown-toggle text-light button px-0 py-2 m-0" data-target="#regis" aria-controls="regis" aria-label="Toggle menu" role="button" data-toggle="collapse" aria-expanded="false">
                  Registration
                </button>
                <ul class="nav dropdown-menu m-0 p-0 px-1 bg-light collapse" id="regis">
                  <li class="nav-item w-100">
                    <a class="nav-link fontul" href="teacher_registration.php">Teacher Registration</a>
                  </li>
                  <li class="nav-item w-100">
                    <a class="nav-link fontul" href="student_registration.php">Student Registration</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a href="about_us.php" class="nav-link mx-1 text-light">About Us</a></li>
              <li class="nav-item"><a href="dashboard.php" class="nav-link mx-1 text-light active">Welcome</a></li>
              <li class="nav-item"><a href="student_scholarship.php" class="nav-link mx-1 text-light">Student Scholarship</a></li>
              <li class="nav-item"><a href="cart.php" class="nav-link mx-1 text-light">My Cart</a></li>
              <li class="nav-item"><a href="logged_in_header.php?logout=1" class="nav-link mx-1 text-light" name="logout">Logout></i></a></li>

            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div class="container-fluid">
    <div class="row">

      <nav class="col-md-2 bg-light p-0 m-0 textsss" id="sidebar-menu">
        <div class="sidebar-sticky">

          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="<?php if ($page == 'dashboard') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="dashboard.php" aria-controls="dashboard" aria-selected="true"><i class="bi bi-speedometer2"> &nbsp; &nbsp;</i>Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="<?php if ($page == 'profile') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="profile.php" aria-controls="profile" aria-selected="true"><i class="bi bi-person-fill"> &nbsp; &nbsp;</i>My Profile</a>
            </li>
            <li class="nav-item">
              <a class="<?php if ($page == 'enrolled_courses') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="enrolled_courses.php" role="tab" aria-controls="enrolledcourses" aria-selected="true"><i class="bi bi-mortarboard-fill"> &nbsp; &nbsp;</i>Enrolled Courses</a>
            </li>
            <li class="nav-item">
              <a class="<?php if ($page == 'wishlist') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="wishlist.php" aria-controls="wishlist" aria-selected="true"><i class="bi bi-bookmark-fill"> &nbsp; &nbsp;</i>Wishlist</a>
            </li>
            <li class="nav-item">
              <a class="<?php if ($page == 'review') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="review.php" aria-controls="review" aria-selected="true"><i class="bi bi-star-half"> &nbsp; &nbsp;</i>Reviews</a>
            </li>
            <li class="nav-item">
              <a class="<?php if ($page == 'quiz_attempt') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="quiz_attempt.php" role="tab" aria-controls="quiz" aria-selected="true"><i class="bi bi-calendar2-check-fill"> &nbsp; &nbsp;</i>My Quiz Attempts</a>
            </li>
            <li class="nav-item">
              <a class="<?php if ($page == 'purchase') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="purchase.php" role="tab" aria-controls="purchase" aria-selected="true"><i class="bi bi-cart4"> &nbsp; &nbsp;</i>Purchase History</a>
            </li>


            <hr class="bg-primary" />


            <li class="nav-item">
              <a class="<?php if ($page == 'setting') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="setting.php" role="tab" aria-controls="setting" aria-selected="true"><i class="bi bi-gear-fill"> &nbsp; &nbsp;</i>Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link custom-tab textsss"  href="logged_in_header.php?logout" aria-selected="true">&nbsp&nbsp;</i>Logout</a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-12 col-sm-12 col-lg-10 pt-3 px-4 course-info">
        <div class="flex-wrap col-md-10 d-flex align-items-center justify-content-between course-info" id="user-info">
          <div class="flex-wrap d-flex align-items-center">
            <div>
              <img class="rounded-circle mb-1" src="images/profile.jpg" width="150px" height="150px" alt="User Image">
            </div>
            <div>
              <p class="h5 font-weight-bold mx-3"><?php if(isset($_SESSION["username"])){echo $_SESSION["username"];} ?></p>
            </div>
          </div>
          <a href="teacher_registration.php" class="text-light px-3 py-2 borderstyle bg-primary" id="be-a-teacher"><i class="bi bi-person-fill">&nbsp; </i>BECOME AN INSTRUCTOR</a>

        </div>
        <br><br>

        <script>
          jQuery(".dropdown-item-for-regis").on("click", function() {
            jQuery(this).attr("aria-selected", "true");
            jQuery(this).addClass("active");
            jQuery(".dropdown-item-for-nav").not(this).attr("aria-selected", "false");
            jQuery(".dropdown-item-for-nav").not(this).removeClass("active");
          })
        </script>