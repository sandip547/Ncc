<?php
class ProductUpdateView{

    private $product_name;
    private $description;
    private $learning;
    private $requirements;
    private $target_audience;
    private $instructor_id;
    private $level;
    private $duration;
    private $price;
    private $update_date;
    private $updated_by;
    private $active_status;
    private $product_id;

    /**
     * @param $product_name
     * @param $description
     * @param $learning
     * @param $requirements
     * @param $target_audience
     * @param $instructor_id
     * @param $level
     * @param $duration
     * @param $price
     * @param $update_date
     * @param $updated_by
     * @param $active_status
     * @param $product_id
     */
    public function __construct($product_name, $description, $learning, $requirements, $target_audience, $instructor_id, $level, $duration, $price, $update_date, $updated_by, $active_status, $product_id)
    {
        $this->product_name = $product_name;
        $this->description = $description;
        $this->learning = $learning;
        $this->requirements = $requirements;
        $this->target_audience = $target_audience;
        $this->instructor_id = $instructor_id;
        $this->level = $level;
        $this->duration = $duration;
        $this->price = $price;
        $this->update_date = $update_date;
        $this->updated_by = $updated_by;
        $this->active_status = $active_status;
        $this->product_id = $product_id;
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

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getLearning()
    {
        return $this->learning;
    }

    /**
     * @param mixed $learning
     */
    public function setLearning($learning)
    {
        $this->learning = $learning;
    }

    /**
     * @return mixed
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * @param mixed $requirements
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
    }

    /**
     * @return mixed
     */
    public function getTargetAudience()
    {
        return $this->target_audience;
    }

    /**
     * @param mixed $target_audience
     */
    public function setTargetAudience($target_audience)
    {
        $this->target_audience = $target_audience;
    }

    /**
     * @return mixed
     */
    public function getInstructorId()
    {
        return $this->instructor_id;
    }

    /**
     * @param mixed $instructor_id
     */
    public function setInstructorId($instructor_id)
    {
        $this->instructor_id = $instructor_id;
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
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * @param mixed $update_date
     */
    public function setUpdateDate($update_date)
    {
        $this->update_date = $update_date;
    }

    /**
     * @return mixed
     */
    public function getUpdatedBy()
    {
        return $this->updated_by;
    }

    /**
     * @param mixed $updated_by
     */
    public function setUpdatedBy($updated_by)
    {
        $this->updated_by = $updated_by;
    }

    /**
     * @return mixed
     */
    public function getActiveStatus()
    {
        return $this->active_status;
    }

    /**
     * @param mixed $active_status
     */
    public function setActiveStatus($active_status)
    {
        $this->active_status = $active_status;
    }
}
?>