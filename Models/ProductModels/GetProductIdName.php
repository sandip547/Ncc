<?php
class GetProductIdName{
    private $product_id;
    private $product_name;

    /**
     * @param $product_id
     * @param $product_name
     */
    public function __construct($product_id, $product_name)
    {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
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


}
?>