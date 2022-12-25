<?php
class GetVideoDetails{

    private $videoId;
    private $topic_id;
    private $sr_no;
    private $link;
    private $detail;
    private $course_id;

    /**
     * @param $videoId
     * @param $topic_id
     * @param $sr_no
     * @param $link
     * @param $detail
     * @param $course_id
     */
    public function __construct($videoId, $topic_id, $sr_no, $link, $detail, $course_id)
    {
        $this->videoId = $videoId;
        $this->topic_id = $topic_id;
        $this->sr_no = $sr_no;
        $this->link = $link;
        $this->detail = $detail;
        $this->course_id = $course_id;
    }

    /**
     * @return mixed
     */
    public function getCourseId()
    {
        return $this->course_id;
    }

    /**
     * @param mixed $course_id
     */
    public function setCourseId($course_id)
    {
        $this->course_id = $course_id;
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
    public function getSrNo()
    {
        return $this->sr_no;
    }

    /**
     * @param mixed $sr_no
     */
    public function setSrNo($sr_no)
    {
        $this->sr_no = $sr_no;
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