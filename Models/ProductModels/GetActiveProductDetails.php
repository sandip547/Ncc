<?php
class GetActiveProductDetails{
    private $product_name;
    private $level;
    private $image;
    private $duration;
    private $price;
    private $enrollment_validity;

    /**
     * @param $product_name
     * @param $level
     * @param $image
     * @param $duration
     * @param $price
     * @param $enrollment_validity
     */
    public function __construct($product_name, $level, $image, $duration, $price, $enrollment_validity)
    {
        $this->product_name = $product_name;
        $this->level = $level;
        $this->image = $image;
        $this->duration = $duration;
        $this->price = $price;
        $this->enrollment_validity = $enrollment_validity;
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
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getEnrollmentValidity()
    {
        return $this->enrollment_validity;
    }

    /**
     * @param mixed $enrollment_validity
     */
    public function setEnrollmentValidity($enrollment_validity)
    {
        $this->enrollment_validity = $enrollment_validity;
    }


}
?>