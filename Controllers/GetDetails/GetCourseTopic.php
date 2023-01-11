<?php

//require_once("../../Models/ProductModels/GetProductIdName.php");
//require_once("../../Models/ProductModels/CategoryNameSearch.php");*/

class GetCourseTopic
{
    private $connection;

    function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    public function getCourseTopicCount($courseId)
    {
        $query = "SELECT COUNT(courseId) as co FROM coursetopic WHERE courseId=?";
        $result = $this->connection->executePrepareReturn($query,"i", array($courseId));
        return mysqli_fetch_row($result)[0];
    }

    function getCourseTotalDuration($courseId){
        $query = "SELECT  SEC_TO_TIME( SUM( TIME_TO_SEC( `duration` ) ) ) AS timeSum  
        FROM coursetopic WHERE courseId=?";
        $result = $this->connection->executePrepareReturn($query,"i", array($courseId));
        return mysqli_fetch_row($result)[0];
    }
    function getCourseTopics($id)
    {
        $query = "select * from coursetopic where courseid = '$id' ";
        $result = $this->connection->executeQuery($query);
        $courseTopic_details = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($courseTopic_details, new ProductTopicGet($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]));
        }

        return $courseTopic_details;
    }
    function getCourseTopicName($courseid){
        $query = "select topicid,topicName from coursetopic where courseid = '$courseid'";
        $result = $this->connection->executeQuery($query);
        $topicName = array();
        while ($row = mysqli_fetch_array($result)){
            array_push($topicName,new GetTopicIdName($row[0],$row[1]));
        }
        return $topicName;
    }

    function getCourseTopicNameReview($courseid){
        $query = "select topicid,topicName,duration from coursetopic where courseid = '$courseid'";
        $result = $this->connection->executeQuery($query);
        $topicReviewName = array();
        while ($row = mysqli_fetch_array($result)){
            array_push($topicReviewName,new GetTopicReview($row[0],$row[1],$row[2]));
        }
        return $topicReviewName;
    }

    function getCourseNames(){
        $query = "select courseid,courseName from course";
        $result = $this->connection->executeQuery($query);
        $courseName = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($courseName, new GetProductIdName($row[0],$row[1]));
        }

        return $courseName;
    }

    function getCourseNamesTopicId(){
        $query = "select distinct courseid from course";
        $result = $this->connection->executeQuery($query);
        $courseName = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($courseName, $row[0]);
        }

        return $courseName;
    }
    function getCourseName($category_name)
    {
        $query = "select category_name from category where categoryName = ?";
        $result = $this->connection->executePrepareReturn($query, "s", array($category_name->getCategoryName()));
        $category_name = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($category_name, new CategoryGet($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]));
        }

        return $category_name;
    }
}

// $cd = new GetProductCategory();
// $result = $cd->getCategoryName(new CategoryNameSearch("hello"));
// foreach ($result as $value) {
//     print_r($value->getEnteredDate());
// }

