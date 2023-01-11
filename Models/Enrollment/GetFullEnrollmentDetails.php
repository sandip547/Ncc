<?php
class GetFullEnrollmentDetails{
    private $enrollment_id,$course_id,$course_name,$student_id,$student_name,$user_name,
        $enrollment_date,$expiry_date,$status,$updated_by,$updated_date;

    /**
     * @param $enrollment_id
     * @param $course_id
     * @param $course_name
     * @param $student_id
     * @param $student_name
     * @param $user_name
     * @param $full_name
     * @param $enrollment_date
     * @param $expiry_date
     * @param $status
     * @param $updated_by
     * @param $updated_date
     */
    public function __construct($enrollment_id, $course_id, $course_name, $student_id, $student_name, $user_name, $enrollment_date, $expiry_date, $status, $updated_by, $updated_date)
    {
        $this->enrollment_id = $enrollment_id;
        $this->course_id = $course_id;
        $this->course_name = $course_name;
        $this->student_id = $student_id;
        $this->student_name = $student_name;
        $this->user_name = $user_name;

        $this->enrollment_date = $enrollment_date;
        $this->expiry_date = $expiry_date;
        $this->status = $status;
        $this->updated_by = $updated_by;
        $this->updated_date = $updated_date;
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
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * @return mixed
     */


    /**
     * @return mixed
     */
    public function getEnrollmentDate()
    {
        return $this->enrollment_date;
    }

    /**
     * @param mixed $enrollment_date
     */
    public function setEnrollmentDate($enrollment_date)
    {
        $this->enrollment_date = $enrollment_date;
    }

    /**
     * @return mixed
     */
    public function getExpiryDate()
    {
        return $this->expiry_date;
    }

    /**
     * @param mixed $expiry_date
     */
    public function setExpiryDate($expiry_date)
    {
        $this->expiry_date = $expiry_date;
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



}
?>