<?php
$ct = new GetCourseTopic();
$cv = new GetVideoDetailsCourse();
$pd = new GetProductDetails();
$details = $ct->getCourseNamesTopicId();
?>
<div class="table-responsive my-5">
    <?php foreach ($details as $det) {

        ?>

    <table class="table table-bordered table-hover table-sm text-normal">
        <thead class="thead-light">

        <?php $topics = $cv->getVideoDetails($det);?>
        <div class="modal-body">

            <div class="table-responsive my-5">
                <table class="table table-bordered table-hover table-sm text-normal">
                    <thead class="thead-light">
                    <tr class="text-center">
                        <th></th>
                        <th></th>
                        <th>Video Id</th>
                        <th>Course Name</th>
                        <th>Topic Id</th>
                        <th>SR No</th>
                        <th>Link</th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($topics as $topic) { ?>
                        <tr>

                            <th class="px-3"><button type="button" class="btn btn-primary" data-toggle="modal"
                                                     data-target="#video<?php echo $topic->getVideoId(); ?>">View</button>
                            </th>
                            <th class="px-3">
                                <a type="button" class="btn btn-primary"
                                   href="video.php?videoid=<?php echo $topic->getVideoId();?>&topicid=<?php echo $topic->getTopicId();?>&delete=10">Delete</a>
                            </th>
                            <th class="px-3"><?php echo $topic->getVideoId(); ?></th>
                            <th class="px-3"><?php echo $pd->getProductName($topic->getCourseId()); ?></th>
                            <th class="px-3"><?php echo $topic->getTopicId(); ?></th>
                            <th class="px-3"><?php echo $topic->getSrNo(); ?></th>
                            <th class="px-3"><?php echo $topic->getLink(); ?></th>
                            <th class="px-3"><?php echo $topic->getDetail();?></th>

                        </tr>
                        <?php

                    }?>
            </div>

        </div>
</div>
</div>

</tbody>
</table>
<?php

}
?>
</div>

<?php foreach ($details as $det) {
    $topics = $cv->getVideoDetails($det);

    foreach ($topics as $topic) {

        ?>
        <div class="modal fade" id="video<?php echo $topic->getVideoId();?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Course details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="video.php" method="post"  enctype="multipart/form-data">
                            <div class="row align-items-center my-2">

                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="courseName" class="form-label">Course Id : </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text"  class="form-control inputcolor fs-6" name="courseId" placeholder="Course name" aria-label="courseName" id="courseId" value=" <?php echo $det;?>" readonly>
                                </div>
                            </div>
                            <div class="row align-items-center my-2">

                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="videoId" class="form-label">Video Id : </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control inputcolor fs-6" name="videoId" placeholder="Topic name" aria-label="videoId" id="videoId" value=" <?php echo $topic->getVideoId();?>" readonly>
                                </div>
                            </div>

                            <div class="row align-items-center my-2">

                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="courseName" class="form-label">Course name : </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control inputcolor fs-6" name="courseName" placeholder="Course name" aria-label="courseName" id="courseName" value="<?php echo $pd->getProductName($topic->getCourseId()); ?> " readonly>
                                </div>
                            </div>


                            <div class="row align-items-center my-2">

                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="SerialNo" class="form-label">SerialNo : </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control inputcolor fs-6" name="serialNo" placeholder="Serial No" aria-label="serialno" id="serialNo" value=" <?php echo $topic->getSrNo();?>" >
                                </div>
                            </div>
                            <div class="row align-items-center my-2">

                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="link" class="form-label">Link : </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text"  class="form-control inputcolor fs-6" name="videoLink" placeholder="Topic name" aria-label="link" id="videoLink" value="<?php echo $topic->getLink(); ?>">
                                </div>
                            </div>

                            <div class="row align-items-center my-2">

                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="videoDetails" class="form-label">Video Details : </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text"  class="form-control inputcolor fs-6" name="videoDetails" placeholder="Video details" aria-label="link" id="videoDetails" value="<?php echo $topic->getDetail(); ?>">
                                </div>
                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updateVideo" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
}
?>