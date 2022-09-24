<?php

class CommentsDelete
{
    private $commentId;

    public function __construct($commentId)
    {
        $this->commentId = $commentId;
    }

    public function getCommentId()
    {
        return $this->commentId;
    }

    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;
    }
}

?>
