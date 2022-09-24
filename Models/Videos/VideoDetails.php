<?php
class VideoDetails{
    private $topic_id;
    private $sr_no;
    private $link;
    private $detail;

    public function __construct($topic_id,$sr_no,$link,$detail){
        $this->$topic_id = $topic_id;
        $this->$sr_no = $sr_no;
        $this->$link = $link;
        $this->$detail = $detail;
    }

    function setTopicId($topic_id){
        $this->topic_id = $topic_id;
    }

    function getTopicId(){
        return $this->topic_id;
    }

    function serSrNo($sr_no){
        $this->sr_no = $sr_no;
    }

    function getSrNO(){
        return $this->sr_no;
    }

    function setLink($link){
        $this->link = $link;
    }

    function getLink(){
        return $this->link;
    }

    function setDetail($detail){
        $this->detail = $detail;
    }

    function getDetail(){
        return $this->detail;
    }
}
?>