<?php
require_once("../Controllers/Authentication/Encryption.php");
require_once("../Models/RegistrationModels/CheckUsername.php");
require_once("../DatabaseConnection/DatabaseConnection.php");
require_once("../Controllers/Registration/RegController.php");
$rc = new RegController();
if($rc->checkPasswordStrength($_REQUEST['password'])){
    echo "<p style='color:green;'>passowrd is alright</p>";
}
else{
    echo "<p style='color:red;'>password needs to have 8 digit,one uppercase,one special character</p>";

}
?>