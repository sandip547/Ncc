<?php
class DeleteCourseTopic{
    private $courseId;
    private $topicId;

    /**
     * @param $courseId
     * @param $topicId
     */
    public function __construct($courseId, $topicId)
    {
        $this->courseId = $courseId;
        $this->topicId = $topicId;
    }

    /**
     * @return mixed
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * @param mixed $courseId
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;
    }

    /**
     * @return mixed
     */
    public function getTopicId()
    {
        return $this->topicId;
    }

    /**
     * @param mixed $topicId
     */
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;
    }


}
?>