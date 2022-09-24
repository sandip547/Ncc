<?php

class QuizUserAnswerDelete
{
    private $answerId;

    public function __construct($answerId)
    {
        $this->answerId = $answerId;
    }

    public function getAnswerId()
    {
        return $this->answerId;
    }

    public function setAnswerId($answerId)
    {
        $this->answerId = $answerId;
    }
}

?>
