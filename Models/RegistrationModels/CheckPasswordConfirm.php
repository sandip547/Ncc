<?php
class CheckPasswordConfirm{

    private $check;

    /**
     * @param $check
     */
    public function __construct()
    {
        $this->check = False;
    }

    /**
     * @return mixed
     */
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * @param mixed $check
     */
    public function setCheck($check)
    {
        $this->check = $check;
    }

}
?>