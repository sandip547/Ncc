<?php

header("Cache-Control: no cache");
include 'logged_in_header.php';
$ec = new GetEnrollmentDetails();


?>

<!-- User Dashboard -->
<div class="text-justify p-0 m-0 ml-4 course-info">
    <div class="text-justify p-0 m-0" id="dashdash">
        <p class="h5 text-dark font-weight-bold">Dashboard</p>
        <hr class="bg-primary"/>
        <!-- <div class="row d-flex">
        <div class="col-sm-6 col-md-3 bg-secondary rounded-1 px-3 py-2 mx-3">
            <p style="color:rgb(230, 227, 227)" class="h6">Enrolled Courses</p>
            <p class="h1 text-light">0</p>
        </div>
        <div class="col-sm-6 col-md-3 bg-secondary rounded-1 px-3 py-2 mx-3">
            <p style="color:rgb(230, 227, 227)" class="h6">Active Courses</p>
            <p class="h1 text-light">0</p>
        </div>
        <div class="col-sm-6 col-md-3 bg-secondary rounded-1 px-3 py-2 mx-3">
            <p style="color:rgb(230, 227, 227)" class="h6">Completed Courses</p>
            <p class="h1 text-light">0</p>
        </div>
    </div> -->

        <div class="row d-flex course-info">
            <div class="card-body text-light m-3 rounded-3 col-md-auto col-lg-3 col-sm-auto course-card" style="background-color:darkkhaki;">
                <p class="p-0 m-0">Enrolled Courses</p>
                <p class="fs-1 m-0 p-0"><?php echo $ec->getEnrolledCourseCount(new GetStudentUsername($_SESSION['username']));?></p>
            </div>
            <div class="card-body text-light m-3 rounded-3 col-md-auto col-lg-3 col-sm-auto course-card" style="min-height:100%; background-color:coral;">
                <p class="p-0 m-0">Active Courses</p>
                <p class="fs-1 m-0 p-0"><?php echo $ec->getActiveCourseCount(new GetStudentUsername($_SESSION['username']));?></p>
            </div>
            <div class="card-body bg-info text-light m-3 rounded-3 col-md-auto col-lg-3 col-sm-auto course-card" style="min-height:100%;">
                <p class="p-0 m-0">Completed Courses</p>
                <p class="fs-1 m-0 p-0">0</p>
            </div>
        </div>
    </div>
</div>

</main>
</div>
</div>

<?php
include 'footer.php'
?>