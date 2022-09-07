<?php
class BlogUi{
    private $blog_title;
    private $blog_content;
    private $images;

    public function __construct($blog_title,$blog_content,$images){
        $this->blog_title=$blog_title;
        $this->blog_content=$blog_content;
        $this->images=$images;
    }

    function setBlogTitle($title){
        $this->blog_title=$title;
    }

    function getBlogTitle(){
        return $this->blog_title;
    }

    function setBlogContent($content){
        $this->blog_content=$content;
    }

    function getBlogContent(){
        return $this->blog_content;
    }

    function setImages($images){
        $this->images=$images;
    }

    function getImages(){
        return $this->images;
    }
}
?>