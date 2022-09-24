<?php
class GetTeacherUserId{

    private $userid;

    /**
     * @param $userid
     */
    public function __construct($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userid;
    }

    /**
     * @param mixed $userid
     */
    public function setUserId($userid)
    {
        $this->userid = $userid;
    }


}
?>