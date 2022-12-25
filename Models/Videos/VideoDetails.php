<?php
class VideoDetails{
    private $topic_id;
    private $sr_no;
    private $link;
    private $detail;

    public function __construct($topic_id,$sr_no,$link,$detail){
        $this->topic_id = $topic_id;
        $this->sr_no = $sr_no;
        $this->link = $link;
        $this->detail = $detail;
    }

    function setTopicId($topic_id){
        $this->topic_id = $topic_id;
    }

    function getTopicId(){
        return $this->topic_id;
    }

    function setSrNo($sr_no){
        $this->sr_no = $sr_no;
    }

    function getSrNo(){
        return $this->sr_no;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param mixed $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }

}
?>