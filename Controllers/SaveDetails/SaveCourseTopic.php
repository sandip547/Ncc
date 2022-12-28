<?php

class SaveCourseTopic{
    private $connection;
    function __construct(){
        $this->connection  =  new DatabaseConnection();
    }

    function saveCourseTopic($ct)
    {

        $query = "insert into coursetopic(courseid,srNo,topicName,duration,enteredBy,enteredDate,updatedBy,updateDate) values(?,?,?,?,?,?,?,?)";
        $this->connection->executePrepare($query, "iissisis", array($ct->getCourseId(), $ct->getSrNo(), $ct->getTopicName(), $ct->getDuration(),
            $ct->getEnteredBy(), $ct->getEnteredDate(),$ct->getUpdatedBy(),$ct->getUpdateDate()));

        mysqli_close($this->connection->getConnection());

    }

    function updateCourseTopic($ctu){
        $query = "update coursetopic set duration=?,srNo=?,topicName=?,updatedBy=?,updateDate=? where courseid=? and topicId=? ";
        $this->connection->executePrepare($query,"sisisii",array($ctu->getDuration(), $ctu->getSrNo(),
            $ctu->getTopicName(),$ctu->getUpdatedBy(),$ctu->getUpdatedDate(),$ctu->getCourseId(),$ctu->getTopicId()));
        mysqli_close($this->connection->getConnection());
    }

    function deleteCourseTopic($dct){
        $query = "delete from coursetopic where courseid=? and topicId=?";
        $this->connection->executePrepare($query,"ii",array($dct->getCourseId(), $dct->getTopicId()));
        mysqli_close($this->connection->getConnection());
    }

}
?>