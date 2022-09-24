<?php

class QuizUpdate
{
    private $quizId;
    private $title;
    private $courseId;
    private $enteredDate;
    private $enteredBy;

    public function __construct($quizId, $title, $courseId, $enteredDate, $enteredBy)
    {
        $this->quizId = $quizId;
        $this->title = $title;
        $this->courseId = $courseId;
        $this->enteredDate = $enteredDate;
        $this->enteredBy = $enteredBy;
    }

    public function getQuizId()
    {
        return $this->quizId;
    }

    public function setQuizId($quizId)
    {
        $this->quizId = $quizId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getCourseId()
    {
        return $this->courseId;
    }

    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;
    }

    public function getEnteredDate()
    {
        return $this->enteredDate;
    }

    public function setEnteredDate($enteredDate)
    {
        $this->enteredDate = $enteredDate;
    }

    public function getEnteredBy()
    {
        return $this->enteredBy;
    }

    public function setEnteredBy($enteredBy)
    {
        $this->enteredBy = $enteredBy;
    }

}

?>
