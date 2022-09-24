<?php
class GetCourseComments{
    private $student_name;
    private $comments;
    private $date;

    function __construct($comments,$date,$student_name){
        $this->comments = $comments;
        $this->date = $date;
        $this->student_name = $student_name;
    }

    function getComments(){return $this->comments;}

    function getDate(){return $this->date;}

    function getStudentName(){return $this->student_name;}

    }
  ?>