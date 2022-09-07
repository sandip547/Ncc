<?php
class QuizQuestionOptions{
    private $question_id;
    private $question_options;
    private $is_correct;

    function __construct($question_id,$question_options,$is_correct){
        $this->question_id = $question_id;
        $this->question_options = $question_options;
        $this->is_correct = $is_correct;
    }

    function setQuestionId($question_id){
        this->question_id = $question_id;
    }

    function getQuestionId(){
        return $this->question_id;
    }

    function setQuestionOptions($question_options){
        $this->question_options = $question_options;
    }

    function getQuestionOptions(){
        return $this->question_options;
    }

    function setIsCorrect($is_correct){
        $this->is_correct = $is_correct;
    }

    function getIsCorrect(){
        return $this->is_correct;
    }
}
?>