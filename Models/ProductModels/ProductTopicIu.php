<?php
class ProductTopicIu{
        private $course_id;
        private $sr_no;
        private $topic_name;
        private $duration;


        function __construct($course_id,$sr_no,$topic_name,$duration){
                $this->course_id = $course_id;
                $this->sr_no = $sr_no;
                $this->topic_name = $topic_name;
                $this->duration = $duration;
        }

        function setCourseIs($course_id){
            $this->course_id = $course_id;
        }

        function getCourseId(){
            return $this->course_id;
        }

        function setSrNo($sr_no){
            $this->sr_no = $sr_no;
        }

        function getSrNo(){
            return $this->sr_no;
        }

        function setTopicName($topic_name){
            $this->topic_name = $topic_name;
        }

        function getTopicName(){
        return $this->topic_name;
        }

        function setDuration($duration){
        $this->duration = $duration;
        }

        function getDuration(){
        return $this->duration;
        }

}
?>