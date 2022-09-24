<?php
class GetTeacherNameDetails{
    private $teacher_id;
    private $full_name;
    private $dob;
    private $email;
    private $gender;
    private $mobile;
    private $addresses;
    private $join_date;
    private $qualification;
    private $expertise;
    private $experience;
    private $cv_location;
    private $active_status;
    private $type;
    private $username;

    /**
     * @param $teacher_id
     * @param $full_name
     * @param $dob
     * @param $email
     * @param $gender
     * @param $mobile
     * @param $addresses
     * @param $join_date
     * @param $qualification
     * @param $expertise
     * @param $experience
     * @param $cv_location
     * @param $active_status
     * @param $type
     */
    public function __construct($teacher_id, $full_name, $dob, $email, $gender, $mobile, $addresses, $join_date, $qualification, $expertise, $experience, $cv_location, $active_status, $type,$username)
    {
        $this->teacher_id = $teacher_id;
        $this->full_name = $full_name;
        $this->dob = $dob;
        $this->email = $email;
        $this->gender = $gender;
        $this->mobile = $mobile;
        $this->addresses = $addresses;
        $this->join_date = $join_date;
        $this->qualification = $qualification;
        $this->expertise = $expertise;
        $this->experience = $experience;
        $this->cv_location = $cv_location;
        $this->active_status = $active_status;
        $this->type = $type;
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getTeacherId()
    {
        return $this->teacher_id;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUserName($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $teacher_id
     */
    public function setTeacherId($teacher_id)
    {
        $this->teacher_id = $teacher_id;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * @param mixed $full_name
     */
    public function setFullName($full_name)
    {
        $this->full_name = $full_name;
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
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param mixed $addresses
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
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
    public function getActiveStatus()
    {
        return $this->active_status;
    }

    /**
     * @param mixed $active_status
     */
    public function setActiveStatus($active_status)
    {
        $this->active_status = $active_status;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


}
?>