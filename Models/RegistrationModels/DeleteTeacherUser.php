<?php
class DeleteTeacherUser{
    private $teacher_user;

    /**
     * @param $teacher_user
     */
    public function __construct($teacher_user)
    {
        $this->teacher_user = $teacher_user;
    }

    /**
     * @return mixed
     */
    public function getTeacherUser()
    {
        return $this->teacher_user;
    }

    /**
     * @param mixed $teacher_user
     */
    public function setTeacherUser($teacher_user)
    {
        $this->teacher_user = $teacher_user;
    }


}
?>