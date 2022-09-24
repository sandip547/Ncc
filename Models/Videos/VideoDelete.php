<?php

class VideoDelete
{
    private $videoId;

    public function __construct($videoId)
    {
        $this->videoId = $videoId;
    }

    public function getVideoId()
    {
        return $this->videoId;
    }

    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }


}

?>
