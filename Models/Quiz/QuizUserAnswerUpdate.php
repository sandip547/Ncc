<?php

class QuizUserAnswerUpdate
{
    private $answerId;
    private $studentId;
    private $questionId;
    private $optionId;
    private $enteredDate;

    public function __construct($answerId, $studentId, $questionId, $optionId, $enteredDate)
    {
        $this->answerId = $answerId;
        $this->studentId = $studentId;
        $this->questionId = $questionId;
        $this->optionId = $optionId;
        $this->enteredDate = $enteredDate;
    }

    public function getAnswerId()
    {
        return $this->answerId;
    }

    public function setAnswerId($answerId)
    {
        $this->answerId = $answerId;
    }

    public function getStudentId()
    {
        return $this->studentId;
    }

    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;
    }

    public function getQuestionId()
    {
        return $this->questionId;
    }

    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;
    }

    public function getOptionId()
    {
        return $this->optionId;
    }

    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;
    }

    public function getEnteredDate()
    {
        return $this->enteredDate;
    }

    public function setEnteredDate($enteredDate)
    {
        $this->enteredDate = $enteredDate;
    }
}

?>
