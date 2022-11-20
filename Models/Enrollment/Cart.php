<?php
class cart{
    private $product_id;
    private $product_name;
    private $product_price;

    /**
     * @param $product_id
     * @param $product_name
     * @param $product_price
     */
    public function __construct($product_id, $product_name, $product_price)
    {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->product_price = $product_price;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @param mixed $product_name
     */
    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->product_price;
    }

    /**
     * @param mixed $product_price
     */
    public function setProductPrice($product_price)
    {
        $this->product_price = $product_price;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

}
?>