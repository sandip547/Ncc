<?php
class ProductTopicUpdate{
    private $topi
    private $product_t_iu;
    private $updated_by;
    private $updated_date;

    function __construct($product_t_iu,$updated_date,$updated_date){
        $this->product_t_iu = $product_t_iu;
        $this->updated_by = $updated_by;
        $this->updated_date = $updated_date;
    }

    function setProductTi($product_t_iu){
        $this->product_t_iu = $product_t_iu;
    }

    function getProductTi(){
        return $this->product_t_iu;
    }

    function setUpdatedBy($updated_by){
        $this->updated_by = $updated_by;
    }

    function getUpdatedBy(){
        return $this->updated_by;
    }

    function setUpdatedDate($updated_date){
        $this->updated_date = $updated_date;
    }

    function getUpdatedDate(){
        return $this->updated_date;
    }

}
?>
