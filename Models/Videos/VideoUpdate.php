<?php

class VideoUpdate
{
    private $videoId;
    private $topicId;
    private $srNo;
    private $link;
    private $detail;

    public function __construct($videoId, $topicId, $srNo, $link, $detail)
    {
        $this->videoId = $videoId;
        $this->topicId = $topicId;
        $this->srNo = $srNo;
        $this->link = $link;
        $this->detail = $detail;
    }

    public function getVideoId()
    {
        return $this->videoId;
    }

    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }

    public function getTopicId()
    {
        return $this->topicId;
    }

    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;
    }

    public function getSrNo()
    {
        return $this->srNo;
    }

    public function setSrNo($srNo)
    {
        $this->srNo = $srNo;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getDetail()
    {
        return $this->detail;
    }

    public function setDetail($detail)
    {
        $this->detail = $detail;
    }
}

?>
