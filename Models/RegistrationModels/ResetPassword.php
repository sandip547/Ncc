<?php
class ResetPassword{
    private $current_password;
    private $new_password;
    private $confirm_password;

    /**
     * @param $current_password
     * @param $new_password
     * @param $confirm_password
     */
    public function __construct($current_password, $new_password, $confirm_password)
    {
        $this->current_password = $current_password;
        $this->new_password = $new_password;
        $this->confirm_password = $confirm_password;
    }

    /**
     * @return mixed
     */
    public function getCurrentPassword()
    {
        return $this->current_password;
    }

    /**
     * @param mixed $current_password
     */
    public function setCurrentPassword($current_password)
    {
        $this->current_password = $current_password;
    }

    /**
     * @return mixed
     */
    public function getNewPassword()
    {
        return $this->new_password;
    }

    /**
     * @param mixed $new_password
     */
    public function setNewPassword($new_password)
    {
        $this->new_password = $new_password;
    }

    /**
     * @return mixed
     */
    public function getConfirmPassword()
    {
        return $this->confirm_password;
    }

    /**
     * @param mixed $confirm_password
     */
    public function setConfirmPassword($confirm_password)
    {
        $this->confirm_password = $confirm_password;
    }


}
?>