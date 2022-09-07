<?php
class Blog{
    private $blog_ui;
    private $entered_by;
    private $entered_date;

    public function __construct($blog_ui,$entered_by,$entered_date){
        $this->blog_ui = $blog_ui;
        $this->entered_by = $entered_by;
        $this->entered_date = $entered_date;
    }

     function setBlogUi($blog_ui){
            $this->blog_ui = $blog_ui;
        }

     function getBlogUi(){
            return $this->blog_ui;
       }

     function setEnteredBy($entered_by){
        $this->entered_by = $entered_by;
     }

     function getEnteredBy(){
        return $this->entered_by;
     }

     function setEnteredDate($entered_date){
        this->entered_date = $entered_date;
     }

     function getEnteredDate(){
        return $this->entered_date;
     }
}
?>