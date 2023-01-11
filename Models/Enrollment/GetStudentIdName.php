<?php
class GetStudentIdName{

    private $student_id;
    private $student_name;

    /**
     * @param $student_id
     * @param $student_name
     */
    public function __construct($student_id, $student_name)
    {
        $this->student_id = $student_id;
        $this->student_name = $student_name;
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

}
?>