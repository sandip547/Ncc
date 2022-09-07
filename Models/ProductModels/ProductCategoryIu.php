<?php
class ProductCategoryIu{
     private $category_name;
     private $active_status;



    function setCategoryName($category_name){
        $this->category_name = $category_name;
    }

    function getCategoryName(){
        return $this->category_name;
    }

    function setActiveStatus($active_status){
        $this->active_status = $active_status;
    }

    function getActiveStatus(){
        return $this->active_status;
    }


}

?>