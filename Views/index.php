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

            <img src="http://localhost/nccengineering/<?php echo $det->getImage(); ?>" alt="" class="img-fluid">
            <i class="bi bi-star text-warning"></i>
            <i class="bi bi-star text-warning"></i>
            <i class="bi bi-star text-warning"></i>
            <i class="bi bi-star text-warning"></i>
            <i class="bi bi-star text-warning"></i>

            <p class="fs-5"><a href="#"><?php echo $det->getProductName(); ?></a></p>
            <p> <i class="bi bi-person"></i> 6 <i class="bi bi-clock"></i> <?php echo $det->getDuration(); ?></p>
            <p> <span class="rounded-circle p-1 bg-primary text-light"> DS</span> by Dynamic Solution</p>
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
        <a class="rounded-pill text-white btn btn-primary py-3 px-4 mt-4">VIEW ALL COURSES</a>
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

        <div class="text-center mt-5">
            <p style="color: #535967; font-size:24px;">Words of People who learned
                expert skills and knowledge and never look back</p>
        </div>
        <section>
            <div class="row text-center d-flex align-items-stretch ftco-animate">
                <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
                    <div class="card testimonial-card">
                        <div class="card-up" style="background-color: #9d789b;"></div>
                        <div class="avatar mx-auto bg-white">
                            <img src="https://skill-veda.com/wp-content/uploads/2021/05/circle-cropped-8-1.png"
                                class="rounded-circle img-fluid" />
                        </div>
                        <div class="card-body">
                            <h4 class="fw-bold">Subhuj Khanal</h4>
                            <h6>Master in Structural Engineering</h6>
                            <hr class="bg-primary" />
                            <p class="dark-grey-text mt-4">
                                <i class="bi bi-quote pe-2"></i>The best part of the course by Dynamic Solution was the
                                clear course structure & Brilliant instructor .
                                They really have given best FEM course for Civil Engineers available online.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch ftco-animate">
                    <div class="card testimonial-card">
                        <div class="card-up" style="background-color: #7a81a8;"></div>
                        <div class="avatar mx-auto bg-white">
                            <img src="https://skill-veda.com/wp-content/uploads/2021/05/circle-cropped-9.png"
                                class="rounded-circle img-fluid" />
                        </div>
                        <div class="card-body">
                            <h4 class="fw-bold">Data Gelal</h4>
                            <h6>Master in Structural Engineering</h6>
                            <hr class="bg-primary" />
                            <p class="dark-grey-text mt-4">
                                <i class="bi bi-quote pe-2"></i>Best part is I came to know the start of ANSYS. And the
                                worst part is class is about to end.
                                Dynamic Solution was very effective in delivering course content in given time with
                                efficiency.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-0 d-flex align-items-stretch ftco-animate">
                    <div class="card testimonial-card">
                        <div class="card-up" style="background-color: #6d5b98;"></div>
                        <div class="avatar mx-auto bg-white">
                            <img src="https://skill-veda.com/wp-content/uploads/2021/05/circle-cropped-10.png"
                                class="rounded-circle img-fluid" />
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
        <div class="text-center p-sm-3 m-sm-3 pt-4 mt-4 mb-4">
            <p style=" font-size:24px; color: #535967;">Registration Process for Student Sign up</p>
        </div>
        <div class="d-flex text-center justify-content-center">
            <div class="embed-responsive embed-responsive-16by9" style="width: 80%;">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                    allowfullscreen></iframe>
            </div>
        </div>

        <div class="text-center py-sm-5 my-sm-4 pt-4 mt-4 ">
            <p style=" font-size:24px; color: #535967;">Visit our blog to be updated with latest tips, news and course
            </p>
        </div>

        <div class="row d-flex text-center">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="#" class="block-20 hover-zoom" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <p>
                            <span>Posted on </span><span class="text-primary">July 22, 2021</span>
                        </p>
                        <h3 class="heading"><a href="#">Bridge Failures in Nepal: Diagnosis and Solutions for Design</a>
                        </h3>
                        <p>Development of road networks and bridges in Nepal started around sixty years.....
                            <a href="#">See more</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="#" class="block-20 hover-zoom" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <p>
                            <span>Posted on </span><span class="text-primary">July 22, 2021</span>
                        </p>
                        <h3 class="heading"><a href="#">SOLID WASTE PROBLEM & MANAGEMENT IN KATHMANDU</a></h3>
                        <p>Introduction Solid waste management is a common problem is most of the developing.....
                            <a href="#">See more</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="#" class="block-20 hover-zoom" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <p>
                            <span>Posted on </span><span class="text-primary">July 22, 2021</span>
                        </p>
                        <h3 class="heading"><a href="#">Base Isolation</a></h3>
                        <p>What is Base isolation? Base isolation is a state-of-the-art method
                            in which the structure (superstructure) is.....
                            <a href="#">See more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
<?php
include 'footer.php'
?>