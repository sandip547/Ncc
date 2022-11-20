<?php
require_once("../../DatabaseConnection/DatabaseConnection.php");
class SaveEnrollmentDetails{
    private $conn;
    function __construct(){
        $this->conn = new DatabaseConnection();
    }
    function getExpiryDate($code){

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
        $query = "select enrollmentValidity from enrollment where courseId =?";
        $result = $this->connection->executePrepareReturn($query, "i",array($courseId));
        return mysqli_fetch_row($result)[0];

    }

    function saveEnrollment($se){

        $query = "insert into Enrollment(courseId,studentId,enrollDate,expiryDate,status) values(?,?,?,?,?)";
        $this->conn->executePrepare($query,"iissi",array($se->getCourseId(),$se->getStudentId(),$se->getEnrollDate(),$se->getExpiryDate(),
                                                               $se->getStatus()));
        $this->conn->close();
    }

    function changeEnrollementStatus($st){

        $query = "update Enrollment set status=? where courseId=? and studentId=?";
        $this->conn->executePrepare($query,"iii",array($st->getStatus(),$st->getCourseId(),$st->getStudentId()));
        $this->conn->close();

    }

    function CancelEnrollment($st){

        $query = "update Enrollment set status=3 where courseId=? and studentId=?";
        $this->conn->executePrepare($query,"iii",array($st->getStatus(),$st->getCourseId(),$st->getStudentId()));
        $this->conn->close();
    }

}
$se = new SaveEnrollmentDetails();
echo $se->getExpiryDate(0);
?>