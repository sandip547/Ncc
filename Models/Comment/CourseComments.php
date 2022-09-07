<?php
class CourseComments{
    private $course_id;
    private $student_id;
    private $comments;
    private $entered_date;

    function __construct($course_id,$student_id,$comment,$entered_date){
        $this->course_id = $course_id;
        $this->student_id = $student_id;
        $this->comments = $comment;
        $this->entered_date = $entered_date;
    }

    function setCourseId($course_id){$this->course_id=$course_id;}
    function getCourseId(){return $this->course_id;}

    function setStudentId($student_id){$this->student_id=$student_id;}
    function getStudentId(){return $this->student_id;}

    function setComments($comments){$this->comments=$comments;}
    function getComments(){return $this->comments;}

    function setEnteredDate($entered_date){$this->entered_date=$entered_date;}
    function getEnteredDate(){return $this->entered_date;}

}
?>