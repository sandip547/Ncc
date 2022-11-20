<?php
class GetEnrollment{
    private $enrollmentid;
    private $course_name;
    private $student_name;
    private $status;

    /**
     * @param $enrollmentid
     * @param $course_name
     * @param $student_name
     * @param $status
     */
    public function __construct($enrollmentid, $course_name, $student_name, $status)
    {
        $this->enrollmentid = $enrollmentid;
        $this->course_name = $course_name;
        $this->student_name = $student_name;
        $this->status = $status;
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
    public function getStudentName()
    {
        return $this->student_name;
    }

    /**
     * @param mixed $student_name
     */
    public function setStudentName($student_name)
    {
        $this->student_name = $student_name;
    }


    /**
     * @return mixed
     */
    public function getEnrollmentid()
    {
        return $this->enrollmentid;
    }

    /**
     * @param mixed $enrollmentid
     */
    public function setEnrollmentid($enrollmentid)
    {
        $this->enrollmentid = $enrollmentid;
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