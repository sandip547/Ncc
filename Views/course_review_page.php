<?php
include 'header.php';
require_once("../Models/RegistrationModels/GetStudentUsername.php");
require_once("../Models/ProductModels/GetActiveProductDetails.php");
require_once("../Models/ProductModels/ProductGet.php");
require_once("../Models/ProductModels/GetTopicReview.php");
require_once("../Controllers/GetDetails/GetProductDetails.php");
require_once("../Controllers/GetDetails/GetCourseTopic.php");
require_once("../Controllers/GetDetails/GetVideoDetails.php");
require_once("../Controllers/GetDetails/GetEnrollmentDetails.php");
require_once ("../Controllers/Authentication/Encryption.php");

$course_id = isset($_GET['course_id']) ? $_GET['course_id'] : die('Could not find course ID.');
$pd = new GetProductDetails();
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
                                <div id="player<?php echo $video[0];?>" class="mb-1 pb-1 mr-2">

                                        <?php $convertedURL = str_replace("watch?v=","embed/", $video[1]);?>
                                    <script>
                                        function YouTubeGetID(url){
                                            url = url.split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
                                            return (url[2] !== undefined) ? url[2].split(/[^0-9a-z_\-]/i)[0] : url[0];
                                        }
                                        // 2. This code loads the IFrame Player API code asynchronously.
                                        var tag = document.createElement('script');

                                        tag.src = "https://www.youtube.com/iframe_api";
                                        var firstScriptTag = document.getElementsByTagName('script')[0];
                                        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                                        // 3. This function creates an <iframe> (and YouTube player)
                                        //    after the API code downloads.
                                        var player;
                                        var videoid = <?php $enc = $encdec->encrypt(json_encode($video[1]));echo $enc; ?>;
                                        <?php $dec = $encdec->decrypt($enc);?>

                                        function onYouTubeIframeAPIReady() {
                                            player = new YT.Player('player<?php echo $video[0];?>', {
                                                height: '390',
                                                width: '640',
                                                videoId: YouTubeGetID('<?= $dec ?>')),
                                                playerVars: {
                                                    'playsinline': 1
                                                },
                                                events: {
                                                    'onReady': onPlayerReady,
                                                    'onStateChange': onPlayerStateChange
                                                }
                                            });
                                        }

                                        // 4. The API will call this function when the video player is ready.
                                        function onPlayerReady(event) {
                                            event.target.playVideo();
                                        }

                                        // 5. The API calls this function when the player's state changes.
                                        //    The function indicates that when playing a video (state=1),
                                        //    the player should play for six seconds and then stop.
                                        var done = false;
                                        function onPlayerStateChange(event) {
                                            if (event.data == YT.PlayerState.PLAYING && !done) {
                                                setTimeout(stopVideo, 0);
                                                done = true;
                                            }
                                        }
                                        function stopVideo() {
                                            player.stopVideo();
                                        }
                                    </script><br>
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