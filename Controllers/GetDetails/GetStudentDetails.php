<?php

require_once("../../Models/RegistrationModels/GetStudentUser.php");
class GetStudentDetails
{
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

    function getActiveStatus($status)
    {
        $status_name = "";
        if ($status == 0) {
            $status_name = "Inactive";
        } else if ($status == 1) {
            $status_name = "Active";
        }
        return $status_name;
    }

    function getStudentIdOn($username)
    {
        $query = "select studentId from student where username=?";
        $result = $this->connection->executePrepareReturn($query, "s", array($username->getUsername()));
        $row = mysqli_fetch_row($result);
        return $row[0];
    }

    function getStudentDetails()
    {
        $query = "select studentId,fullName,dob,email,gender,userName,mobileNo,address,registrationDate,activeStatus,lastLogin from student";
        $result = $this->connection->executeQuery($query);
        $student_details = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($student_details, new GetStudentUser($row[0], $row[1], $row[2], $row[3], $this->getGenderName($row[4]), $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]));
        }
        return $student_details;
    }

    function getStudentId($user_name)
    {
        $query = "select studentId,fullName,dob,email,gender,userName,mobileNo,address,registrationDate,activeStatus,lastLogin from student where username=?";
        $result = $this->connection->executePrepareReturn($query, "s", array($user_name->getUsername()));
        $student_username = array();
        $row = mysqli_fetch_row($result);
        array_push($student_username, new GetStudentUser($row[0], $row[1], $row[2], $row[3], $this->getGenderName($row[4]), $row[5], $row[6], $row[7], $row[8], $this->getActiveStatus($row[9]), $row[10]));
        return $student_username;
    }

    function getStudentDetailsId($student_id)
    {
        $query = "select fullName,dob,email,gender,userName,mobileNo,address,registrationDate,activeStatus,lastLogin from student where studentId=?";
        $result = $this->connection->executePrepareReturn($query, "i", array($student_id->getStudentId()));
        $student_details_id = array();
        $row = mysqli_fetch_row($result);
        array_push($student_details_id, $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9]);
        return $student_details_id;
    }



    function getStudentProfileUpdate($student_id)
    {
        $query = "select fullName,dob,email,gender,mobileNo,address from student where studentId=?";
        $result = $this->connection->executePrepareReturn($query, "i", array($student_id));
        $student_details_id = array();
        $row = mysqli_fetch_row($result);
        array_push($student_details_id, $row[0], $row[1], $row[2], $this->getGenderName($row[3]), $row[4], $row[5]);
        return $student_details_id;
    }
}
/*$gsu = new GetStudentDetails();
$res = $gsu->getStudentId(new GetStudentUsername("sandip547"));
foreach($res as $value){
    echo $value. " ";
}
*/