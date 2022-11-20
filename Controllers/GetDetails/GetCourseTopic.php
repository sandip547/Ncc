<?php
require_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../../Models/ProductModels/ProductTopicGet.php");
require_once("../../Models/ProductModels/CategoryNameSearch.php");

class GetCourseTopic
{
    private $connection;

    function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    function getCourseTopic()
    {
        $query = "select * from coursetopic";
        $result = $this->connection->executeQuery($query);
        $courseTopic_details = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($courseTopic_details, new ProductTopicGet($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]));
        }
        mysqli_close($this->connection->getConnection());
        return $courseTopic_details;
    }
    function getCourseName($category_name)
    {
        $query = "select category_name from category where categoryName = ?";
        $result = $this->connection->executePrepareReturn($query, "s", array($category_name->getCategoryName()));
        $category_name = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($category_name, new CategoryGet($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]));
        }
        mysqli_close($this->connection->getConnection());
        return $category_name;
    }
}

// $cd = new GetProductCategory();
// $result = $cd->getCategoryName(new CategoryNameSearch("hello"));
// foreach ($result as $value) {
//     print_r($value->getEnteredDate());
// }