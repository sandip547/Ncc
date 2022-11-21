<?php

// if($logged_id){
// include 'logged_in_header.php';
// }
// else{
require_once("../Models/ProductModels/ProductDisplay.php");
require_once("../Controllers/GetDetails/GetProductDetails.php");
// require_once("../DatabaseConnection/DatabaseConnection.php");
include 'header.php';
// }


// require_once("../Controllers/GetDetails/GetStudentDetails.php");
require_once("../Models/ProductModels/ProductDisplay.php");
require_once("../Models/RegistrationModels/GetStudentUsername.php");
require_once("../Models/ProductModels/GetActiveProductDetails.php");
require_once("../Models/ProductModels/ProductGet.php");

$course_id = isset($_GET['course_id']) ? $_GET['course_id'] : die('Could not find course ID.');
$pd = new GetProductDetails();
$det=$pd->getProductById($course_id)!=null?$pd->getProductById($course_id):die('Could not find course details.');

?>
<!-- Course Review Paeg -->
<!-- Design for Page when clicked in any course -->
<div class="col-md-10 mx-auto mt-5 pt-5">
    <div class="d-flex flex-wrap mb-5 pb-5">

        <div class="row col-md-8" id="course-left">
            <div>
                <i class="bi bi-star text-warning"></i>
                <i class="bi bi-star text-warning"></i>
                <i class="bi bi-star text-warning"></i>
                <i class="bi bi-star text-warning"></i>
                <i class="bi bi-star text-warning"></i>
                <span>0</span><span class="text-primary">(0)</span>
            </div>
            <h1 class="text-blue-shade"><?php echo $det->getProductName(); ?></h1>
            <div style="font-size: 14px;">
                <div>
                    <div class="d-flex flex-wrap">
                        <div> <span class="rounded-circle p-1 bg-primary text-light"> <?php echo $det->getFirstLettersFromName(); ?></span> by <span class="text-primary"><?php echo $det->getEnteredByLabel(); ?></span></div>
                        <div class="mx-3">
                            Course Level: <span class="text-primary"><?php echo $det->getLevelLabel(); ?></span>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-end align-items-center text-primary">
                    <span class="mx-2">Share: </span>
                    <i class="bi bi-facebook fs-4 mx-2"></i>
                    <i class="bi bi-twitter fs-4 mx-2"></i>
                    <i class="bi bi-linkedin fs-4 mx-2"></i>
                    <i class="icon-tumblr fs-4 mx-2"></i>
                </div>
                <hr class="bg-primary" />
                <div class="d-flex flex-wrap justify-content-between">
                    <div>
                        <div class="text-primary">
                            Categories
                        </div>
                        <div>
                            Civil Engineering
                        </div>
                    </div>
                    <div>
                        <div class="text-primary">
                            Duration
                        </div>
                        <div>
                            <?php echo $det->getDuration(); ?>h
                        </div>
                    </div>
                    <div>
                        <div class="text-primary">
                            Total Enrolled
                        </div>
                        <div>
                            6
                        </div>
                    </div>
                    <div>
                        <div class="text-primary">
                            Last Update
                        </div>
                        <div>
                            <?php echo $det->getUpdateDate(); ?>
                        </div>
                    </div>
                </div>

                <hr class="bg-primary" />
                <div id="course-description">
                    <h5 class="mt-5">Description</h5>
                    <!-- <p class="text-blue-shade">
                        <span class="fw-bold">Prestressed concrete</span> is a form of concrete used in construction. It is substantially “prestressed” (compressed) during production, in a manner that strengthens it against tensile forces which will exist when in service.
                    </p> -->
                    <p class="text-blue-shade">
                    <?php echo $det->getDescription(); ?>
                    </p>
                </div>
                <div class="inputcolor p-4 mt-5">
                    <h5>What will I Learn?</h5>
                    <div class="d-flex flex-wrap">
                        <div class="p-2"><i class="bi bi-check text-primary fs-5"></i> <span class="text-blue-shade">Learn Prestress bridge design as per latest IRC codes using Excel</span></div>
                        <div class="p-2"><i class="bi bi-check text-primary fs-5"></i><span class="text-blue-shade">Earn recognized credit and certificate</span></div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-between mt-5">
                <h5>Topics for this course</h5>
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="mx-3">4 Lessons</div>
                    <div class="ml-3">12h</div>
                </div>
            </div>
            <div>
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                            1) Introduction to Prestressed Bridge Superstructure
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content d-flex justify-content-between">
                                <div class="mb-1 pb-1 mr-2">
                                    <i class="bi bi-youtube"></i> Day 1: Prestress Bridge Introduction
                                </div>
                                <div>
                                    1:28:08
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                            2) Provisions in IRC 112, IS 1343 and Freyssinet Manual
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content d-flex justify-content-between">
                                <div class="mb-1 pb-1 mr-2">
                                    <i class="bi bi-youtube"></i> Day 2: IRC 112, IS 1343 and Prestress Manual
                                </div>
                                <div>
                                    1:28:08
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                            3) Cable profiling and stress checks
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content d-flex justify-content-between">
                                <div class="mb-1 pb-1 mr-2">
                                    <i class="bi bi-youtube"></i> Day 3: Cable profiling and stress checks
                                </div>
                                <div>
                                    1:28:08
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                            4) Calculation of Loads and Prestress Losses
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content d-flex justify-content-between">
                                <div class="mb-1 pb-1 mr-2">
                                    <i class="bi bi-youtube"></i> Day 4: Loads and Prestress Losses
                                </div>
                                <div>
                                    1:34:01
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                            5) Detailed design of Cast-in-situ Posttensioned T-girders
                        </div>
                        <!-- <div class="accordion-item-body">
                            <div class="accordion-item-body-content d-flex justify-content-between">
                                <div class="mb-1 pb-1 mr-2">
                                    <i class="bi bi-youtube"></i> Day 1: Prestress Bridge Introduction
                                </div>
                                <div>
                                    1:28:08
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                            6) Drawing detailings and construction challenges
                        </div>
                        <!-- <div class="accordion-item-body">
                            <div class="accordion-item-body-content d-flex justify-content-between">
                                <div class="mb-1 pb-1 mr-2">
                                    <i class="bi bi-youtube"></i> Day 1: Prestress Bridge Introduction
                                </div>
                                <div>
                                    1:28:08
                                </div>
                            </div>
                        </div> -->
                    </div>


                </div>
                <!-- <div class="col-md-6">

                    </div> -->
            </div>
            <h5 class="fw-bold mt-5">About the Instructor</h5>
            <div class="my-4">
                <span class="rounded-circle p-2 bg-primary text-light"> DS</span> <?php echo $det->getEnteredByLabel(); ?>
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div>
                    <i class="bi bi-star text-warning"></i>
                    <i class="bi bi-star text-warning"></i>
                    <i class="bi bi-star text-warning"></i>
                    <i class="bi bi-star text-warning"></i>
                    <i class="bi bi-star text-warning"></i>
                    <span class="text-blue-shade">4.83</span> (18 rating)
                </div>
                <div class="d-flex flex-wrap">
                    <div class="mx-2">
                        <i class="bi bi-mortarboard-fill"></i> 10 Courses
                    </div>
                    <div class="mx-2">
                        <i class="bi bi-person-fill"></i> 134 Students
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4 d-flex justify-content-center mt-5 mx-2" id="course-right">
            <div>
                <div class="courses">
                    <div class="px-2 ftco-animate border">
                        <img src="https://skill-veda.com/wp-content/uploads/2022/07/Hydropower.png" alt="" class="img-fluid">
                        <div class="p-4 ">
                            <p class="text-blue-shade fw-bold">NPR <?php echo $det->getPrice(); ?></p>
                            <h5 class="">Material Includes</h5>
                            <div class="pb-3" style="font-size: 14px;">
                                <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Excel sheets and presentations</div>
                                <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Quiz and homeworks</div>
                                <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Sample design and drawings</div>
                                <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Language: English</div>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary">View Cart</button>
                            </div>
                            <div><i class="bi bi-calendar3 px-2"></i>Enrollment Validity: <span class="text-blue-shade">LifeTime</span></div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <h5 class="">Requirements</h5>
                    <div class="pb-3" style="font-size: 14px;">
                        <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Laptop with good internet</div>
                        <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Microsoft Office</div>
                    </div>
                </div>
                <div class="mt-5">
                    <h5 class="">Target Audience</h5>
                    <div class="pb-3" style="font-size: 14px;">
                        <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Civil and Structural Engineering Professionals</div>
                        <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Government Engineers</div>
                        <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Researchers</div>
                        <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Bridge Design Consultants</div>
                        <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Students</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <hr class="bg-primary"/>
    <div>
        <p class="text-center mt-5 fs-1 text-blue-shade"> Membership </p>
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
                    <p style="font-family:'Taviraj';"><span style="font-size: 18px; color: #535967;">Npr</span> <span style="font-size: 32px; color: #535967;">35000 </span> <span style="font-size: 20px; color: black;"><sub>/ 6 Month</sub></span></p>
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
                    <p style="font-family:'Taviraj';"><span style="font-size: 18px; color: #535967;">Npr</span> <span style="font-size: 32px; color: #535967;">50000 </span> <span style="font-size: 20px; color: black;"><sub>/ 1 Year</sub></span></p>
                    <p> <i class="bi bi-check text-success"></i> One Year membership</p>
                    <p><i class="bi bi-check text-success"></i> Access to all Courses</p>
                    <p><i class="bi bi-check text-success"></i> Live course and New Course</p>
                    <button class="btn btn-primary mt-3 px-5 py-3 ">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <p style="color: #535967; font-size:24px;">Words of People who learned
                expert skills and knowledge and never look back</p>
        </div>
        <section class="mb-5 pb-5">
            <div class="row text-center d-flex align-items-stretch ftco-animate">
                <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
                    <div class="card testimonial-card">
                        <div class="card-up" style="background-color: #9d789b;"></div>
                        <div class="avatar mx-auto bg-white">
                            <img src="https://skill-veda.com/wp-content/uploads/2021/05/circle-cropped-8-1.png" class="rounded-circle img-fluid" />
                        </div>
                        <div class="card-body">
                            <h4 class="fw-bold">Subhuj Khanal</h4>
                            <h6>Master in Structural Engineering</h6>
                            <hr class="bg-primary" />
                            <p class="dark-grey-text mt-4">
                                <i class="bi bi-quote pe-2"></i>The best part of the course by Dynamic Solution was the clear course structure & Brilliant instructor .
                                They really have given best FEM course for Civil Engineers available online.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch ftco-animate">
                    <div class="card testimonial-card">
                        <div class="card-up" style="background-color: #7a81a8;"></div>
                        <div class="avatar mx-auto bg-white">
                            <img src="https://skill-veda.com/wp-content/uploads/2021/05/circle-cropped-9.png" class="rounded-circle img-fluid" />
                        </div>
                        <div class="card-body">
                            <h4 class="fw-bold">Data Gelal</h4>
                            <h6>Master in Structural Engineering</h6>
                            <hr class="bg-primary" />
                            <p class="dark-grey-text mt-4">
                                <i class="bi bi-quote pe-2"></i>Best part is I came to know the start of ANSYS. And the worst part is class is about to end.
                                Dynamic Solution was very effective in delivering course content in given time with efficiency.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-0 d-flex align-items-stretch ftco-animate">
                    <div class="card testimonial-card">
                        <div class="card-up" style="background-color: #6d5b98;"></div>
                        <div class="avatar mx-auto bg-white">
                            <img src="https://skill-veda.com/wp-content/uploads/2021/05/circle-cropped-10.png" class="rounded-circle img-fluid" />
                        </div>
                        <div class="card-body">
                            <h4 class="fw-bold">Mahendra Singh Danga</h4>
                            <h6>Civil Engineer</h6>
                            <hr class="bg-primary" />
                            <p class="dark-grey-text mt-4">
                                <i class="bi bi-quote pe-2"></i>Dynamic solution was supportive and so were trainer.
                                In my first training with Dynamic Solution,
                                I am satisfied with the way they delivered course content.
                                I would love to join more courses in future.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</div>
</div>
</div>

<script>
    const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

    accordionItemHeaders.forEach(accordionItemHeader => {
        accordionItemHeader.addEventListener("click", event => {

            // comment or Uncomment in case you only want to allow for the display of only one collapsed item at a time or many at a time!

            const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
            if (currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader !== accordionItemHeader) {
                currentlyActiveAccordionItemHeader.classList.toggle("active");
                currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
            }

            //upto here
            accordionItemHeader.classList.toggle("active");
            const accordionItemBody = accordionItemHeader.nextElementSibling;
            if (accordionItemHeader.classList.contains("active")) {
                accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
            } else {
                accordionItemBody.style.maxHeight = 0;
            }

        });
    });
</script>
<?php
include 'footer.php'
?>