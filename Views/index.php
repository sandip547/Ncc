<?php

require_once("../DatabaseConnection/DatabaseConnection.php");
require_once("../Models/ProductModels/ProductGet.php");
require_once("../Controllers/GetDetails/GetProductDetails.php");
$pd = new GetProductDetails();
$details = $pd->getProductDetails();

include "header.php";
?>

<!-- Home page -->
<div class="m-0 p-0">
    <div class="text-center" id="index_bg">
        <div>
            <!-- <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fHN0dWR5fGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" class=" w-100 bg-image " style="z-index: 0; position: relative;"> -->
            <p class="fw-bold pt-5 position-relative text-light fs-1">Best Civil Engineering Practical <br> Courses in
                the World</p>
            <p class="text-light">Learn from Highly Experience and Knowledgeable Civil Engineering Industry Leaders</p>
            <button class="btn btn-primary hover-orangered rounded-pill py-2 px-3 mt-5 mb-5">GET STARTED</button>
        </div>
    </div>
</div>
<div class=" m-0 p-0 text-center">
    <p style="font-size: 24px;" class="text-md-center text-lg-center pt-5 ">Explore a variety of quality<span
            style="color:#535967;"> Civil Engineering courses</span> and gain <span style="color:#535967">new skills
        </span> to head start a <span style="color:#535967"> <br> successful career </span> </p>
</div>
<!-- <div class="container"> -->
<div class="col-md-10 m-auto">
    <div class="row boxes">
        <?php foreach ($details as $det) { ?>
        <div class="px-2 ftco-animate">

            <img src="Views/<?php echo $det->getImage(); ?>" alt="" class="img-fluid">
            <i class="bi bi-star text-warning"></i>
            <i class="bi bi-star text-warning"></i>
            <i class="bi bi-star text-warning"></i>
            <i class="bi bi-star text-warning"></i>
            <i class="bi bi-star text-warning"></i>

            <p class="fs-5"><a href='course_review_page.php?course_id= <?php echo $det->getProductId(); ?>'><?php echo $det->getProductName(); ?></a></p>
            <p> <i class="bi bi-person"></i> 6 <i class="bi bi-clock"></i> <?php echo $det->getDuration(); ?></p>
            <p> <span class="rounded-circle p-1 bg-primary text-light"> <?php echo $det->getFirstLettersFromName(); ?></span> by <?php echo $det->getEnteredByLabel(); ?></p>
            <div class="fw-bold d-flex justify-content-between">
                <div>NPR <?php echo $det->getPrice(); ?></div>
                <div> <a href=""><i class="bi bi-cart3"></i> Enroll</a></div>
            </div>
        </div>
        <?php
        }
        ?>

    </div>

    <div class="text-center m-5">
        <a class="rounded-pill text-white btn btn-primary py-3 px-4 mt-4" href="all_course">VIEW ALL COURSES</a>
    </div>

    <div>
        <p class="text-center mt-4 fs-1 text-blue-shade"> Membership </p>
    </div>
    <div>
        <div class="row d-flex flex-wrap justify-content-center align-items-center text-center">
            <div class="col-lg-6 col-md-6 col-sm-10 my-3 ftco-animate">
                <div class="bg-primary text-light text-center p-1">
                    <!-- <div class=""> -->
                    <h3 class="text-light">6 Monthly Membership</h3>
                    Best plan for you
                    <!-- </div> -->
                </div>
                <div class="d-flex justify-content-center bg-warning">
                    <div class="bg-white rounded-circle m-2" style="width: 50px; height: 50px;">
                        <i class="bi bi-star" style="color: black; font-size: 28px;"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <p style="font-family:'Taviraj';"><span style="font-size: 18px; color: #535967;">Npr</span> <span
                            style="font-size: 32px; color: #535967;">35000 </span> <span
                            style="font-size: 20px; color: black;"><sub>/ 6 Month</sub></span></p>
                    <p> <i class="bi bi-check text-success"></i> 6 month membership</p>
                    <p><i class="bi bi-check text-success"></i> Access to all Courses</p>
                    <p><i class="bi bi-check text-success"></i> Live course and New Course</p>
                    <button class="btn btn-primary mt-3 px-5 py-3">Buy Now</button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10 my-3 ftco-animate">
                <div class="bg-primary text-light text-center p-1">
                    <!-- <div class=""> -->
                    <h3 class="text-light">1 Year Membership</h3>
                    Best plan for you
                    <!-- </div> -->
                </div>
                <div class="d-flex justify-content-center bg-warning">
                    <div class="bg-white rounded-circle m-2" style="width: 50px; height: 50px;">
                        <i class="bi bi-star" style="color: black; font-size: 28px;"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <p style="font-family:'Taviraj';"><span style="font-size: 18px; color: #535967;">Npr</span> <span
                            style="font-size: 32px; color: #535967;">50000 </span> <span
                            style="font-size: 20px; color: black;"><sub>/ 1 Year</sub></span></p>
                    <p> <i class="bi bi-check text-success"></i> One Year membership</p>
                    <p><i class="bi bi-check text-success"></i> Access to all Courses</p>
                    <p><i class="bi bi-check text-success"></i> Live course and New Course</p>
                    <button class="btn btn-primary mt-3 px-5 py-3 ">Buy Now</button>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
</div>
<br><br>
<?php
include 'footer.php'
?>