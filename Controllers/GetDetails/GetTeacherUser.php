<?php
require_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../../Controllers/SaveDetails/SaveStaff.php");
require_once("../../Models/RegistrationModels/GetTeacherModel.php");
require_once("../../Models/RegistrationModels/GetTeacherUsername.php");
require_once("../../Models/RegistrationModels/GetTeacherNameDetails.php");
require_once("../../Models/RegistrationModels/GetTeacherUserId.php");
class GetTeacherUser{
    private $connection;
    function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    function getGenderName($gender)
    {
        $gender_name = "";
        if ($gender == 1) {
            $gender_name = "Male";
        } else if ($gender == 2) {
            $gender_name = "Female";
        } else if ($gender == 3) {
            $gender_name = "Others";
        }
        return $gender_name;
    }

    function getStatusName($status)
    {
        $active_status = "";
        if ($status == 0) {
            $active_status = "Inactive";
        } else {
            $active_status = "Active";
        }
        return $active_status;
    }

    function getTypeUser($type)
    {
        $active_status = "";
        if ($type == 1) {
            $active_status = "Staff";
        } else if($type == 2){
            $active_status = "Admin";
        }
        else{
            $active_status ="Instructor";
        }
        return $active_status;
    }

    function getTeacherDetails(){
            $query = "select staffId,fullName,dob,email,gender,phoneNo,mobileNo,address,joinDate,qualification,subjectExpertise,noOfExperience, cvLocation,activeStatus, type, userName, password, retireDate from staff";
            $result = $this->connection->executeQuery($query);
            $teacher_details = array();
            while($row = mysqli_fetch_array($result)){
                array_push($teacher_details,new StaffGet($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6], $row[7],$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14], $row[15], $row[16], $row[17]));
            }
            return $teacher_details;
        }

    function getTeacherUserName($username){
            $query = "select staffId,fullName,dob,email,gender,mobileNo,address,joinDate,qualification,subjectExpertise,noOfExperience,cvLocation,activeStatus,type,username from staff where username =?";
            $result = $this->connection->executePrepareReturn($query,"s",array($username->getUserId()));
            $teacher_details = array();
            $row = mysqli_fetch_row($result);
            array_push($teacher_details,new GetTeacherNameDetails($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14]));
            return $teacher_details;
    }
    function getStaffId($username){
        $query = "select staffId from staff where username=?";
        $result = $this->connection->executePrepareReturn($query,"s",array($username));
        return mysqli_fetch_row($result)[0];
    }
    function getTeacherIdDetails($teacher_id){
        $query = "select staffId,fullName,dob,email,gender,mobileNo,address,joinDate,qualification,subjectExpertise,noOfExperience,cvLocation,activeStatus,type,username from staff where staffId =?";
        $result = $this->connection->executePrepareReturn($query,"s",array($teacher_id->getUserId()));
        $teacher_details = array();
        $row = mysqli_fetch_row($result);
        array_push($teacher_details,new GetTeacherNameDetails($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14]));
        return $teacher_details;
    }
}