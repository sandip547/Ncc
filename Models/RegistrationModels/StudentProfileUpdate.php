<?php
class StudentProfileUpdate{

    private $fullname;
    private $dob;
    private $email;
    private $gender;
    private $mobileNo;
    private $address;
    private $username;

    /**
     * @param $fullname
     * @param $dob
     * @param $email
     * @param $gender
     * @param $mobileNo
     * @param $address
     */

    public function __construct($fullname, $dob, $email, $gender, $mobileNo, $address,$username)
    {
        $this->fullname = $fullname;
        $this->dob = $dob;
        $this->email = $email;
        $this->gender = $gender;
        $this->mobileNo = $mobileNo;
        $this->address = $address;
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     */
    public function setFullname($fullname)
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
    public function getMobileNo()
    {
        return $this->mobileNo;
    }

    /**
     * @param mixed $mobileNo
     */
    public function setMobileNo($mobileNo)
    {
        $this->mobileNo = $mobileNo;
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


}
?>