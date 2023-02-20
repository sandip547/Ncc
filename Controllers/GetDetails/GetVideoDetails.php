<?php

class GetVideoDetailsCourse
{
    private $connection;

    function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    function getEncodedUrl($link){
        $api_url = "https://api-ssl.bitly.com/v4/bitlinks";
        $token = "a5cb9d5869bf5d0b18decdb3c3ca114381ffcc49";
        $long_url = "$link";

        $ch = curl_init($api_url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(["long_url" => $long_url]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer $token",
            "Content-Type: application/json"
        ]);

        $arr_result = json_decode(curl_exec($ch));
        return $arr_result->link;
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