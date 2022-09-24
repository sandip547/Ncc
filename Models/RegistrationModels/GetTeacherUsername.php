<?php
class GetTeacherUsername{

    private $username;

    /**
     * @param $username
     */
    public function __construct($username)
    {
        $this->username = $username;
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


}
?>