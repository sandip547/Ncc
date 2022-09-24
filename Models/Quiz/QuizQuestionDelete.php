<?php

class QuizQuestionDelete
{
    private $questionId;

    public function __construct($questionId)
    {
        $this->questionId = $questionId;
    }

    public function getQuestionId()
    {
        return $this->questionId;
    }

    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;
    }
}

?>
