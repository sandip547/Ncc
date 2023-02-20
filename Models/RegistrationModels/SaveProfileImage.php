<?php
class SaveProfileImage{
    private $profileImage;
    private $student_id;

    /**
     * @param $profileImage
     * @param $studeint_id
     */
    public function __construct($profileImage, $student_id)
    {
        $this->profileImage = $profileImage;
        $this->student_id = $student_id;
    }

    /**
     * @return mixed
     */
    public function getProfileImage()
    {
        return $this->profileImage;
    }

    /**
     * @param mixed $profileImage
     */
    public function setProfileImage($profileImage)
    {
        $this->profileImage = $profileImage;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @param mixed $studeint_id
     */
    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }



}
?>