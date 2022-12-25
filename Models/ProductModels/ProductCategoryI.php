<?php
class ProductCategoryI{

    private $category_name;
    private $active_status;
    private $entered_date;
    private $entered_by;

    /**
     * @param $category_name
     * @param $active_status
     * @param $entered_date
     * @param $entered_by
     */
    public function __construct($category_name, $active_status, $entered_date, $entered_by)
    {
        $this->category_name = $category_name;
        $this->active_status = $active_status;
        $this->entered_date = $entered_date;
        $this->entered_by = $entered_by;
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
    public function getEnteredDate()
    {
        return $this->entered_date;
    }

    /**
     * @param mixed $entered_date
     */
    public function setEnteredDate($entered_date)
    {
        $this->entered_date = $entered_date;
    }

    /**
     * @return mixed
     */
    public function getEnteredBy()
    {
        return $this->entered_by;
    }

    /**
     * @param mixed $entered_by
     */
    public function setEnteredBy($entered_by)
    {
        $this->entered_by = $entered_by;
    }


}
?>