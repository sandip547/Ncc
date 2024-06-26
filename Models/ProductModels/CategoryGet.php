<?php
class CategoryGet{
    private $category_id;
    private $category_name;
    private $active_status;
    private $entered_date;
    private $entered_by;
    private $updated_date;
    private $updated_by;

    /**
     * @param $category_id
     * @param $category_name
     * @param $active_status
     * @param $entered_date
     * @param $entered_by
     * @param $updated_date
     * @param $updated_by
     */
    public function __construct($category_id=null, $category_name, $active_status, $entered_date, $entered_by, $updated_date=null, $updated_by=1){
        $this->category_id = $category_id;
        $this->category_name = $category_name;
        $this->active_status = $active_status;
        $this->entered_date = $entered_date;
        $this->entered_by = $entered_by;
        $this->updated_date = $updated_date??date("Y-m-d h:i:s");
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
    public function getActiveStatusLabel()
    {
        return $this->active_status==1?"Active":"Inactive";
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
        $date = date_create($this->entered_date);
        return date_format($date,"F d, Y");
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
    public function getEnteredByLabel($staff=null)
    {
        $staffId =$staff??$this->entered_by;
        if($staffId){
            $dbc = new DatabaseConnection();
            $result = $dbc->executePrepareReturn("SELECT fullName FROM staff WHERE staffId = ?","i",array($staffId));
            $row = $result->fetch_assoc();
            return $row['fullName'];
        }
        return null;

    }

    /**
     * @param mixed $entered_by
     */
    public function setEnteredBy($entered_by)
    {
        $this->entered_by = $entered_by;
    }

    /**
     * @return mixed
     */
    public function getUpdatedDate()
    {
        $date = date_create($this->updated_date);
        return date_format($date,"F d, Y");
    }

    /**
     * @param mixed $updated_date
     */
    public function setUpdatedDate($updated_date)
    {
        $this->updated_date = $updated_date;
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