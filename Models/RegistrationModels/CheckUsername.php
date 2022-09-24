<?php
class CheckUsername{
    private $check;

    /**
     * @param $check
     */
    public function __construct()
    {
        $this->check = False;
    }

    /**
     * @return false
     */
    public function getCheck(): bool
    {
        return $this->check;
    }

    /**
     * @param false $check
     */
    public function setCheck(bool $check)
    {
        $this->check = $check;
    }


}
?>