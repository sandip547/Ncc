<?php
class Enrollment{
    private $course_id;
    private $student_id;
    private $enroll_date;
    private $expiryDate;
    private $status;

    /**
     * @param $course_id
     * @param $student_id
     * @param $enroll_date
     * @param $expiryDate
     * @param $status
     */
    public function __construct($course_id, $student_id, $enroll_date, $expiryDate, $status)
    {
        $this->course_id = $course_id;
        $this->student_id = $student_id;
        $this->enroll_date = $enroll_date;
        $this->expiryDate = $expiryDate;
        $this->status = 2;
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
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @param mixed $student_id
     */
    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }

    /**
     * @return mixed
     */
    public function getEnrollDate()
    {
        return $this->enroll_date;
    }

    /**
     * @param mixed $enroll_date
     */
    public function setEnrollDate($enroll_date)
    {
        $this->enroll_date = $enroll_date;
    }

    /**
     * @return mixed
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param mixed $expiryDate
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
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


}
?>
