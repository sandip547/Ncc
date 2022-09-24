<?php
class ProductGet{
    private $product_id;
    private $product_name;
    private $description;
    private $learning;
    private $requirements;
    private $target_audience;
    private $instructor_name;
    private $category_name;
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

    function __construct($product_id,$product_name,$description,$learning,$requirements,$target_audience,$instructor_name,$category_name,$tag,$level,$duration,$price,$release_date,$entered_date,$entered_by,$update_date,$updated_by,$enrollment_validity,$active_status,$image){
        $this->product_id = $product_id;
        $this->product_name= $product_name;
        $this->description = $description;
        $this->learning = $learning;
        $this->requirements = $requirements;
        $this->target_audience = $target_audience;
        $this->instructor_name = $instructor_name;
        $this->category_name = $category_name;
        $this->tag = $tag;
        $this->level = $level;
        $this->duration = $duration;
        $this->price = $price;
        $this->release_date = $release_date;
        $this->entered_date = $entered_date;
        $this->update_date = $update_date;
        $this->updated_by = $updated_by;
        $this->entered_by = $entered_by;
        $this->enrollment_validity = $enrollment_validity;
        $this->active_status = $active_status;
        $this->image = $image;
    }
    function setProductId($product_id){$this->product_id=$product_id;}
    function getProductId(){return $this->product_id;}

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

    function setInstructorName($instructor_name){$this->instructor_name=$instructor_name;}
    function getInstructorName(){return $this->instructor_name;}

    function setCategoryName($category_name){$this->category_name=$category_name;}
    function getCategoryName(){return $this->category_name;}

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

    function setUpdateDate($update_date){$this->update_date=$update_date;}
    function getUpdateDate(){return $this->update_date;}

    function setUpdatedBy($updated_by){$this->updated_by=$updated_by;}
    function getUpdatedBy(){return $this->updated_by;}

    function setEnrollmentValidity($enrollment_validity){$this->enrollment_validity=$enrollment_validity;}
    function getEnrollmentValidity(){return $this->enrollment_validity;}

    function setActiveStatus($active_status){$this->active_status=$active_status;}
    function getActiveStatus(){return $this->active_status;}

    function setImage($image){$this->image=$image;}
    function getImage(){return $this->image;}

}


?>