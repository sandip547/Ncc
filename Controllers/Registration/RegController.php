<?php
require_once("../../Models/RegistrationModels/TeacherUser.php");
require_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../Authentication/Encryption.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
class RegController{

    private $connection;
    private $encrypt;
    function __construct(){
        $this->connection =new DatabaseConnection();
        $this->encrypt = new EncDec();

    }

    function insertUserDetails($studentuser){
        $fullname = $studentuser->getTsUser()->getFirstName()." ".$studentuser->getTsUser()->getLastName();

        $query = "insert into student(fullname,dob,email,gender,username,password,mobileNo,address,registrationdate,activestatus) values(?,?,?,?,?,?,?,?,?,?)";
        $result = $this->connection->executePrepare($query,"sssisssssi",array($fullname,$studentuser->getTsUser()->getDob(),$studentuser->getTsUser()->getEmail(),
                                                        $studentuser->getTsUser()->getGender(),$studentuser->getTsUser()->getUsername(),
                                                        $this->encrypt->encrypt($studentuser->getTsUser()->getPassword()),$studentuser->getTsUser()->getMob(),
                                                        $studentuser->getTsUser()->getAddresses(),$studentuser->getRegistrationDate(),
                                                        $studentuser->getTsUser()->getActiveStatus()));
        mysqli_close($this->connection->getConnection());
        if(!$result){
            echo "please provide other username";
        }
        else{

        }

    }

    function insertStaffDetails($staff){
        $fullname = $staff->getTsUser()->getFirstName()." ".$staff->getTsUser()->getLastName();
        $query = "insert into staff(fullname,dob,email,gender,mobileNo,address,joindate,qualification,subjectExpertise,noOfExperience,cvLocation,activestatus,type,username,password) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $result = $this->connection->executePrepare($query,"sssisssssssiiss",array($fullname,$staff->getTsUser()->getDob(),$staff->getTsUser()->getEmail(),
                                                                                  $staff->getTsUser()->getGender(),$staff->getTsUser()->getMob(),
                                                                                  $staff->getTsUser()->getAddresses(),$staff->getJoinDate(),
                                                                                  $staff->getQualification(),$staff->getExpertise(),$staff->getExperience(),
                                                                                  $staff->getCvLocation(),$staff->getTsUser()->getActiveStatus(),
                                                                                  $staff->getType(),$staff->getTsUser()->getUsername(),$staff->getTsUser()->getPassword()));
        mysqli_close($this->connection->getConnection());
    }
}

?>