<?php
class GetStudentUserId{
    private $student_id;

    /**
     * @param $student_id
     */
    public function __construct($student_id)
    {
        $this->student_id = $student_id;
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

}

    ?>