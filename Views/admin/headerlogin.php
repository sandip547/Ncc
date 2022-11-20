<?php
require_once("../../Controllers/Registration/SessionManagement.php");
$sm = new SessionManagement();
$sm->sessionStart();
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