<?php
class GetUserComments{
    private $student_id;
    private $profile_image;
    private $comment;
    private $full_name;

    /**
     * @param $student_id
     * @param $profile_image
     * @param $comment
     * @param $full_name
     */
    public function __construct($student_id, $profile_image, $comment, $full_name)
    {
        $this->student_id = $student_id;
        $this->profile_image = $profile_image;
        $this->comment = $comment;
        $this->full_name = $full_name;
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

    /**
     * @return mixed
     */
    public function getProfileImage()
    {
        return $this->profile_image;
    }

    /**
     * @param mixed $profile_image
     */
    public function setProfileImage($profile_image)
    {
        $this->profile_image = $profile_image;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
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


}
?>