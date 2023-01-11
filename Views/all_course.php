<?php
include 'header.php';
require_once("../Controllers/GetDetails/GetProductDetails.php");
require_once("../Models/ProductModels/ProductDisplay.php");
require_once("../DatabaseConnection/DatabaseConnection.php");
$gp = new GetProductDetails();
$res =$gp->getProductDisplayDetails();


?>
    <script>
        function getSearchTopic(course_name)
        {

            var html = $.ajax({
                type: "POST",
                url: "GetSearchResult.php",
                data: "course_name="+course_name ,
                async: false
            }).responseText;
            if(html){
                $("#search_name").html(html).show();
            }
        }

    </script>
<!-- All course page -->
<div class="col-md-10 m-auto">
    <div class="d-flex flex-wrap">
        <div class="col-md-3">
            <div class="row">
                <div class="input-group pr-5 py-5">
                    <!-- <div class="form-outline"> -->
                    <input type="search" onchange="getSearchTopic(this.value)" name="course_name" id="course_name" class="form-control" />
            <div style="position:relative;" id="search_name">

            </div>
                    <button type="button" class="bg-primary text-light px-3" style="border: none;">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
            <div>
                <div class="mb-2">
                    <h5>Category</h5>
                    <div>
                        <input type="checkbox" class="mr-3" />
                        <label class="form-label" for="form1">Civil Engineering</label>
                    </div>
                </div>
                <div class="mb-2">
                    <h5>Tag</h5>
                    <div>
                        <input type="checkbox" class="mr-3" />
                        <label class="form-label" for="form1">English</label>
                    </div>
                    <div>
                        <input type="checkbox" class="mr-3" />
                        <label class="form-label" for="form1">Nepali</label>
                    </div>

                    <div>
                        <input type="checkbox" class="mr-3" />
                        <label class="form-label" for="form1">Recorded Class</label>
                    </div>
                </div>
                <div class="mb-2">
                    <h5>Level</h5>
                    <div>
                        <input type="checkbox" class="mr-3" />
                        <label class="form-label" for="form1">Beginner</label>
                    </div>
                    <div>
                        <input type="checkbox" class="mr-3" />
                        <label class="form-label" for="form1">Intermediate</label>
                    </div>
                    <div>
                        <input type="checkbox" class="mr-3" />
                        <label class="form-label" for="form1">Expert</label>
                    </div>
                </div>
                <div class="mb-2">
                    <h5>Price</h5>
                    <div>
                        <input type="checkbox" class="mr-3" />
                        <label class="form-label" for="form1">Free</label>
                    </div>
                    <div>
                        <input type="checkbox" class="mr-3" />
                        <label class="form-label" for="form1">Paid</label>
                    </div>
                </div>
            </div>

        </div>
        <div class="row col-md-9">
            <div class="d-flex flex-wrap justify-content-between my-4 px-2">
                <div>
                    <select name="displayname" id="displayname" class="form-select">
                        <option value="n-first">
                            Release Date (newest first)
                        </option>
                        <option value="o-first">
                            Release Date (oldest first)
                        </option>
                        <option value="a-z">
                            Course Title (A-Z)
                        </option>
                        <option value="z-a">
                            Course Title (Z-A)
                        </option>
                    </select>
                </div>
                <div>
                    <?php echo $gp->getCourseCount();?> courses
                </div>
            </div>
            <hr class="bg-primary" />
            <div class="courses">
            <?php
                foreach ($res as $product){

            ?>
                <div class="px-2 ftco-animate border">
                    <div class="" style="transform: translate(0%, -3%);">

                        <div>
                            <div class="d-flex justify-content-between px-3" style="bottom:100%; transform: translate(0%, 150%);">
                                <div class="bg-primary text-light p-1 rounded-1"><?php echo $product->getLevel();  ?></div>
                                <i class="bi bi-bookmark"></i>
                            </div>
                            <img src="Views/<?php echo $product->getImage(); ?>" alt="" class="img-fluid" height="250px">
                        </div>

                        <p class="fs-5"><a href="course_review_page.php?course_id=<?php echo $product->getProductId(); ?>"><?php echo $product->getProductName();?></a></p>
                        <p> <i class="bi bi-person"></i> <?php echo $product->getDuration();?> <i class="bi bi-clock"></i> 18h</p>


                        <hr class="bg-primary" />
                        <div class="fw-bold d-flex justify-content-between">
                            <div>NPR <?php echo $product->getPrice(); ?></div>
                            <div> <a href="cart.php?course_id=<?php echo $product->getProductId(); ?>&course_name=<?php echo $product->getProductName();?>&course_price=<?php echo $product->getPrice(); ?>"<i class="bi bi-cart3"></i> Enroll</a></div>
                        </div>
                    </div>
                </div>

                    <?php
                }
                    ?>

            </div>
            <nav aria-label="Page navigation example" class="my-5">
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
<?php
include 'footer.php'
?>