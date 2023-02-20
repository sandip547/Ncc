<?php
class GetEnrolledStudentEmail{
    private $studentId;
    private $fullName;
    private $email;

    /**
     * @param $fullname
     * @param $email
     */
    public function __construct($studentId,$fullName, $email)
    {
        $this->studentId = $studentId;
        $this->fullName = $fullName;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * @param mixed $studentId
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullname($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }



}
?>