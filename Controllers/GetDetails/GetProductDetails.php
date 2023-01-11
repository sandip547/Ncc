<?php
class GetProductDetails
{
    private $connection;
    function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    function getCourseCount(){
        $sql = "SELECT COUNT(courseid) as noOfCourse FROM course";
        $result = $this->connection->executeQuery($sql);
        return mysqli_fetch_row($result)[0];
    }

    function getSearchProduct($name)
    {
        $query = "select * from course where courseName=?";
        $result = $this->connection->executePrepareReturn($query, "s", array($name));
        $product = array();
        if ($result === false) {
            return false;
        } else {
            while ($row = mysqli_fetch_array($result)) {
                array_push($product, new ProductGet($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $this->getStaffName($row[6]), $this->getCategoryName($row[7]), $row[8], $row[9], $row[10], $row[11], $row[12], $row[13], $row[14], $row[15], $row[16], $row[17], $row[18], $row[19]));
            }
        }
        return $product;
    }

    function getSearchDisplayProduct($name)
    {
        $sql = "SELECT courseid,courseName,level,image,duration,price FROM course where courseName LIKE '%$name%' LIMIT 5";
        $result = $this->connection->executeQuery($sql);
        $product_display = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($product_display, new ProductDisplay($row[0], $row[1], $row[2], $row[3], $row[4],$row[5]));
        }
        return $product_display;
    }

    function getCategoryName($id)
    {
        $query = "select categoryName from category where categoryId=?";
        $result = $this->connection->executePrepareReturn($query, "i", array($id));
        return mysqli_fetch_row($result)[0];
    }


    function getStaffName($id)
    {
        $query = "select fullName from staff where staffId=?";
        $result = $this->connection->executePrepareReturn($query, "i", array($id));
        return mysqli_fetch_row($result)[0];
    }

    function getProductDetails()
    {

        $sql = "SELECT * FROM course";
        $result = $this->connection->executeQuery($sql);
        $product = array();
        while ($row = mysqli_fetch_array($result)) {

            array_push($product, new ProductGet($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $this->getStaffName($row[6]), $this->getCategoryName($row[7]), $row[8], $row[9], $row[10], $row[11], $row[12], $row[13], $row[14], $row[15], $row[16], $row[17], $row[18], $row[19]));
        }
        return $product;
    }
    function getProductById($id)
    {
        $sql = "SELECT * FROM course where courseId=?";
        $result = $this->connection->executePrepareReturn($sql, "i", array($id));
        $product = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($product, new ProductGet($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $this->getStaffName($row[6]), $this->getCategoryName($row[7]), $row[8], $row[9], $row[10], $row[11], $row[12], $row[13], $row[14], $row[15], $row[16], $row[17], $row[18], $row[19]));
        }
        return $product!=null?$product[0]:null;
    }

    function getLevel($level)
    {
        $level_name = "";
        if ($level == 0) {
            $level_name = "Beginner";
        } else if ($level == 1) {
            $level_name = "Intermediate";
        } else if ($level == 2) {
            $level_name = "Advance";
        }
        return $level_name;
    }
    function getEnrollmentValidityName($level){
        $level_name = "";
        if ($level == 0) {
            $level_name = "Life Time";
        } else if ($level == 1) {
            $level_name = "3 Months";
        } else if ($level == 2) {
            $level_name = "6 Months";
        } else if ($level == 3){
            $level_name = "12 Months";
        }
        return $level_name;
    }

    function getStatusName($status)
    {
        $active_status = "";
        if ($status == 0) {
            $active_status = "Inactive";
        } else {
            $active_status = "Active";
        }
        return $active_status;
    }



    function getProductDisplayDetailsId($username)
    {
        $gs = new GetStudentDetails();
        $id = $gs->getStudentIdOn(new GetStudentUsername($username));
        $date = date("Y-m-d");
        $sql = "SELECT courseid,courseName,level,image,duration,price from course WHERE course.courseId in(SELECT courseId from enrollment where studentId = ? and status = 1 )";
        $result = $this->connection->executePrepareReturn($sql,"i",array($id));
        $product_display = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($product_display, new ProductDisplay($row[0],$row[1], $this->getLevel($row[2]), $row[3], $row[4], $row[5]));
        }
        return $product_display;
    }

    function getActiveProductDetailsId($username){
        $gs = new GetStudentDetails();
        $date = date("Y-m-d");
        $id = $gs->getStudentIdOn(new GetStudentUsername($username));
        $query = "SELECT courseid,courseName,level,image,duration,price,enrollmentValidity from course WHERE course.courseId in(SELECT courseId from enrollment where studentId = ? and status = 1 and (SELECT DATEDIFF(expirydate,'$date'))>=0 )";
        $result = $this->connection->executePrepareReturn($query,"i",array($id));
        $product_display = array();
        while ($row = mysqli_fetch_array($result)) {
            $sql = "select enrolldate,expiryDate from enrollment where studentId = '$id' and courseid='$row[0]' ";
            $res = $this->connection->executeQuery($sql);
            $datedif = mysqli_fetch_row($res);
            $sqldays = "SELECT DATEDIFF('$datedif[1]','$datedif[0]')";
            $datediffres = $this->connection->executeQuery($sqldays);
            $days_remaining = mysqli_fetch_row($datediffres);
            array_push($product_display, new GetActiveProductDetails($row[0],$row[1],$this->getLevel($row[2]), $row[3], $row[4], $row[5], $days_remaining[0]));
        }
        return $product_display;
    }

    function getProductDisplayDetails()
    {
        $sql = "SELECT courseid,courseName,level,image,duration,price FROM course";
        $result = $this->connection->executeQuery($sql);
        $product_display = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($product_display, new ProductDisplay($row[0],$row[1], $this->getLevel($row[2]), $row[3], $row[4], $row[5]));
        }
        return $product_display;
    }

    function getProductName($product_id)
    {
        $query = "SELECT courseName FROM course WHERE courseID=?";
        $result = $this->connection->executePrepareReturn($query, "i", array($product_id));
        return mysqli_fetch_row($result)[0];
    }

    function getProductTopicDetails()
    {
        $query = "select * from coursetopic";
        $result = $this->connection->executeQuery($query);
        $product_topic = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($product_topic, new ProductTopicGet($row[0], $this->getProductName($row[1]), $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]));
        }
        return $product_topic;
    }
}
//$gc = new GetProductDetails();
//print_r($gc->getActiveProductDetailsId("sandiprock28"));
/*
$res = $gc->getProductTopicDetails();
foreach($res as $value){
    echo $value->getCourseName()." " .$value->getTopicName()." ". $value->getEnteredDate() ;
    break;
}
*/