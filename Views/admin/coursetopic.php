<?php

use Cassandra\Date;


$page = 'coursetopic';
include 'admin header.php';
require_once("../../Models/ProductModels/GetProductIdName.php");
require_once("../../Models/ProductModels/DeleteCourseTopic.php");
require_once("../../Models/ProductModels/ProductTopicUpdate.php");
require_once("../../Models/ProductModels/ProductTopicGet.php");
require_once("../../Models/ProductModels/SaveProductTopic.php");
require_once("../../Controllers/GetDetails/GetCourseTopic.php");
require_once("../../Controllers/SaveDetails/SaveCourseTopic.php");
require_once("../../Controllers/GetDetails/GetTeacherUser.php");
require_once("../../Controllers/GetDetails/GetProductDetails.php");
require_once("../Notification/Notification.php");
$spt =  new SaveCourseTopic();
$notify = new Notification();
if(isset($_POST['addTopic'])){
    $tu = new GetTeacherUser();
    $spt->saveCourseTopic(new SaveProductTopic($_POST['coursename'], $_POST['snumber'], $_POST['tname'],$_POST['cduration'],
        $tu->getStaffId($_SESSION['admin']),date("Y-m-d h:i:s"),NULL,NULL));
    $notify->AddSuccess();
}

if(isset($_POST['updateProduct'])){
    $tu = new GetTeacherUser();
    $spt->updateCourseTopic(new ProductTopicUpdate($_POST['courseId'],$_POST['topicId'], $_POST['course_duration'], $_POST['serialNo'], $_POST['topicName'],$tu->getStaffId($_SESSION['admin']),date("Y-m-d h:i:s")));
    $notify->alertUpdateSuccess();
}

if(isset($_GET['delete'])){
    $spt->deleteCourseTopic(new DeleteCourseTopic($_GET['courseid'], $_GET['topicid']));
    $notify->alertDeleteSuccess();
}
?>

<!-- coursetopic page-->
<div class="text-justify p-0 m-0 ml-4">

    <div class="col-11 col-md-11 text-justify p-0 m-0">
        <p class="h5 text-dark font-weight-bold">Course Topics</p>
        <div class="row d-flex">
            <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active custom-h-tab text-dark" id="view-tab" data-toggle="tab"
                        href="#viewcoursetopic" role="tab" aria-controls="viewcoursetopic" aria-selected="true">View
                        course topic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="add-tab" data-toggle="tab" href="#addcoursetopic"
                        role="tab" aria-controls="addcoursetopic" aria-selected="true">Add course topic</a>
                </li>


            </ul>
            <div class="clearfix tab-content">
                <div class="tab-pane active" id="viewcoursetopic" role="tabpanel" aria-labelledby="view-tab">
                    <div class="my-4">
                        <?php
                        include 'coursetopic/viewcoursetopic.php';
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="addcoursetopic" role="tabpanel" aria-labelledby="add-tab">
                    <div class="my-4">
                        <?php
                        include 'coursetopic/addcoursetopic.php';
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>


        </div>
    </div>
</div>
</div>

</main>

<?php
include 'footer.php'
?>