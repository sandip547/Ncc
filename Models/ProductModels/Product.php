<?php
class Product{
    private $product_name;
    private $description;
    private $learning;
    private $requirements;
    private $target_audience;
    private $instructor_id;
    private $category_id;
    private $tag;
    private $level;
    private $duration;
    private $price;
    private $release_date;
    private $entered_date;
    private $entered_by;
    private $update_date;
    private $updated_by;
    private $enrollment_validity;
    private $active_status;
    private $image;

    function __construct($product_name,$description,$learning,$requirements,$target_audience,$instructor_id,$category_id,$tag,$level,$duration,$price,$release_date,$entered_date,$entered_by,$enrollment_validity,$active_status,$image){
        $this->product_name= $product_name;
        $this->description = $description;
        $this->learning = $learning;
        $this->requirements = $requirements;
        $this->target_audience = $target_audience;
        $this->instructor_id = $instructor_id;
        $this->category_id = $category_id;
        $this->tag = $tag;
        $this->level = $level;
        $this->duration = $duration;
        $this->price = $price;
        $this->release_date = $release_date;
        $this->entered_date = $entered_date;
        $this->entered_by = $entered_by;
        $this->enrollment_validity = $enrollment_validity;
        $this->active_status = $active_status;
        $this->image = $image;
    }

    function setProductName($product_name){$this->product_name=$product_name;}
    function getProductName(){return $this->product_name;}

    function setDescription($description){$this->description=$description;}
    function getDescription(){return $this->description;}

    function setLearning($learning){$this->learning=$learning;}
    function getLearning(){return $this->learning;}

    function setRequirements($requirements){$this->requirements=$requirements;}
    function getRequirements(){return $this->requirements;}

    function setTargetAudience($target_audience){$this->target_audience=$target_audience;}
    function getTargetAudience(){return $this->target_audience;}

    function setInstructorId($instructor_id){$this->instructor_id=$instructor_id;}
    function getInstructorId(){return $this->instructor_id;}

    function setCategoryId($category_id){$this->category_id=$category_id;}
    function getCategoryId(){return $this->category_id;}

    function setTag($tag){$this->tag=$tag;}
    function getTag(){return $this->tag;}

    function setLevel($level){$this->level=$level;}
    function getLevel(){return $this->level;}

    function setDuration($duration){$this->duration=$duration;}
    function getDuration(){return $this->duration;}

    function setPrice($price){$this->price=$price;}
    function getPrice(){return $this->price;}

    function setReleaseDate($release_date){$this->release_date=$release_date;}
    function getReleaseDate(){return $this->release_date;}

    function setEnteredDate($entered_date){$this->entered_date=$entered_date;}
    function getEnteredDate(){return $this->entered_date;}

    function setEnteredBy($entered_by){$this->entered_by=$entered_by;}
    function getEnteredBy(){return $this->entered_by;}

    function setEnrollmentValidity($enrollment_validity){$this->enrollment_validity=$enrollment_validity;}
    function getEnrollmentValidity(){return $this->enrollment_validity;}

    function setActiveStatus($active_status){$this->active_status=$active_status;}
    function getActiveStatus(){return $this->active_status;}

    function setImage($image){$this->image=$image;}
    function getImage(){return $this->image;}

}


?>