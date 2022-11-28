<?php

class LoginStaffModel{
    private $username;
    private $password;
    private $type;

    /**
     * @param $username
     * @param $password
     * @param $type
     */
    public function __construct($username, $password, $type)
    {
        $this->username = $username;
        $this->password = $password;
        $this->type = $type;
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