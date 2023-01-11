<?php
class GetTopicReview{
    private $topic_id, $topic_name, $topic_duration;

    /**
     * @param $topic_id
     * @param $topic_name
     * @param $topic_duration
     */
    public function __construct($topic_id, $topic_name, $topic_duration)
    {
        $this->topic_id = $topic_id;
        $this->topic_name = $topic_name;
        $this->topic_duration = $topic_duration;
    }

    /**
     * @return mixed
     */
    public function getTopicId()
    {
        return $this->topic_id;
    }

    /**
     * @param mixed $topic_id
     */
    public function setTopicId($topic_id)
    {
        $this->topic_id = $topic_id;
    }

    /**
     * @return mixed
     */
    public function getTopicName()
    {
        return $this->topic_name;
    }

    /**
     * @param mixed $topic_name
     */
    public function setTopicName($topic_name)
    {
        $this->topic_name = $topic_name;
    }

    /**
     * @return mixed
     */
    public function getTopicDuration()
    {
        return $this->topic_duration;
    }

    /**
     * @param mixed $topic_duration
     */
    public function setTopicDuration($topic_duration)
    {
        $this->topic_duration = $topic_duration;
    }



}
?>