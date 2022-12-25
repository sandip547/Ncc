<?php
class ProductCategoryU{

    private $category_id;
    private $category_name;
    private $active_status;
    private $update_date;
    private $updated_by;

    /**
     * @param $category_id
     * @param $category_name
     * @param $active_status
     * @param $update_date
     * @param $updated_by
     */
    public function __construct($category_id, $category_name, $active_status, $update_date, $updated_by)
    {
        $this->category_id = $category_id;
        $this->category_name = $category_name;
        $this->active_status = $active_status;
        $this->update_date = $update_date;
        $this->updated_by = $updated_by;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->category_name;
    }

    /**
     * @param mixed $category_name
     */
    public function setCategoryName($category_name)
    {
        $this->category_name = $category_name;
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


}
?>