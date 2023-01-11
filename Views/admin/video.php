<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<?php
$page = 'video';
include 'admin header.php';
require_once("../../Models/ProductModels/GetProductIdName.php");
require_once("../../Models/ProductModels/ProductTopicGet.php");
require_once("../../Models/Videos/GetVideoDetails.php");
require_once("../../Models/Videos/DeleteVideoDetails.php");
require_once("../../Models/Videos/VideoDetails.php");
require_once("../../Models/Videos/VideoUpdate.php");
require_once("../../Controllers/GetDetails/GetProductDetails.php");
require_once("../../Controllers/GetDetails/GetVideoDetails.php");
require_once("../../Controllers/GetDetails/GetCourseTopic.php");
require_once("../../Controllers/SaveDetails/SaveVideoDetails.php");
require_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../Notification/Notification.php");
$notify = new Notification();
$sv = new SaveVideoDetails();
if(isset($_POST['addVideo'])){

    $gd =new GetVideoDetailsCourse();
    $sv->saveVideoDetail(new VideoDetails($_POST['course_topic'],$gd->getVideoSerialNo($_POST['course_topic']),$_POST['vlink'],$_POST['vdetails']));
    $notify->AddSuccess();

}
if(isset($_POST['updateVideo'])){
    $sv->updateVideoDetails(new VideoUpdate($_POST['videoLink'],$_POST['videoDetails'],$_POST['videoId']));
    $notify->alertUpdateSuccess();
}
if(isset($_GET['delete'])){
    $sv->deleteVideoDetails(new DeleteVideoDetails($_GET['videoid'], $_GET['topicid']));
    $notify->alertDeleteSuccess();
}
?>

<!-- video page-->
<div class="text-justify p-0 m-0 ml-4">

    <div class="col-11 col-md-11 text-justify p-0 m-0">
        <p class="h5 text-dark font-weight-bold">Video According to Course Topics</p>
        <div class="row d-flex">
            <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
            <li class="nav-item">
                    <a class="nav-link active custom-h-tab text-dark" id="view-tab" data-toggle="tab" href="#viewvideo" role="tab" aria-controls="viewvideo" aria-selected="true">View video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="add-tab" data-toggle="tab" href="#addvideo" role="tab" aria-controls="addvideo" aria-selected="true">Add video</a>
                </li>

            </ul>
            <div class="clearfix tab-content">
            <div class="tab-pane active" id="viewvideo" role="tabpanel" aria-labelledby="view-tab">
                    <div class="my-4">
                        <?php
                        include 'video/viewvideo.php';
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="addvideo" role="tabpanel" aria-labelledby="add-tab">
                    <div class="my-4">
                        <?php
                        include 'video/addvideo.php';
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>

                    <hr class="bg-primary">
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</main>
</div>
</div>

<?php
include 'footer.php';
?>