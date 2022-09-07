<?php
    class QuizUserAnswer{
        private $student_id;
        private $question_id;
        private $option_id;
        private $entered_date;

        public function __construct($student_id, $question_id, $option_id, $entered_date){
            $this->student_id = $student_id;
            $this->question_id = $question_id;
            $this->option_id = $option_id;
            $this->entered_date = $entered_date;
        }

        function setStudentId($student_id){
            $this->student_id = $student_id;
        }

        function getStudentId(){
            return $this->student_id;
        }

        function setQuestionId($student_id){
            $this->student_id = $student_id;
        }

        function getQuestionId(){
            return $this->question_id;
        }

        function setOptionId($option_id){
            $this->option_id = $option_id;
        }

        function getOptionId(){
            return $this->option_id;
        }

        function setEnteredDate($entered_date){
            $this->entered_date = $entered_date;
        }

        function getEnteredDate(){
            return $this->entered_date;
        }
    }
?>