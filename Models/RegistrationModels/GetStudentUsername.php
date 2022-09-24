<?php
class GetStudentUsername{
    private $username;

    function __construct($username){
        $this->username = $username;
    }
    public function setUsername($username){$this->username=$username;}
    public function getUsername(){return $this->username;}
}
?>