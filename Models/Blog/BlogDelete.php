<?php

class BlogDelete
{
    private $blogId;

    public function __construct($blodId)
    {
        $this->blogId = $blodId;

    }

    public function getBlogId()
    {
        return $this->blogId;
    }

    public function setBlogId($blogId)
    {
        $this->blogId = $blogId;
    }

}

?>
