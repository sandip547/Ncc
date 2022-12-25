<?php

class VideoUpdate
{
    private $videoId;
    private $link;
    private $detail;

    /**
     * @param $videoId
     * @param $link
     * @param $detail
     */
    public function __construct($videoId, $link, $detail)
    {
        $this->videoId = $videoId;
        $this->link = $link;
        $this->detail = $detail;
    }

    /**
     * @return mixed
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * @param mixed $videoId
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }

    /**
     * @return mixed
     */
    public function getLink()
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
