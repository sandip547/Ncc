<?php
require_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../../Models/Comment/CourseComments.php");
require_once("../../Models/Comment/CommentsUpdate.php");
require_once("../../Models/Comment/CommentsDelete.php");
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

    function updateComments($uc){
        $query = "update comments set comment = ?,enteredDate = ? where commentId = ?";
        $this->connection->execute($query,"si",array($uc->getComment(),$uc->getEnteredDate(),$uc->getCourseId()));
        mysqli_close($this->connection->getConnection());
    }

    function deleteComments($dc){
        $query = "delete from comments where commentId = ?";
        $this->connection->execute($query,"i",array(dc->getCommentId()));
        mysqli_close($this->connection->getConnection());

    }
}

$sc = new SaveComments();
$sc->saveProductComments(new CourseComments(7,1,"hello there",date("Y-m-d h:i:s")));

?>