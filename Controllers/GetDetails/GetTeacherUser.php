<?php
require_once("../../DatabaseConnection/DatabaseConnection.php");
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
    function getTeacherDetails(){
            $query = "select staffId,fullName,dob,email,gender,mobileNo,address,joinDate,qualification,subjectExpertise,
                      noOfExperience,cvLocation,activeStatus,type,username from staff";
            $result = $this->connection->executeQuery($query);
            $teacher_details = array();
            while($row = mysqli_fetch_array($result)){
                array_push($teacher_details,new GetTeacherModel($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6], $row[7],$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14]));
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

    function getTeacherIdDetails($teacher_id){
        $query = "select staffId,fullName,dob,email,gender,mobileNo,address,joinDate,qualification,subjectExpertise,noOfExperience,cvLocation,activeStatus,type,username from staff where staffId =?";
        $result = $this->connection->executePrepareReturn($query,"s",array($teacher_id->getUserId()));
        $teacher_details = array();
        $row = mysqli_fetch_row($result);
        array_push($teacher_details,new GetTeacherNameDetails($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14]));
        return $teacher_details;
    }
}
/*$gt = new GetTeacherUser();
$result=$gt->getTeacherIdDetails(new GetTeacherUserId(2));
foreach ($result as $value){
    echo $value->getUserName();

}
*/