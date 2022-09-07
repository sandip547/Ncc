<?php
class QuizQuesiton{
    private $quiz_id;
    private $quiz_question;

    public function __construct($quiz_id, $question){
        $this->quiz_id = $quiz_id;
        $this->question = $question;
    }

    function setQuizId($quiz_id){
        $this->quiz_id = $quiz_id;
    }

    function getQuizId(){
        $this->quiz_id = $quiz_id;
    }

    function setQuizQuestion($quiz_question){
        $this->quiz_question = $quiz_question;
    }

    function getQuizQuestion(){
        return $this->quiz_question;
    }

}
?>