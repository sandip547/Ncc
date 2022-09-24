<?php
class CourseRatings{

    private $course_id;
    private $student_id;
    private $rating;
    private $entered_date;

    function __construct($course_id,$student_id,$rating,$entered_date){
        $this->course_id = $course_id;
        $this->student_id = $student_id;
        $this->rating = $rating;
        $this->entered_date = $entered_date;

    }

    function setCourseId($course_id){$this->course_id=$course_id;}
    function getCourseId(){$this->course_id;}

    function setStudentId($student_id){$this->student_id=$student_id;}
    function getStudentId(){$this->student_id;}

    function setRatings($rating){$this->rating=$rating;}
    function getRatings(){$this->rating;}

    function setEnteredDate($entered_date){$this->entered_date=$entered_date;}
    function getEnteredDate(){$this->entered_date;}
}
?>