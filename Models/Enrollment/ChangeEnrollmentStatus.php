<?php
class ChangeEnrollmentStatus{

    private $status;
    private $enrollment_id;
    private $updated_by;
    private $updated_date;

    /**
     * @param $status
     * @param $enrollment_id
     * @param $updated_by
     * @param $updated_date
     */
    public function __construct($status, $enrollment_id, $updated_by, $updated_date)
    {
        $this->status = $status;
        $this->enrollment_id = $enrollment_id;
        $this->updated_by = $updated_by;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getEnrollmentId()
    {
        return $this->enrollment_id;
    }

    /**
     * @param mixed $enrollment_id
     */
    public function setEnrollmentId($enrollment_id)
    {
        $this->enrollment_id = $enrollment_id;
    }


}
?>