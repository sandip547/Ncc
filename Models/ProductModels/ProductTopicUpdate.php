<?php
class ProductTopicUpdate{

    private $course_id;
    private $topic_id;
    private $duration;
    private $serial_no;
    private $topic_name;

    /**
     * @param $course_id
     * @param $topic_id
     * @param $course_name
     * @param $duration
     * @param $serial_no
     * @param $topic_name
     */
    public function __construct($course_id,$topic_id,$duration,$serial_no,$topic_name)
    {
        $this->course_id = $course_id;
        $this->topic_id = $topic_id;

        $this->duration = $duration;
        $this->serial_no = $serial_no;
        $this->topic_name = $topic_name;
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
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getSerialNo()
    {
        return $this->serial_no;
    }

    /**
     * @param mixed $serial_no
     */
    public function setSerialNo($serial_no)
    {
        $this->serial_no = $serial_no;
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


}
?>