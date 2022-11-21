<?php
//require_once("../../Models/Comment/GetCourseComments.php");
//require_once("../../DatabaseConnection/DatabaseConnection.php");
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
            array_push($m_comments,new GetCourseComments($row[1],$row[2],$this->getStudentName($row[0])));
        }

        return $m_comments;
    }

    function getUserComments($username){
        $gs = new GetStudentDetails();
        $pd = new GetProductDetails();
        $query = "select studentid,courseid,comment,enteredDate from comments where studentid = ?";
        $m_comments = array();
        $result = $this->connection->executePrepareReturn($query,"i",array($gs->getStudentIdOn($username)));
        while($row = mysqli_fetch_array($result)){
            array_push($m_comments,new CommentsUser($pd->getProductName($row[1]),$row[2],$row[3]));
        }
        return $m_comments;
    }
}
/*$gc = new GetComments();
$res = $gc->getProductComments(7);
foreach($res as $value){
    echo $value->getDate();
    break;
}
*/

?>