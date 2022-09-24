<?php

class QuizQuestionOptionsUpdate
{

    private $optionId;
    private $questionId;
    private $options;
    private $isCorrect;

    public function __construct($optionId, $questionId, $options, $isCorrect)
    {
        $this->optionId = $optionId;
        $this->questionId = $questionId;
        $this->options = $options;
        $this->isCorrect = $isCorrect;
    }

    public function getOptionId()
    {
        return $this->optionId;
    }

    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;
    }

    public function getQuestionId()
    {
        return $this->questionId;
    }

    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions($options)
    {
        $this->options = $options;
    }

    public function getIsCorrect()
    {
        return $this->isCorrect;
    }

    public function setIsCorrect($isCorrect)
    {
        $this->isCorrect = $isCorrect;
    }
}

?>
