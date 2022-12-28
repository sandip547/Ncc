<?php
$ct = new GetCourseTopic();
$pd = new GetProductDetails();
$tu = new GetTeacherUser();
$details = $ct->getCourseNamesTopicId();
?>


<p class="h5 text-dark font-weight-bold">Course Topics</p>
<div class="table-responsive my-5">
    <?php foreach ($details as $det) { ?>
    <table class="table table-bordered table-hover table-sm text-normal">
        <thead class="thead-light">
            <tr class="text-center">
                <th>Course Id</th>
                <th>Course Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th  class="px-3" align="center" ><?php echo $det; ?></th>
                <th  class="px-3" align="center"><?php echo $pd->getProductName($det); ?></th>
            </tr>
                            <?php $topics = $ct->getCourseTopics($det);?>
                            <div class="modal-body">

                                <div class="table-responsive my-5">
                                    <table class="table table-bordered table-hover table-sm text-normal">
                                        <thead class="thead-light">
                                        <tr class="text-center">
                                            <th></th>
                                            <th></th>
                                            <th>Course Topic Id</th>
                                            <th>Course Name</th>
                                            <th>SR No</th>
                                            <th>Topic Name</th>
                                            <th>Duration</th>
                                            <th>Entered By</th>
                                            <th>Entered Date</th>
                                            <th>Updated Date</th>
                                            <th>Update By</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($topics as $topic) { ?>
                                        <tr>

                                            <th class="px-3"><button type="button" class="btn btn-primary" data-toggle="modal"
                                                                     data-target="#course<?php echo $topic->getTopicId(); ?>">View</button>

                                            </th>
                                            <th class="px-3">
                                            <a type="button" class="btn btn-primary"
                                               href="coursetopic.php?topicid=<?php echo $topic->getTopicId();?>&courseid=<?php echo $det;?>&delete=10">Delete</a>
                                            </th>
                                            <th class="px-3"><?php echo $topic->getTopicId(); ?></th>
                                            <th class="px-3"><?php echo $pd->getProductName($topic->getCourseName()); ?></th>
                                            <th class="px-3"><?php echo $topic->getSrNo(); ?></th>
                                            <th class="px-3"><?php echo $topic->getTopicName(); ?></th>
                                            <th class="px-3"><?php echo $topic->getDuration();?></th>
                                            <th class="px-3"><?php echo $tu->getStaffName($topic->getEnteredBy()); ?></th>
                                            <th class="px-3"><?php echo $topic->getEnteredDate(); ?></th>
                                            <th class="px-3"><?php echo $topic->getUpdatedDate();?></th>
                                            <th class="px-3"><?php echo $topic->getUpdatedBy(); ?></th>

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
    $topics = $ct->getCourseTopics($det);
    foreach ($topics as $topic) {

    ?>
<div class="modal fade" id="course<?php echo $topic->getTopicId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Course details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="coursetopic.php" method="post"  enctype="multipart/form-data">
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
                            <label for="topicName" class="form-label">Topic Id : </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control inputcolor fs-6" name="topicId" placeholder="Topic name" aria-label="topicId" id="topicId" value=" <?php echo $topic->getTopicId();?>" readonly>
                        </div>
                    </div>

                    <div class="row align-items-center my-2">

                        <div class="col-md-5 text-orangered font-weight-bold fs-6">
                            <label for="courseName" class="form-label">Course name : </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control inputcolor fs-6" name="courseName" placeholder="Course name" aria-label="courseName" id="courseName" value="<?php echo $pd->getProductName($topic->getCourseName()); ?>" readonly>
                        </div>
                    </div>

                    <div class="row align-items-center my-2">
                        <div class="col-md-5 text-orangered font-weight-bold fs-6">
                            <label for="duration" class="form-label ">Duration : </label>
                        </div>
                        <div class="col-md-7">
                            <div id="time-span" class="form-control inputcolor fs-6 align-items-center d-flex">
                                <input type="text" name="course_duration" class="form-control inputcolor fs-6" value="<?php echo $topic->getDuration();?>" placeholder="hour:min:sec" />

                            </div>
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
                            <label for="topicName" class="form-label">Topic Name : </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text"  class="form-control inputcolor fs-6" name="topicName" placeholder="Topic name" aria-label="courseName" id="topicName" value="<?php echo $topic->getTopicName(); ?>">
                        </div>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="updateProduct" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php
    }
}
?>

<nav aria-label="Page navigation example" class="">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link text-primary" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link text-primary" href="#">1</a></li>
        <li class="page-item"><a class="page-link text-primary" href="#">2</a></li>
        <li class="page-item"><a class="page-link text-primary" href="#">3</a></li>
        <li class="page-item"><a class="page-link text-primary" href="#">4</a></li>
        <li class="page-item"><a class="page-link text-primary" href="#">5</a></li>
        <li class="page-item">
            <a class="page-link text-primary" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>

