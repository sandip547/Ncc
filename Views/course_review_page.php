<?php
include 'header.php';
require_once("../Models/RegistrationModels/GetStudentUsername.php");
require_once("../Models/RegistrationModels/GetStudentUsername.php");
require_once("../Models/ProductModels/GetActiveProductDetails.php");
require_once("../Models/ProductModels/ProductGet.php");
require_once ("../Models/Comment/GetUserComments.php");
require_once("../Models/ProductModels/GetTopicReview.php");
require_once("../Controllers/GetDetails/GetProductDetails.php");
require_once("../Controllers/SaveDetails/SaveEnrollmentDetails.php");
require_once("../Controllers/GetDetails/GetCourseTopic.php");
require_once("../Controllers/GetDetails/GetStudentDetails.php");
require_once("../Controllers/GetDetails/GetVideoDetails.php");
require_once("../Controllers/GetDetails/GetEnrollmentDetails.php");
require_once ("../Controllers/Authentication/Encryption.php");
require_once ("../Controllers/GetDetails/GetComments.php");
$sed = new SaveEnrollmentDetails();
$pd = new GetProductDetails();
$gsd = new GetStudentDetails();
$gc = new GetComments();
if(isset($_SESSION['username']) && isset($_GET['course_id'])) {

    if ($pd->getEnrollmentDays($gsd->getStudentIdOn(new GetStudentUserName($_SESSION['username'])), $_GET['course_id']) <= 0) {
        $sed->changeEnrollmentDateNull($gsd->getStudentIdOn(new GetStudentUserName($_SESSION['username'])), $_GET['course_id']);
    }
}
$course_id = isset($_GET['course_id']) ? $_GET['course_id'] : die('Could not find course ID.');

$det=$pd->getProductById($course_id)!=null?$pd->getProductById($course_id):die('Could not find course details.');
$gct = new GetCourseTopic();
$gcv = new GetVideoDetailsCourse();
$ged = new GetEnrollmentDetails();
$encdec= new EncDec();
$status=0;
if(isset($_SESSION['username'])) {
    $status = $ged->checkCourseEnrollStatus($_GET['course_id'], $ged->getStudentIdEnrollment($_SESSION['username']));
}
?>
    <script>

    </script>
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
                                Category
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
                            <?php
                            $req = preg_split("/\r\n|\n|\r/", $det->getLearning());
                            foreach ($req as $a){
                                ?>
                                <div class="p-2"><i class="bi bi-check text-primary fs-5"></i> <span class="text-blue-shade"><?php echo $a; ?></span></div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between mt-5">
                    <h5>Topics for this course</h5>

                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="mx-3"><?php echo $gct->getCourseTopicCount($_GET['course_id']); ?> Lessons</div>
                        <div class="ml-3"><?php echo $gct->getCourseTotalDuration($_GET['course_id']); ?></div>
                    </div>
                </div>
                <div>
                    <div class="accordion">
                        <?php


                        $coursetopics = $gct->getCourseTopicNameReview($_GET['course_id']);

                        foreach ($coursetopics as $coursetopic) {
                            $video = $gcv->getVideoReview($coursetopic->getTopicId());

                            ?>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    <?php echo $coursetopic->getTopicName(); ?>
                                </div>
                                <?php
                                if ($status == 1) {

                                    ?>

                                    <div class="accordion-item-body">
                                        <div class="accordion-item-body-content d-flex justify-content-between">
                                            <div id="player<?php echo $video[0]; ?>">
                                                <script>
                                                    <?php

                                                    $video_id = explode("?v=", $video[1]);
                                                    $video_id = $video_id[1];

                                                    ?>

                                                </script>
                                                <iframe id="player" type="text/html" width="640" height="390" controls="0"
                                                        src="http://www.youtube.com/embed/watch?v=<?php echo $video_id; ?>?controls=0' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen"
                                                       ></iframe>



                                                <br>
                                                <i class="bi bi-youtube"></i>  <?php echo $video[2]; ?>
                                            </div>
                                            <div>
                                                <?php echo $coursetopic->getTopicDuration(); ?>
                                            </div>


                                        </div>


                                    </div>
                                    <?php
                                }
                                ?>

                            </div>
                            <?php

                        }
                        ?>

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
                            <img src="Views/<?php echo $det->getImage(); ?>" alt="" class="img-fluid">
                            <div class="p-4 ">
                                <p class="text-blue-shade fw-bold">NPR <?php echo $det->getPrice(); ?></p>
                                <h5 class="">Material Includes</h5>
                                <div class="pb-3" style="font-size: 14px;">
                                    <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Videos for Course</div>
                                    <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Continious Support</div>
                                    <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Sample design and drawings</div>
                                    <div><i class="bi bi-check fs-5 px-1 text-primary"></i>Language: English</div>
                                </div>
                                <div class="d-grid gap-2">
                                    <a href="cart" class="btn btn-primary">View Cart</a>
                                </div>
                                <div> <i class="bi bi-calendar3 px-1"></i>Enrollment Validity: <span class="text-blue-shade"><?php echo $pd->getEnrollmentValidityName($det->getEnrollmentValidity()); ?></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h5 class="">Requirements</h5>
                        <div class="pb-3" style="font-size: 14px;">
                            <?php
                            $req = preg_split("/\r\n|\n|\r/", $det->getRequirements());
                            ?>
                            <div><?php foreach ($req as $a){ echo "<i class='bi bi-check fs-5 px-1 text-primary'></i>".$a;} ?></div>

                        </div>
                    </div>
                    <div class="mt-5">
                        <h5 class="">Target Audience</h5>
                        <div class="pb-3" style="font-size: 14px;">
                            <?php
                            $ta = preg_split("/\r\n|\n|\r/", $det->getTargetAudience());
                            ?>
                            <div><?php foreach ($ta as $a){ echo "<i class='bi bi-check fs-5 px-1 text-primary'></i>".$a;} ?></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr class="bg-primary"/>


        <div class="text-center mt-5">
            <p style="color: #535967; font-size:24px;">Words of People who learned
                expert skills and knowledge and never look back</p>
        </div>
        <section class="mb-5 pb-5">
            <div class="row text-center d-flex align-items-stretch ftco-animate">
        <?php
        $comments = $gc->getCourseComments($_GET['course_id']);
        foreach ($comments as $comment) {
            ?>
                <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch" >

                    <div class="card testimonial-card">
                        <div class="card-up" style="background-color: #9d789b;"></div>
                        <div class="avatar mx-auto bg-white">
                            <img src="<?php echo $comment->getProfileImage(); ?>" class="rounded-circle img-fluid" />
                        </div>
                        <div class="card-body">
                            <h4 class="fw-bold"><?php echo $comment->getFullName(); ?></h4>

                            <hr class="bg-primary" />
                            <p class="dark-grey-text mt-4">
                                <i class="bi bi-quote pe-2"></i><?php echo $comment->getComment(); ?>
                                <i class="bi bi-quote pe-2"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <?php

                }
                ?>


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