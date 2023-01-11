<?php
//require_once("../../DatabaseConnection/DatabaseConnection.php");

class SaveEnrollmentDetails{
    private $conn;
    private $status;
    function __construct(){
        $this->conn = new DatabaseConnection();
        $this->status = 2;
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

    function getEnrollStudentCourseId($sid){
        $query ="select courseid from enrollment where enrollmentid=?";
        $result = $this->conn->executePrepareReturn($query,"i",array($sid));
        return mysqli_fetch_row($result)[0];
    }

    function saveEnrollment($se){
        $check= false;
        $query = "insert into Enrollment(courseId,studentId,status) values(?,?,?)";
        if($this->conn->executePrepare($query,"iii",array($se->getCourseId(),$se->getStudentId(),
                                                               $this->status))){
            $check= true;
        }

        return $check;
    }

    function getStudentIdEnrollment($enid){
        $query = "select studentId from enrollment where enrollmentid=?";
        $result = $this->conn->executePrepareReturn($query,"i",array($enid));
        return mysqli_fetch_row($result)[0];
    }

    function getEmailOfEnrolledUser($userid){
        $query = "select email from student where studentid=?";
        $result = $this->conn->executePrepareReturn($query,"i",array($userid));
        return mysqli_fetch_row($result)[0];
    }

    function changeEnrollementStatus($st){
        $check = false;
        $query = "update Enrollment set status=?,enrolldate=?,expirydate=?,updatedby=?,updatedate=? where enrollmentId=?";
        if($this->conn->executePrepare($query,"issisi",array($st->getStatus(),date("y-m-d"),
            $this->getExpiryDateRes($this->getEnrollmentValidityCode($this->getEnrollStudentCourseId($st->getEnrollmentId()))),
            $st->getUpdatedBy(),$st->getUpdatedDate(),$st->getEnrollmentId()))){
                $check = true;
        }
        return $check;

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