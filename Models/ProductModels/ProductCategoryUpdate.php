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



}
?>