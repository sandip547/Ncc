<?php
session_start();
require_once("../DatabaseConnection/DatabaseConnection.php");
require_once ('../Models/RegistrationModels/SaveProfileImage.php');
require_once ('../Controllers/SaveDetails/SaveProduct.php');
$reg = new SaveProduct();
$reg->saveProfileImage(new SaveProfileImage($_FILES['file']['name'],$_SESSION['username']));

?>