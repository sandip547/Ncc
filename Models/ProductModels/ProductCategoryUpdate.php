<?php
require_once("ProductCategoryIu.php");
class ProductCategoryUpdate{
    private $product_c_iu;
    private $product_cat_id;
    private $update_date;
    private $updated_by;

    function __construct($product_cat_id,$category_name,$active_status,$update_date,$updated_by){

        $this->product_c_iu = new ProductCategoryIu();
        $this->product_c_iu->setCategoryName($category_name);
        $this->product_cat_id = $product_cat_id;
        $this->update_date = $update_date;
        $this->updated_by = $updated_by;
    }
    function setProductCategoryId($product_cat_id){
        $this->product_cat_id = $product_cat_id;
    }

    public function getProductCategoryId(){
        return $this->product_cat_id;
    }

    function setProductCi($product_c_iu){
        $this->product_c_iu= $product_c_iu;
    }

    function getProductCi(){
        return $this->product_c_iu;
    }

    function setUpdateDate($update_date){
        $this->update_date = $update_date;
    }

    function getUpdateDate(){
        return $this->update_date;
    }

    function setUpdatedBy($updated_by){
        $this->updated_by = $updated_by;
    }

    function getUpdatedBy(){
        return $this->updated_by;
    }
}
?>