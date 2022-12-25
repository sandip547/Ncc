<?php
class DeleteVideoDetails{

    private $videoId;
    private $topicId;

    /**
     * @param $videoId
     * @param $topicId
     */
    public function __construct($videoId, $topicId)
    {
        $this->videoId = $videoId;
        $this->topicId = $topicId;
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
    public function getTopicId()
    {
        return $this->topicId;
    }

    /**
     * @param mixed $topicId
     */
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;
    }



}
?>