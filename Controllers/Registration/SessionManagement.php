<?php
class SessionManagement{

    function __construct(){

    }
    function sessionStart(){
        session_start();
    }

    function checkLoginSession($username,$type){
        if(!$username && !$type){
            ?>
            <script> window.location.href="login.php"</script>;
            <?php
        }
    }

    function checkLoginAgainSession($username,$type){
        if($username && $type){
            ?>
            <script> window.location.href="profile.php"</script>;
            <?php
        }
    }

    function checkIndexPage($username,$type){
        if($username && $type){
            include 'header.php';
        }
        else{

        }
    }
    function checkLogoutButton($username,$type){
        if($username && $type){
            ?>
            <li class="nav-item"><a href="header.php?logout" name="logout" class="nav-link mx-1 text-light">Logout</a></li>

            <?php
        }

    }
    function logOutSession($logout_request){
        if($logout_request){
            session_destroy();
            ?>
                   <script> window.location.href="login.php"</script>;

            <?php
        }
    }
    function checkLoginHeader($username,$type){
        if($username && $type){?>
            <li class="nav-item"><a href="dashboard.php" class="nav-link mx-1 text-light active">Profile</a></li>
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

            <?php

        }
        else{
            ?>
            <li class="nav-item"><a href="login.php" class="nav-link mx-1 text-light active">Login</a></li>

            <?php
        }
    }


}
?>