<?php
require_once("../../Models/Comment/GetCourseComments.php");
require_once("../../DatabaseConnection/DatabaseConnection.php");
class GetComments{
    private $connection;

    function __construct(){
        $this->connection = new DatabaseConnection();
    }
    function getStudentName($studentId){
        $query = "select fullName from student where studentId=?";
        $result=$this->connection->executePrepareReturn($query,"i",array($studentId));
        return mysqli_fetch_row($result)[0];
    }
    function getProductComments($id){
        $query = "select studentId,comment,enteredDate from comments where courseId = ?";
        $m_comments = array();
        $result = $this->connection->executePrepareReturn($query,"i",array($id));
        while($row = mysqli_fetch_array($result)){
            $s_comments = array();
            array_push($s_comments,$this->getStudentName($row[0]),$row[1],$row[2]);
            array_push($m_comments,$s_comments);
        }
        return $m_comments;
    }
}



?>