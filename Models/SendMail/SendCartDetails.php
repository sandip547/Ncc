<?php
class SendCartDetails{


    private $product_name;
    private $product_price;
    private $total;

    /**
     * @param $product_name
     * @param $product_price
     * @param $total
     */
    public function __construct($product_name, $product_price, $total)
    {
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->total = $total;
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
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }


}
?>