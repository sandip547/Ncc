<?php
class GetStudentUser {
    private $student_id;
    private $fullname;
    private $dob;
    private $email;
    private $gender;
    private $username;
    private $mobile;
    private $address;
    private $reg_date;
    private $active_status;
    private $last_login;



    /**
     * @param $firstname
     * @param $lastname
     * @param $dob
     * @param $email
     * @param $gender
     * @param $username
     * @param $mobile
     * @param $address
     * @param $reg_date
     * @param $active_status
     * @param $student_id
     */
    public function __construct($student_id,$fullname, $dob, $email, $gender, $username, $mobile, $address, $reg_date, $active_status,$last_login)
    {
        $this->student_id=$student_id;
        $this->fullname = $fullname;

        $this->dob = $dob;
        $this->email = $email;
        $this->gender = $gender;
        $this->username = $username;
        $this->mobile = $mobile;
        $this->address = $address;
        $this->reg_date = $reg_date;
        $this->active_status = $active_status;
        $this->last_login = $last_login;

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
    public function getFullName()
    {
        return $this->fullname;
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
    public function getRegDate()
    {
        return $this->reg_date;
    }
    public function getRegDateLabel()
    {
        $date = date_create($this->reg_date);
        return date_format($date,"F d, Y");
    }

    /**
     * @param mixed $reg_date
     */
    public function setRegDate($reg_date)
    {
        $this->reg_date = $reg_date;
    }

    /**
     * @return mixed
     */
    public function getActiveStatus()
    {
        return $this->active_status;
    }
    public function getActiveStatusLabel()
    {
        return $this->active_status == 1 ? "Active" : "Inactive";
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
    public function getLastLogin()
    {
        return $this->last_login;
    }

    /**
     * @param mixed $last_login
     */
    public function setLastLogin($last_login)
    {
        $this->last_login = $last_login;
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