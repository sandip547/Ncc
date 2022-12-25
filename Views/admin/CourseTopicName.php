<?php
require_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../../Models/ProductModels/GetTopicIdName.php");
require_once("../../Controllers/GetDetails/GetCourseTopic.php");
$ct = new GetCourseTopic();
$details = $ct->getCourseTopicName($_REQUEST['course_id']);
if($_REQUEST['course_id']) {
    foreach ($details as $name) {
        echo "<option value=" . $name->getTopicId() . '>' .
            $name->getTopicName() .
            '</option>';
    }
}
else{
    echo "<option value=''></option>";
}
?>