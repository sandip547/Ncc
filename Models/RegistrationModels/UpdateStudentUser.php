<?php
require_once("../../Models/RegistrationModels/TsUser.php");
class UpdateStudentUser{

      private $fullname,$dob,$email,$gender,$username,$mobile,$address,$expirydate,$student_id,$active_status;

    /**
     * @param $fullname
     * @param $dob
     * @param $email
     * @param $gender
     * @param $username
     * @param $mobile
     * @param $address
     * @param $expirydate
     * @param $student_id
     */
    public function __construct($fullname, $dob, $email, $gender, $username, $mobile, $address, $expirydate, $student_id)
    {
        $this->fullname = $fullname;
        $this->dob = $dob;
        $this->email = $email;
        $this->gender = $gender;
        $this->username = $username;
        $this->mobile = $mobile;
        $this->address = $address;
        $this->expirydate = $expirydate;
        $this->student_id = $student_id;
        $this->active_status =1;
    }

    /**
     * @return int
     */
    public function getActiveStatus(): int
    {
        return $this->active_status;
    }

    /**
     * @param int $active_status
     */
    public function setActiveStatus(int $active_status)
    {
        $this->active_status = $active_status;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     */
    public function setFullName($fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
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

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getExpiryDate()
    {
        return $this->expirydate;
    }

    /**
     * @param mixed $expirydate
     */
    public function setExpiryDate($expirydate)
    {
        $this->expirydate = $expirydate;
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