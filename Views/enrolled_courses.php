<?php
$page = 'enrolled_courses';
include 'logged_in_header.php';
require_once("../Models/ProductModels/ProductDisplay.php");
require_once("../Models/ProductModels/GetActiveProductDetails.php");
$gc = new GetProductDetails();
?>

<!-- User Enrolled courses page-->
<div class="text-justify p-0 m-0 ml-4 course-info">

    <div class="col-9 col-sm-7 col-md-9 text-justify p-0 m-0">
        <p class="h5 text-dark font-weight-bold">Enrolled Courses</p>
        <div class="row d-flex">
            <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active custom-h-tab text-dark" id="all-courses-tab" data-toggle="tab" href="#allcourses" role="tab" aria-controls="allcourses" aria-selected="true">All Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="active-courses-tab" data-toggle="tab" href="#activecourses" role="tab" aria-controls="activecourses" aria-selected="false">Active Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="completed-courses-tab" data-toggle="tab" href="#completedcourses" role="tab" aria-controls="completedcourses" aria-selected="false">Completed Courses</a>
                </li>
            </ul>
            <div class="clearfix tab-content">
                <div class="tab-pane active" id="allcourses" role="tabpanel" aria-labelledby="all-courses-tab">

                    <!-- <div class="row d-flex course-info">
                        <div class="card-body text-light m-3 rounded-3 col-md-auto col-lg-3 col-sm-auto course-card" style="background-color:darkkhaki;">
                            <p class="p-0 m-0">Enrolled Courses</p>
                            <p class="fs-1 m-0 p-0">0</p>
                        </div>
                        <div class="card-body text-light m-3 rounded-3 col-md-auto col-lg-3 col-sm-auto course-card" style="min-height:100%; background-color:coral;">
                            <p class="p-0 m-0">Active Courses</p>
                            <p class="fs-1 m-0 p-0">0</p>
                        </div>
                        <div class="card-body bg-info text-light m-3 rounded-3 col-md-auto col-lg-3 col-sm-auto course-card" style="min-height:100%;">
                            <p class="p-0 m-0">Completed Courses</p>
                            <p class="fs-1 m-0 p-0">0</p>
                        </div>
                    </div> -->
                    <div class="d-flex flex-wrap my-5">
                        <?php
                        $getDetails = $gc->getProductDisplayDetailsId($_SESSION["username"]);
                        foreach ($getDetails as $p_details){
                        ?>

                        <div style="width:300px" class="mx-3 my-2">
                            <div class="px-2 ftco-animate border">
                                <div class="" style="transform: translate(0%, -3%);">
                                    <div>
                                        <div class="d-flex justify-content-between px-3" style="bottom:100%; transform: translate(0%, 150%);">
                                            <div class="bg-primary text-light p-1 rounded-1"><?php echo $p_details->getLevel(); ?></div>
                                            <i class="bi bi-bookmark"></i>
                                        </div>
                                        <img src="<?php echo $p_details->getImage(); ?>" alt="" class="img-fluid">
                                    </div>
                                    <i class="bi bi-star text-warning"></i>
                                    <i class="bi bi-star text-warning"></i>
                                    <i class="bi bi-star text-warning"></i>
                                    <i class="bi bi-star text-warning"></i>
                                    <i class="bi bi-star text-warning"></i>
                                    <p class="fs-5"><a href="#"><?php echo $p_details->getProductName(); ?></a></p>
                                    <p> <i class="bi bi-person"></i> <?php echo $p_details->getDuration(); ?></p>
                                    <p> <span class="rounded-circle p-1 bg-primary text-light"> NCC</span> by Ncc Engineering</p>

                                    <hr class="bg-primary" />
                                    <div class="fw-bold d-flex justify-content-between">
                                        <div>NPR <?php echo $p_details->getPrice(); ?></div>
                                        <div> <a href=""><i class="bi bi-cart3"></i> Enroll</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php
                        }
                            ?>
                    </div>

                </div>
                <div class="tab-pane" id="activecourses" role="tabpanel" aria-labelledby="active-courses-tab">

                    <div class="d-flex flex-wrap my-5">
                        <?php
                        $getDetails = $gc->getActiveProductDetailsId($_SESSION["username"]);
                        foreach ($getDetails as $p_details){
                            ?>

                            <div style="width:300px" class="mx-3 my-2">
                                <div class="px-2 ftco-animate border">
                                    <div class="" style="transform: translate(0%, -3%);">
                                        <div>
                                            <div class="d-flex justify-content-between px-3" style="bottom:100%; transform: translate(0%, 150%);">
                                                <div class="bg-primary text-light p-1 rounded-1"><?php echo $p_details->getLevel(); ?></div>
                                                <i class="bi bi-bookmark"></i>
                                            </div>
                                            <img src="<?php echo $p_details->getImage(); ?>" alt="" class="img-fluid">
                                        </div>
                                        <i class="bi bi-star text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                        <p class="fs-5"><a href="#"><?php echo $p_details->getProductName(); ?></a></p>
                                        <p> <i class="bi bi-person"></i> <?php echo $p_details->getDuration(); ?></p>
                                        <p> <span class="rounded-circle p-1 bg-primary text-light"> NCC</span> by Ncc Engineering</p>

                                        <hr class="bg-primary" />
                                        <div class="fw-bold d-flex justify-content-between">

                                            <div> Days Remaining: <?php echo $p_details->getEnrollmentValidity(); ?></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <hr class="bg-primary">
                </div>
                <div class="tab-pane" id="completedcourses" role="tabpanel" aria-labelledby="completed-courses-tab">
                <div class="my-4">
                        You have no completed courses.
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
include 'footer.php'
?>