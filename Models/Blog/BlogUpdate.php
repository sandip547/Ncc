<?php
class BlogUpdate{
    private $blog_ui;
    private $updated_by;
    private $updated_date;

    public function __construct($blog_ui,$updated_by,$updated_date){
        $this->blog_ui = $blog_ui;
        $this->updated_by = $updated_by;
        $this->updated_date = $updated_date;
    }

    function setBlogUi($blog_ui){
        $this->blog_ui = $blog_ui;
    }

    function getBlogUi(){
        return $this->blog_ui;
    }

    function setUpdatedBy($updated_by){
        $this->updated_by = $updated_by;
    }

    function getUpdatedBy(){
        return $this->updated_by;
    }

    function setUpdatedDate($updated_date){
        this->updated_date = $updated_date;
    }

    function getUpdatedDate(){
        return $this->updated_date;
    }
}
?>