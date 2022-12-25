<?php

class TeacherUser
{

    private $fullName;
    private $dob;
    private $email;
    private $gender;
    private $mobile;
    private $address;
    private $qualification;
    private $expertise;
    private $experience;
    private $cv_location;
    private $join_date;
    private $username;
    private $password;
    private $type;

    /**
     * @param $fullName
     * @param $dob
     * @param $email
     * @param $gender
     * @param $mobile
     * @param $address
     * @param $qualification
     * @param $expertise
     * @param $experience
     * @param $cv_location
     * @param $join_date
     * @param $username
     * @param $password
     * @param $type
     */
    public function __construct($fullName, $dob, $email, $gender, $mobile, $address, $qualification, $expertise, $experience, $cv_location, $join_date, $username, $password)
    {
        $this->fullName = $fullName;
        $this->dob = $dob;
        $this->email = $email;
        $this->gender = $gender;
        $this->mobile = $mobile;
        $this->address = $address;
        $this->qualification = $qualification;
        $this->expertise = $expertise;
        $this->experience = $experience;
        $this->cv_location = $cv_location;
        $this->join_date = $join_date;
        $this->username = $username;
        $this->password = $password;
        $this->type = 1;
        $this->activeStatus = 0;
    }

    /**
     * @return int
     */
    public function getActiveStatus(): int
    {
        return $this->activeStatus;
    }

    /**
     * @param int $activeStatus
     */
    public function setActiveStatus(int $activeStatus)
    {
        $this->activeStatus = $activeStatus;
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
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
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
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * @param mixed $qualification
     */
    public function setQualification($qualification)
    {
        $this->qualification = $qualification;
    }

    /**
     * @return mixed
     */
    public function getExpertise()
    {
        return $this->expertise;
    }

    /**
     * @param mixed $expertise
     */
    public function setExpertise($expertise)
    {
        $this->expertise = $expertise;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    /**
     * @return mixed
     */
    public function getCvLocation()
    {
        return $this->cv_location;
    }

    /**
     * @param mixed $cv_location
     */
    public function setCvLocation($cv_location)
    {
        $this->cv_location = $cv_location;
    }

    /**
     * @return mixed
     */
    public function getJoinDate()
    {
        return $this->join_date;
    }

    /**
     * @param mixed $join_date
     */
    public function setJoinDate($join_date)
    {
        $this->join_date = $join_date;
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->type = $type;
    }


}
?>