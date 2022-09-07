<?php
class ProductTopic{
    private $product_t_iu;
    private $entered_by;
    private $entered_date;

    function __construct($product_t_iu,$entered_date,$entered_date){
        $this->product_t_iu = $product_t_iu;
        $this->entered_by = $entered_by;
        $this->entered_date = $entered_date;
    }

    function setProductTi($product_t_iu){
        $this->product_t_iu = $product_t_iu;
    }

    function getProductTi(){
        return $this->product_t_iu;
    }

    function setEnteredBy($entered_by){
        $this->entered_by = $entered_by;
    }

    function getEnteredBy(){
        return $this->entered_by;
    }

    function setEnteredDate($entered_date){
        $this->entered_date = $entered_date;
    }

    function getEnteredDate(){
        return $this->entered_date;
    }


}
?>