<?php

class ProductTopic{

    private $product_id;
    private $sr_no;
    private $topic_name;
    private $duration;
    private $entered_by;
    private $entered_date;

    /**
     * @param $course_id
     * @param $sr_no
     * @param $topic_name
     * @param $duration
     * @param $entered_by
     * @param $entered_date
     */
    public function __construct($product_id, $sr_no, $topic_name, $duration, $entered_by, $entered_date)
    {
        $this->product_id = $product_id;
        $this->sr_no = $sr_no;
        $this->topic_name = $topic_name;
        $this->duration = $duration;
        $this->entered_by = $entered_by;
        $this->entered_date = $entered_date;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
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


}
?>