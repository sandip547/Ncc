<?php

class QuizQuestionOptionsDelete
{

    private $optionId;

    public function __construct($optionId)
    {
        $this->optionId = $optionId;
    }

    public function getOptionId()
    {
        return $this->optionId;
    }

    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;
    }
}

?>
