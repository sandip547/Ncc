<!-- Header to be used when user is logged in -->
<?php
require_once("../../Controllers/Registration/SessionManagement.php");
$sm = new SessionManagement();
$sm->logOutSession(isset($_GET["logout"]));
$sm->checkLoginSession(isset($_SESSION["username"]), isset($_SESSION["admin"]));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/animate.css?<?php echo time(); ?>">

    <link rel="stylesheet" href="../css/owl.carousel.min.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/magnific-popup.css?<?php echo time(); ?>">

    <link rel="stylesheet" href="../css/aos.css?<?php echo time(); ?>">

    <link rel="stylesheet" href="../css/ionicons.min.css?<?php echo time(); ?>">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/bootstrap.min.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/jquery.timepicker.css?<?php echo time(); ?>">


    <link rel="stylesheet" href="../css/flaticon.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/icomoon.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/style-custom.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/dashboard.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/profile.css?<?php echo time(); ?>">

    <style>

    </style>
</head>

<body>

    <div>
        <nav class="navbar navbar-expand-xl ftco_navbar bg-primary position-relative bg-light sticky-top"
            id="ftco-navbar">
            <div class="col-md-12 col-lg-12 d-flex justify-content-between my-1">
                <div>
                    <a class="navbar-brand bg-primary text-light" href="#">Logo</a>
                </div>
                <div>
                    <button class="navbar-toggler m-2" type="button" data-toggle="collapse" data-target="#ftco-nav"
                        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="oi oi-menu text-light"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="nav navbar-nav ml-auto">

                            <li class="nav-item"><a href="product.php?logout=1" class="nav-link mx-1 text-light">Logout
                                    <i class="bi bi-box-arrow-right"></i></a></li>

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
                        } ?> nav-link custom-tab textsss" href="product.php" aria-controls="dashboard"
                                aria-selected="true"><i class="bi bi-speedometer2"> &nbsp; &nbsp;</i>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?php if ($page == 'product') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="product.php" aria-controls="product"
                                aria-selected="true"><i class="bi bi-book-half"> &nbsp; &nbsp;</i>Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?php if ($page == 'student') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="student.php" role="tab" aria-controls="student"
                                aria-selected="true"><i class="bi bi-mortarboard-fill"> &nbsp; &nbsp;</i>Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?php if ($page == 'staff') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="staff.php" role="tab" aria-controls="staff"
                                aria-selected="true"><i class="bi bi-person-fill"> &nbsp; &nbsp;</i>Staff</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?php if ($page == 'category') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="category.php" aria-controls="Category"
                                aria-selected="true"><i class="bi bi-grid-fill"> &nbsp; &nbsp;</i>Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?php if ($page == 'payment') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="payment.php" aria-controls="payment"
                                aria-selected="true"><i class="bi bi-cash-coin"> &nbsp; &nbsp;</i>Payments</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?php if ($page == 'coursetopic') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="coursetopic.php" aria-controls="coursetopic"
                                aria-selected="true"><i class="bi bi-card-heading"> &nbsp; &nbsp;</i>Course Topic</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?php if ($page == 'video') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="video.php" aria-controls="video"
                                aria-selected="true"><i class="bi bi-camera-reels-fill"> &nbsp; &nbsp;</i>Video</a>
                        </li>
                        <li class="nav-item">
                        <li class="nav-item">
                            <a class="<?php if ($page == 'quiz') {
                          echo 'active';
                        } ?> nav-link custom-tab textsss" href="quiz.php" aria-controls="quiz" aria-selected="true"><i
                                    class="bi bi-question-diamond-fill"> &nbsp; &nbsp;</i>Quiz</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-tab textsss" href="index.php" aria-selected="true"><i
                                    class="bi bi-box-arrow-right"> &nbsp; &nbsp;</i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-12 col-sm-12 col-lg-10 pt-3 px-4 course-info">
                <div class="flex-wrap col-md-10 d-flex align-items-center justify-content-between course-info"
                    id="user-info">
                    <div class="flex-wrap d-flex align-items-center">
                        <div>
                            <img class="rounded-circle mb-1" src="../images/profile.jpg" width="150px" height="150px"
                                alt="User Image">
                        </div>
                        <div>
                            <p class="h2 font-weight-bold mx-3">Kaira</p>
                        </div>
                    </div>
                    <a href="teacher_registration.php" class="text-light px-3 py-2 borderstyle bg-primary"
                        id="be-a-teacher"><i class="bi bi-person-fill">&nbsp; </i>BECOME AN INSTRUCTOR</a>

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