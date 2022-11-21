<?php
class CommentsUser{
    private $course_name;
    private $comment;
    private $date;

    /**
     * @param $course_name
     * @param $comment
     * @param $date
     */
    public function __construct($course_name, $comment, $date)
    {
        $this->course_name = $course_name;
        $this->comment = $comment;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getCourseName()
    {
        return $this->course_name;
    }

    /**
     * @param mixed $course_name
     */
    public function setCourseName($course_name)
    {
        $this->course_name = $course_name;
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

}
?>