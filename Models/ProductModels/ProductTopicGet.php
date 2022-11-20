<?php
class ProductTopicGet
{
    private $topic_id;
    private $course_name;
    private $sr_no;
    private $topic_name;
    private $duration;
    private $entered_by;
    private $entered_date;
    private $updated_by;
    private $updated_date;


    /**
     * @param $topic_id
     * @param $course_id
     * @param $sr_no
     * @param $topic_name
     * @param $duration
     * @param $entered_by
     * @param $entered_date
     * @param $updated_date
     * @param $updated_by
     */
    public function __construct($topic_id, $course_name, $sr_no, $topic_name, $duration, $entered_by, $entered_date, $updated_by, $updated_date)
    {
        $this->topic_id = $topic_id;
        $this->course_name = $course_name;
        $this->sr_no = $sr_no;
        $this->topic_name = $topic_name;
        $this->duration = $duration;
        $this->entered_by = $entered_by;
        $this->entered_date = $entered_date;
        $this->updated_by = $updated_by;
        $this->updated_date = $updated_date;
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
    public function getCourseName()
    {
        return $this->course_name;
    }

    /**
     * @param mixed $course_name
     */
    public function setCourseName($course_name)
    {
        $this->course_name = $course_name;
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
    public function getEnteredBy()
    {
        return $this->entered_by;
    }

    /**
     * @param mixed $entered_by
     */
    public function setEnteredBy($entered_by)
    {
        $this->entered_by = $entered_by;
    }

    /**
     * @return mixed
     */
    public function getEnteredDate()
    {
        return $this->entered_date;
    }

    /**
     * @param mixed $entered_date
     */
    public function setEnteredDate($entered_date)
    {
        $this->entered_date = $entered_date;
    }

    /**
     * @return mixed
     */
    public function getUpdatedDate()
    {
        return $this->updated_date;
    }

    /**
     * @param mixed $updated_date
     */
    public function setUpdatedDate($updated_date)
    {
        $this->updated_date = $updated_date;
    }

    /**
     * @return mixed
     */
    public function getUpdatedBy()
    {
        return $this->updated_by;
    }

    /**
     * @param mixed $updated_by
     */
    public function setUpdatedBy($updated_by)
    {
        $this->updated_by = $updated_by;
    }
}