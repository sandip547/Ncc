<?php

class CommentsUpdate
{
    private $commentId;
    private $courseId;
    private $studentId;
    private $comment;
    private $enteredDate;

    public function __construct($comment, $enteredDate)
    {
        $this->comment = $comment;
        $this->enteredDate = $enteredDate;
    }

    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * @param mixed $commentId
     */
    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;
    }

    public function getCourseId()
    {
        return $this->courseId;
    }

    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;
    }

    public function getStudentId()
    {
        return $this->studentId;
    }

    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getEnteredDate()
    {
        return $this->enteredDate;
    }

    public function setEnteredDate($enteredDate)
    {
        $this->enteredDate = $enteredDate;
    }
}

?>
