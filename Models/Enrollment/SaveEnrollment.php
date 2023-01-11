<?php
class SaveEnrollment{
    private $course_id;
    private $student_id;
    private $status;

    /**
     * @param $course_id
     * @param $student_id
     * @param $status
     */
    public function __construct($course_id, $student_id)
    {
        $this->course_id = $course_id;
        $this->student_id = $student_id;

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



}
?>