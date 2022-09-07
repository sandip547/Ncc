<?php
require_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../../Models/Comment/CourseComments.php");
class SaveComments{
    private $connection;
    function __construct(){
        $this->connection = new DatabaseConnection();
    }

    function saveProductComments($sc){
        $query = "insert into comments(courseId,studentId,comment,enteredDate) values(?,?,?,?)";
        echo $sc->getCourseId().$sc->getStudentId().$sc->getComments().$sc->getEnteredDate();
        $this->connection->executePrepare($query,"iiss",array($sc->getCourseId(),$sc->getStudentId(),$sc->getComments(),$sc->getEnteredDate()));
        mysqli_close($this->connection->getConnection());
    }
}

$sc = new SaveComments();
$sc->saveProductComments(new CourseComments(7,1,"hello there",date("Y-m-d h:i:s")));

?>