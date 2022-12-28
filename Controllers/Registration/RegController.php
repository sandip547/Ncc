<?php
//require_once("../../DatabaseConnection/DatabaseConnection.php");
//require_once("../../Controllers/Authentication/Encryption.php");
//require_once("../../Models/RegistrationModels/CheckUsername.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
class RegController
{

    private $connection;
    private $encrypt;
    private $checker;
    private $check_password;
    function __construct()
    {
        $this->connection = new DatabaseConnection();
        $this->encrypt = new EncDec();
        $this->checker = new CheckUsername();
    }

    function getChecker()
    {
        return $this->checker;
    }

    function getPasswordChecker()
    {
        return $this->check_password;
    }

    function checkPassword($password, $cpassword)
    {
        $check = False;
        if ($password == $cpassword) {
            $check = True;
        }
        return $check;
    }

    function checkUserName($username)
    {
        $check = False;
        $query = "select userName from student where userName=? ";
        $result = $this->connection->executePrepareReturn($query, "s", array($username));
        if (mysqli_num_rows($result) > 0) {
            $check = True;
        }
        return $check;
    }
    function checkStaffName($username)
    {
        $check = False;
        $query = "select userName from staff where userName=? ";
        $result = $this->connection->executePrepareReturn($query, "s", array($username));
        if (mysqli_num_rows($result) > 0) {
            $check = True;
        }
        return $check;
    }

    function insertUserDetails($studentuser)
    {
        $fullname = $studentuser->getTsUser()->getFullName();

        $query = "insert into student(fullname,dob,email,gender,username,password,mobileNo,address,registrationdate,activestatus) values(?,?,?,?,?,?,?,?,?,?)";
        $result = $this->connection->executePrepare($query, "sssisssssi", array(
            $fullname, $studentuser->getTsUser()->getDob(), $studentuser->getTsUser()->getEmail(),
            $studentuser->getTsUser()->getGender(), $studentuser->getTsUser()->getUsername(),
            $this->encrypt->encrypt($studentuser->getTsUser()->getPassword()), $studentuser->getTsUser()->getMob(),
            $studentuser->getTsUser()->getAddresses(), $studentuser->getRegistrationDate(),
            $studentuser->getTsUser()->getActiveStatus()
        ));
        mysqli_close($this->connection->getConnection());
        if (!$result) {
            echo "please provide other username";
        } else {
        }
    }

    function updateUserDetails($studentuser)
    {
        $fullname = $studentuser->getFullName() ;
        $query = "update student set fullname=?,dob=?,email=?,gender=?,username=?,mobileNo=?,
        address=?,activeStatus=?,expirydate=? where studentId=?";
        $result = $this->connection->executePrepare($query, "sssisisbsi", array(
            $fullname, $studentuser->getDob(), $studentuser->getEmail(),
            $studentuser->getGender(), $studentuser->getUsername(),
            $studentuser->getMobile(), $studentuser->getAddress(),
            $studentuser->getActiveStatus(),$studentuser->getExpiryDate(),$studentuser->getStudentId()
        ));
        mysqli_close($this->connection->getConnection());
    }

    function deleteUserDetails($du)
    {   $check = false;
        $query = "delete from student where studentId=?";
        $result = $this->connection->executePrepare($query, "i", array($du->getStudentId()));
        if($result) {
            $check = true;
        }
        return $check;
    }

    function getStaffId($username)
    {
        $query = "select staffid from staff where username=?";
        $result = $this->connection->executePrepareReturn($query, "s", array($username));
        return mysqli_fetch_row($result)[0];
    }

    function uploadFile($file, $target_file)
    {

        $uploadOk = 1;
        $pdfFile = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        //upload
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($file["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($pdfFile != "pdf") {
            echo "Sorry, only PDF files are allowed.";
            $uploadOk = 0;
        }
        // upload
        if ($uploadOk) {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                $uploadOk = 1;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        return $uploadOk;
    }

    function insertTeacherDetails($staff)
    {

        try {
            mysqli_begin_transaction($this->connection->getConnection());
            $target_dir = "Uploads/CV/";
            $target_file = $target_dir . date("Y-m-d-h-i-s-").basename($_FILES["cvLocation"]["name"]);
            $uploadOk = $this->uploadFile($staff->getCvLocation(), $target_file);
            if($uploadOk){

                $query = "insert into staff(fullname,dob,email,gender,mobileNo,address,joindate,qualification,subjectExpertise,noOfExperience,cvLocation,activestatus,username,password) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

                $result = $this->connection->executePrepare($query, "sssisssssssiss", array(
                    $staff->getFullName(), $staff->getDob(), $staff->getEmail(),
                    $staff->getGender(), $staff->getMobile(),
                    $staff->getAddress(),$staff->getJoinDate(),
                    $staff->getQualification(), $staff->getExpertise(), $staff->getExperience(),
                    $target_file,$staff->getActiveStatus(), $staff->getUsername(), $this->encrypt->encrypt($staff->getPassword())
                ));

            }

            mysqli_commit($this->connection->getConnection());
        } catch (mysqli_sql_exception $e) {
            mysqli_rollback($this->connection->getConnection());
            throw $e;
        }


        mysqli_close($this->connection->getConnection());
    }

    function updateTeacherDetails($staff)
    {
        $fullname = $staff->getTsUser()->getFirstName() . " " . $staff->getTsUser()->getLastName();
        $query = "update staff set fullname=?,dob=?,email=?,gender=?,mobileNo=?,
                   address=?,qualification=?,subjectExpertise=?,noOfExperience=?,
                   cvLocation=?,activeStatus=?,type=?,username=? where staffId=?";
        $result = $this->connection->executePrepare($query, "sssissssisisi", array(
            $fullname, $staff->getTsUser()->getDob(), $staff->getTsUser()->getEmail(),
            $staff->getTsUser()->getGender(), $staff->getTsUser()->getMob(),
            $staff->getTsUser()->getAddresses(), $staff->getQualification(),
            $staff->getExpertise(), $staff->getExperience(),
            $staff->getCvLocation(), $staff->getTsUser()->getActiveStatus(),
            $staff->getType(), $staff->getTsUser()->getUsername(), $staff->getStaffId()
        ));

        mysqli_close($this->connection->getConnection());
    }

    function updateProfileDetails($pdetails)
    {
        $query = "update student set fullname=?, dob=?, email=?, gender=?, mobileNo=?, address =? where username=?";
        $result = $this->connection->executePrepare($query, "sssisss", array(
            $pdetails->getFullName(), $pdetails->getDob(), $pdetails->getEmail(),
            $pdetails->getGender(), $pdetails->getMobileNo(), $pdetails->getAddress(),
            $pdetails->getUsername()
        ));
        mysqli_close($this->connection->getConnection());
    }
    function getPassword($username)
    {
        $query = "select password from student where username=?";
        $result = $this->connection->executePrepareReturn($query, "s", array($username));
        return mysqli_fetch_row($result)[0];
    }

    function  resetPassword($username, $reset)
    {
        $check = False;
        if ($this->getPassword($username) && $this->checkPassword($reset->getNewPassword(), $reset->getConfirmPassword())) {
            $query = "update student set password=? where username=?";
            $this->connection->executePrepare($query, "ss", array($this->encrypt->encrypt($reset->getNewPassword()), $username));
            $check = True;
        }
        return $check;
    }
}
//$rc = new RegController();

//$rc->insertTeacherDetails(new TeacherUser("sandipadhikariaiaia","adhikari","2025-12-12","sadiprock28@gamil.com",1,"9866343866","sk","qua","me",5,"hello",1,"2025-12-12","sandip54","there"));