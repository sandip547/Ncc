<?php

class GetVideoDetailsCourse
{
    private $connection;

    function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    function getTopicId($courseId)
    {
        $query = "SELECT videos.videoId,videos.topicId,videos.srNo,videos.link,videos.detail FROM `videos` INNER JOIN
coursetopic WHERE coursetopic.topicId=videos.topicId and coursetopic.courseId=?";
        $result = $this->connection->executePrepareReturn($query, "i", array($courseId));

    }
    function getVideoReview($topicId){
        $query = "SELECT topicId,link,detail FROM `videos` WHERE topicid=?";
        $result = $this->connection->executePrepareReturn($query, "i", array($topicId));
        return mysqli_fetch_row($result);
    }

    function getVideoDetails($ci)
    {
        $query = "SELECT videos.videoId,videos.topicId,videos.srNo,videos.link,videos.detail FROM videos
                 INNER JOIN coursetopic WHERE coursetopic.topicId=videos.topicId and coursetopic.courseId=?";
        $result = $this->connection->executePrepareReturn($query, "i", array($ci));
        $videodetails = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($videodetails, new GetVideoDetails($row[0], $row[1], $row[2], $row[3], $row[4],$ci));
        }
        return $videodetails;
    }

    function getVideoSerialNo($topicid){
        $query = "SELECT srNo from coursetopic where topicId=?";
        $result = $this->connection->executePrepareReturn($query,"i",array($topicid));
        return mysqli_fetch_array($result)[0];
    }

}


?>