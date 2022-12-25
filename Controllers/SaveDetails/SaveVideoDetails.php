<?php
class SaveVideoDetails{
    private $connection;
    function __construct(){
        $this->connection = new DatabaseConnection();
    }

    function saveVideoDetail($video){
        $query = "insert into videos (topicId,srNo,link,detail) values (?,?,?,?)";
        $this->connection->executePrepare($query,"iiss",array($video->getTopicId(),$video->getSrNo(),$video->getLinks(),$video->getDetail()));

    }
    function deleteVideoDetails($dv){
        $query = "delete from videos where videoid=? and topicId=?";
        $this->connection->executePrepare($query,"ii",array($dv->getVideoId(), $dv->getTopicId()));
        mysqli_close($this->connection->getConnection());
    }

    function updateVideoDetails($video){
        $query = "update videos set link=?,detail=? where videoid=?";
        $this->connection->executePrepare($query,"ssi",array($video->getLink(),$video->getDetail(),$video->getVideoId()));

    }
}
?>
