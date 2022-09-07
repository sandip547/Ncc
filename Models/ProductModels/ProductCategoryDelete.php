<?php
class ProductCategoryDelete{
    private $product_cat_id;

    function __construct($product_cat_id){
        $this->product_cat_id = $product_cat_id;
    }

    function setProductCategoryId($product_cat_id){
        $this->product_cat_id = $product_cat_id;
    }

    function getProductCategoryId(){
        return $this->product_cat_id;
    }
}
?>
