<?php

require_once("GetStudentDetails.php");
class GetEnrollmentDetails{
    private $conn;

    function __construct(){
        $this->conn = new DatabaseConnection();

    }
    function getStudentIdEnrollment($username){
        $sql = "SELECT studentid FROM student WHERE username=?";
        $result = $this->conn->executePrepareReturn($sql,"s",array($username));
        return mysqli_fetch_row($result)[0];
    }

    function checkCourseEnrollStatus($course_id,$student_id){
            $query = "select status from enrollment where courseid=? and studentid=?";
            $result = $this->conn->executePrepareReturn($query, "ii",array($course_id,$student_id));
            return mysqli_fetch_row($result)[0];
    }


    function getStudentDetailsForEnrollMent(){
        $query = "SELECT DISTINCT studentid from enrollment";
        $result = $this->conn->executeQuery($query);
        $sed = array();
        while($row = mysqli_fetch_array($result)){
            array_push($sed, new GetStudentIdName($row[0],$this->getStudentName($row[0])));
        }
        return $sed;
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
    function getStaffName($id){
        $query = "select username from staff where staffid =?";
        $result = $this->conn->executePrepareReturn($query,'i',array($id));
        return mysqli_fetch_row($result)[0];
    }

    function getStudentUserName($student_id){
        $query = "SELECT userName FROM student WHERE studentID=?";
        $result = $this->conn->executePrepareReturn($query, "i", array($student_id));
        return mysqli_fetch_row($result)[0];
    }

    function getFullEnrollmentDetails($enroll){
        $query = "SELECT * FROM enrollment where studentId = ? Order by enrollDate Desc ";
        $result = $this->conn->executePrepareReturn($query,"i",array($enroll));
        $fed = array();
        while($row = mysqli_fetch_array($result)){
            array_push($fed,new GetFullEnrollmentDetails($row[0],$row[1],$this->getProductName($row[1]),$row[2],$this->getStudentName($row[2])
            ,$this->getStudentUserName($row[2]),$row[3],$row[4],$this->getStatusName($row[5]),$this->getStaffName($row[6]),date('Y-m-d h:m:s')));
        }

        return $fed;

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