<?php
class Quiz{
    private $title;
    private $course_id;
    private $entered_date;
    private $entered_by;

    function __construct($title,$course_id,$entered_date,$entered_by){
        $this->title = $title;
        $this->course_id = $course_id;
        $this->entered_date = $entered_date;
        $this->entered_by = $entered_by;

    }
    function setTitle($title){
        $this->title = $title;
    }

    function getTitle(){
        return $this->title;
    }
    function setCourseId($title){
        $this->course_id = $title;
    }

    function getCourseId(){
        return $this->course_id;
    }

    function setEnteredDate($entered_date){
        $this->entered_date = $entered_date;
    }

    function getEnteredDate(){
        return $this->entered_date;
    }

    function setEnteredBy($entered_by){
        $this->entered_by = $entered_by;
    }

}
?>