<?php
require_once("../Controllers/Registration/SessionManagement.php");
$sm = new SessionManagement();
$sm->sessionStart();
$sm->logOutSession(isset($_GET["logout"]));
?>
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
    <link rel="stylesheet" href="dashboard.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="profile.css?<?php echo time(); ?>">

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
                    <button class="navbar-toggler m-2" type="button" data-toggle="collapse" data-target="#ftco-navs" aria-controls="ftco-navs" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="oi oi-menu text-light"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-navs">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item"><a href="index.php" class="nav-link mx-1 text-light">Home</a></li>
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
                            <?php $sm->checkLoginHeader(isset($_SESSION["username"]),isset($_SESSION["user"]));?>
                            <li class="nav-item"><a href="about_us.php" class="nav-link mx-1 text-light">About Us</a></li>
                            <li class="nav-item"><a href="student_scholarship.php" class="nav-link mx-1 text-light">Student Scholarship</a></li>
                            <li class="nav-item"><a href="cart.php" class="nav-link mx-1 text-light">My Cart</a></li>

                            <?php $sm->checkLogoutButton(isset($_SESSION["username"]),isset($_SESSION["user"]));?>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>