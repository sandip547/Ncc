<?php
class ProductDisplay{
    private $product_name;
    private $level;
    private $image;
    private $duration;
    private $price;

    function __construct($product_name,$level,$image,$duration,$price){
        $this->product_name = $product_name;
        $this->level = $level;
        $this->image = $image;
        $this->duration = $duration;
        $this->price = $price;
    }

    function setProductName($product_name){$this->product_name=$product_name;}
    function getProductName(){return $this->product_name;}

    function setLevel($level){$this->level=$level;}
    function getLevel(){return $this->level;}

    function setImage($image){$this->image=$image;}
    function getImage(){return $this->image;}

    function setDuration($duration){$this->duration=$duration;}
    function getDuration(){return $this->duration;}

    function setPrice($price){$this->price=$price;}
    function getPrice(){return $this->price;}
}
?>