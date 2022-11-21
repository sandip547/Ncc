<?php
require_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../../Models/Enrollment/Enrollment.php");
class SaveEnrollmentDetails{
    private $conn;
    function __construct(){
        $this->conn = new DatabaseConnection();
    }

    function getExpiryDateRes($code){

        $date = date("Y-m-d");
        $query = "";
        if($code ==0){
            $query = "SELECT DATE_ADD('$date', INTERVAL 50 YEAR)";
        }else if($code==1){
            $query = "SELECT DATE_ADD('$date', INTERVAL 3 MONTH)";
        }
        else if ($code == 2){
            $query = "SELECT DATE_ADD('$date', INTERVAL 6 MONTH)";
        }
        else if ($code == 3){
            $query = "SELECT DATE_ADD('$date', INTERVAL 12 MONTH)";
        }
        else{
            echo "invalid";
        }
        $result = $this->conn->executeQuery($query);
        return mysqli_fetch_row($result)[0];
    }

    function getEnrollmentValidityCode($courseId){
        $query = "select enrollmentValidity from course where courseId =?";
        $result = $this->conn->executePrepareReturn($query, "i",array($courseId));
        return mysqli_fetch_row($result)[0];

    }

    function saveEnrollment($se){

        $query = "insert into Enrollment(courseId,studentId,enrollDate,expiryDate,status) values(?,?,?,?,?)";
        $this->conn->executePrepare($query,"iissi",array($se->getCourseId(),$se->getStudentId(),$se->getEnrollDate(),$se->getExpiryDate(),
                                                               $se->getStatus()));
       mysqli_close($this->conn->getConnection());
    }

    function changeEnrollementStatus($st){

        $query = "update Enrollment set status=? where courseId=? and studentId=?";
        $this->conn->executePrepare($query,"iii",array($st->getStatus(),$st->getCourseId(),$st->getStudentId()));
        mysqli_close($this->conn->getConnection());

    }

    function CancelEnrollment($st){

        $query = "update Enrollment set status=3 where courseId=? and studentId=?";
        $this->conn->executePrepare($query,"iii",array($st->getStatus(),$st->getCourseId(),$st->getStudentId()));
        $this->conn->close();
    }

}
//$se = new SaveEnrollmentDetails();
//echo $se->getExpiryDate(0);
//$se->saveEnrollment(new Enrollment(26,6,date("y-m-d"),$se->getExpiryDateRes($se->getEnrollmentValidityCode(26)),0));


?>