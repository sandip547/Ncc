<?php
require_once("ProductCategoryIu.php");
require_once("../../DatabaseConnection/DatabaseConnection.php");
class ProductCategory{

    private $product_c_iu;
    private $entered_date;
    private $entered_by;


    function __construct($category_name,$active_status,$entered_date,$entered_by){
        $this->product_c_iu = new ProductCategoryIu();
        $this->product_c_iu->setCategoryName($category_name);
        $this->product_c_iu->setActiveStatus($active_status);
        $this->entered_date = $entered_date;
        $this->entered_by = $entered_by;
    }

    function setProductCi($product_c_iu){
        $this->product_c_iu = $product_c_iu;
    }

    function getProductCi(){
        return $this->product_c_iu;
    }

    function setEnteredDate($entered_date){
        $this->entered_date=$entered_date;
    }

    function getEnteredDate(){
        return $this->entered_date;

    }

    function setEnteredBy($entered_by){
        $this->entered_by=$entered_by;
    }

    function getEnteredBy(){
        return $this->entered_by;
    }

}




?>