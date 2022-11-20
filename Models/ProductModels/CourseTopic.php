<?php
class CourseTopic
{
    private $topic_id;
    private $course_id;
    private $sr_no;
    private $topic_name;
    private $duration;
    private $entered_by;
    private $entered_date;
    private $updated_by;
    private $update_date;


    function __construct(
        $topic_id,
        $course_id,
        $sr_no,
        $topic_name,
        $duration,
        $entered_by,
        $entered_date,
        $updated_by,
        $update_date
    ) {
        $this->topic_id = $topic_id;
        $this->course_id = $course_id;
        $this->sr_no = $sr_no;
        $this->topic_name = $topic_name;
        $this->duration = $duration;
        $this->entered_by = $entered_by;
        $this->entered_date = $entered_date;
        $this->updated_by = $updated_by;
        $this->update_date = $update_date;
    }
    function setTopicId($topic_id)
    {
        $this->topic_id = $topic_id;
    }
    function getTopicId()
    {
        return $this->topic_id;
    }

    function setCourseId($course_id)
    {
        $this->course_id = $course_id;
    }
    function getCourseId()
    {
        return $this->course_id;
    }

    function setSrNo($sr_no)
    {
        $this->sr_no = $sr_no;
    }
    function getSrNo()
    {
        return $this->sr_no;
    }

    function setTopicName($topic_name)
    {
        $this->topic_name = $topic_name;
    }
    function getTopicName()
    {
        return $this->topic_name;
    }

    function setDuration($duration)
    {
        $this->duration = $duration;
    }
    function getDuration()
    {
        return $this->duration;
    }

    function setEnteredyBy($entered_by)
    {
        $this->entered_by = $entered_by;
    }
    function getEnteredyBy()
    {
        return $this->entered_by;
    }

    function setEnteredDate($entered_date)
    {
        $this->entered_date = $entered_date;
    }
    function getEnteredDate()
    {
        return $this->entered_date;
    }

    function setUpdatedBy($updated_by)
    {
        $this->updated_by = $updated_by;
    }
    function getUpdatedBy()
    {
        return $this->updated_by;
    }

    function setUpdatedDate($update_date)
    {
        $this->update_date = $update_date;
    }
    function getUpdatedDate()
    {
        return $this->update_date;
    }
}