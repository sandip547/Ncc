<?php

require_once("GetStudentDetails.php");
class GetEnrollmentDetails{
    private $conn;

    function __construct(){
        $this->conn = new DatabaseConnection();

    }


    function getEnrolledCourseCount($username){
        $sd = new getStudentDetails();
        $id = $sd->getStudentIdOn($username);
        $query = "select count(ALL courseId) from enrollment where studentId=? ";
        $result =$this->conn->executePrepareReturn($query,"i",array($id));
        return mysqli_fetch_row($result)[0];
    }

    function getActiveCourseCount($username){
        $gs = new GetStudentDetails();
        $id = $gs->getStudentIdOn($username);
        $date = date("Y-m-d");
        $query = "SELECT COUNT(courseid) from course WHERE course.courseId in(SELECT courseId from enrollment where studentId = ? and status = 1 and (SELECT DATEDIFF(expirydate,'$date'))>=0 )";
        $result = $this->conn->executePrepareReturn($query,"i",array($id));

        return mysqli_fetch_row($result)[0];
    }

    function getProductName($product_id)
    {
        $query = "SELECT courseName FROM course WHERE courseID=?";
        $result = $this->conn->executePrepareReturn($query, "i", array($product_id));
        return mysqli_fetch_row($result)[0];
    }

    function getStudentName($student_id){
        $query = "SELECT fullName FROM student WHERE studentID=?";
        $result = $this->conn->executePrepareReturn($query, "i", array($student_id));
        return mysqli_fetch_row($result)[0];

    }
    function getStatusName($status)
    {
        $active_status = "";
        if ($status == 1) {
            $active_status = "Enrolled";
        } else if ($status == 2) {
            $active_status = "Processing";
        }
        else{
            $active_status = "Cancelled";
        }
        return $active_status;
    }

    function getEnrollmentDetail(){
        $query = "select enrollmentid,courseid,studentid,status from enrollment";
        $result = $this->conn->executeQuery($query);
        $enrollmentdetails = array();
        while($row = mysqli_fetch_array($result)){
            array_push($enrollmentdetails,new GetEnrollment($row[0],$this->getProductName($row[1]),$this->getStudentName($row[2]),$this->getStatusName($row[3])));
        }
        return $enrollmentdetails;
    }

}

//$getenroll = new GetEnrollmentDetails();
//$g =$getenroll->getEnrolledCourseCount(new GetStudentUsername("sandiprock28"));
//echo $g;

?>