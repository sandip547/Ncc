<?php

class QuizQuestionUpdate
{
    private $questionId;
    private $quizId;
    private $question;

    public function __construct($questionId, $quizId, $question)
    {
        $this->questionId = $questionId;
        $this->quizId = $quizId;
        $this->question = $question;
    }

    public function getQuestionId()
    {
        return $this->questionId;
    }

    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;
    }

    public function getQuizId()
    {
        return $this->quizId;
    }

    public function setQuizId($quizId)
    {
        $this->quizId = $quizId;
    }

    public function getQuestion()
    {
        return $this->question;
    }

    public function setQuestion($question)
    {
        $this->question = $question;
    }


}

?>
