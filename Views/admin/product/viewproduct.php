<?php


$pd = new GetProductDetails();
$details = $pd->getProductDetails();

?>
<div class="input-group my-5">
    <input type="search" id="form1" class="form-control fs-6" placeholder="Search by id or name..." />
    <button type="button" class="bg-primary text-light px-3" style="border: none;">
        <i class="bi bi-search"></i>
    </button>
</div>


<div class="card">
    <div class="card-header">
        <p class="h5 text-dark font-weight-bold">Product details</p>
    </div>
</div>

<div class="table-responsive my-5">
    <table class="table table-bordered table-hover table-sm text-normal">
        <thead class="thead-light">
            <tr class="text-center">
                <th></th>
                <th></th>
                <th>ID</th>
                <th>Image</th>
                <th>Course name</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Enrollment Validity</th>
                <th>Level</th>
                <th>Description</th>
                <th>Target Audience</th>
                <th>Course Learning</th>
                <th>Course Requirements</th>
                <th>Tag</th>
                <th>Release Date</th>
                <th>Entered Date</th>
                <th>Entered By</th>
                <th>Update date</th>
                <th>Updated by</th>
                <th>Active Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($details as $det) { ?>
                <tr>
                    <th class="px-3">

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong<?php echo $det->getProductId(); ?>">Edit</button>
                    </th>
                    <th class="px-3">
                        <a type="button" class="btn btn-primary"
                           href="product.php?productid=<?php echo $det->getProductId();?>&delete=10">Delete</a>
                    </th>
                    </th>
                    <th class="px-3"><?php echo $det->getProductId(); ?></th>
                    <th class="px-3"><img src="<?php echo $det->getImage() ?>" height="100px" width="100px" alt="" class="img-fluid"></th>
                    <th class="px-3"><?php echo $det->getProductName(); ?></th>
                    <th class="px-3"><?php echo $det->getDuration(); ?></th>
                    <th class="px-3">NPR <?php echo $det->getPrice(); ?></th>
                    <th class="px-3"><?php echo $pd->getEnrollmentValidityName($det->getEnrollmentValidity()); ?></th>
                    <th class="px-3"><?php echo $pd->getLevel($det->getLevel()); ?></th>
                    <th class="px-3"><?php echo $det->getDescription(); ?></th>
                    <th class="px-3"><?php echo $det->getTargetAudience(); ?></th>
                    <th class="px-3"><?php echo $det->getLearning(); ?></th>
                    <th class="px-3"><?php echo $det->getRequirements(); ?></th>
                    <th class="px-3"><?php echo $det->getTag(); ?></th>
                    <th class="px-3"><?php echo $det->getReleaseDateLabel(); ?></th>
                    <th class="px-3"><?php echo $det->getEnteredDate(); ?></th>
                    <th class="px-3"><?php echo $det->getEnteredByLabel(); ?></th>
                    <th class="px-3"><?php echo $det->getUpdateDate(); ?></th>
                    <th class="px-3"><?php echo $det->getUpdatedByLabel(); ?></th>
                    <th class="px-3"><?php echo $det->getActiveStatusLabel(); ?></th>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</div>

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

<?php foreach ($details as $det) { ?>


    <div class="modal fade" id="exampleModalLong<?php echo $det->getProductId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Course details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="product.php" method="post"  enctype="multipart/form-data">
                        <div class="row align-items-center my-2">

                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="courseName" class="form-label">Course Id : </label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="cid" class="form-control inputcolor fs-6" name="courseName" placeholder="Course name" aria-label="courseName" id="courseName" value="<?php echo $det->getProductId(); ?>" readonly>
                            </div>
                        </div>

                        <div class="row align-items-center my-2">

                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="courseName" class="form-label">Course name : </label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="course_name" class="form-control inputcolor fs-6" name="courseName" placeholder="Course name" aria-label="courseName" id="courseName" value="<?php echo $det->getProductName(); ?>">
                            </div>
                        </div>
                        <div class="row align-items-center my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="duration" class="form-label ">Duration : </label>
                            </div>
                            <div class="col-md-7">
                                <div id="time-span" class="form-control inputcolor fs-6 align-items-center d-flex">
                                    <input type="text" name="course_duration" class="col-md-6 col-sm-6 border-0 rounded-2" value="<?php echo $det->getDuration(); ?>" placeholder="hour" />

                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="Price" class="form-label ">Price : </label>
                            </div>
                            <div class="col-md-7">

                                <input type="number" id="price" name="course_price" class="form-control inputcolor fs-6" value="<?php echo $det->getPrice(); ?>" placeholder="Price" aria-label="Price">
                            </div>
                        </div>
                        <div class="row align-items-center my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="enrollmentValidity" class="form-label ">Enrollment Validity (0 for lifetime) :
                                </label>
                            </div>
                            <div class="col-md-7">
                                <select name="course_validity" id="course_validity" class="form-select form-select-lg inputcolor fs-6">
                                    <option value="na">
                                        Select Enrollment Validity
                                    </option>
                                    <option value="0">
                                        Lifetime
                                    </option>
                                    <option value="1">
                                        3 Months
                                    </option>
                                    <option value="2">
                                        6 Months
                                    </option>
                                    <option value="3">
                                        12 Months
                                    </option>

                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="level" class="form-label ">Level : </label>
                            </div>
                            <div class="col-md-7">
                                <select name="course_level" id="course_level" class="form-select form-select-lg inputcolor fs-6">
                                    <option value="<?php echo $det->getLevel(); ?>">
                                        <?php echo $pd->getLevel($det->getLevel()); ?>
                                    </option>
                                    <option value="0">
                                        Beginner
                                    </option>
                                    <option value="1">
                                        Intermediate
                                    </option>
                                    <option value="2">
                                        Advanced
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="activeStatus" class="form-label ">Active Status : </label>
                            </div>
                            <div class="col-md-7 ">
                                <select name="active_status" id="activeStatus" class="form-select form-select-lg inputcolor fs-6">
                                    <option value="<?php echo $det->getActiveStatus(); ?>">
                                        <?php echo $pd->getStatusName($det->getActiveStatus()); ?>
                                    </option>
                                    <option value="1">
                                        Active
                                    </option>
                                    <option value="2">
                                        Not Active
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="description" class="form-label ">Description : </label><br>
                            </div>
                            <div class="col-md-7">
                                <textarea name="description" id="description" rows="4" class="col-md-12" placeholder="Write course description here..."><?php echo $det->getDescription(); ?></textarea>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="targetAudience" class="form-label ">Target Audience : </label><br>
                            </div>
                            <div class="col-md-7">
                                <textarea name="targetaudience" id="targetAudience" value="" rows="4" class="col-md-12" placeholder="Write course target audience here..."><?php echo $det->getTargetAudience(); ?></textarea>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="learning" class="form-label ">Course Learning : </label><br>
                            </div>
                            <div class="col-md-7">
                                <textarea name="learning" id="learning" value="" rows="4" class="col-md-12" placeholder="Write course learning here..."><?php echo $det->getLearning(); ?></textarea>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="requirements" class="form-label ">Course Requirements : </label><br>
                            </div>
                            <div class="col-md-7">
                                <textarea name="requirements" id="requirements" value="" rows="4" class="col-md-12" placeholder="Write course requirements here..."><?php echo $det->getRequirements(); ?></textarea>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="my-3">
                                <label for="requirements" class="form-label text-blue-shade">Upload Image</label><br>
                                <input type="file" name="productImage" class="form-control" id="customFile"  />
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

    <script>

    </script>

<?php
}
?>

<!-- <p class="h5 text-dark font-weight-bold">Product details</p>

    <div class="row align-items-center my-2">
    <div class="col-md-5 text-orangered font-weight-bold fs-6">
        <label for="courseName" class="form-label">Course name : </label>
    </div>
    <div class="col-md-7">
        <input type="text" class="form-control inputcolor fs-6" placeholder="Course name" aria-label="courseName" id="courseName" value="Course name">
    </div>
    </div>
    <div class="row align-items-center my-2">
    <div class="col-md-5 text-orangered font-weight-bold fs-6">
        <label for="duration" class="form-label ">Duration (in hour) : </label>
    </div>
    <div class="col-md-7">
        <div id="time-span" class="form-control inputcolor fs-6 align-items-center d-flex">
            <input type="number" min="0" step="1" class="col-md-3 col-sm-3 border-0 rounded-2" placeholder="hour" /> <span> &nbsp;:&nbsp; </span><input type="number" min="0" max="59" class="col-md-3 col-sm-3 border-0 rounded-2" placeholder="min" />
        </div>
    </div>
    </div>
    <div class="row align-items-center my-2">
    <div class="col-md-5 text-orangered font-weight-bold fs-6">
        <label for="Price" class="form-label ">Price : </label>
    </div>
    <div class="col-md-7">

        <input type="number" id="price" class="form-control inputcolor fs-6" placeholder="Price" aria-label="Price">
    </div>
    </div>
    <div class="row align-items-center my-2">
    <div class="col-md-5 text-orangered font-weight-bold fs-6">
        <label for="enrollmentValidity" class="form-label ">Enrollment Validity (0 for lifetime) : </label>
    </div>
    <div class="col-md-7">
        <input type="number" id="enrollmentValidity" class="form-control inputcolor fs-6" placeholder="Enrollment Validity (in years)" aria-label="Enrollment Validity">
    </div>
    </div>
    <div class="row align-items-center my-2">
    <div class="col-md-5 text-orangered font-weight-bold fs-6">
        <label for="level" class="form-label ">Level : </label>
    </div>
    <div class="col-md-7">
        <select name="level" id="level" class="form-select form-select-lg inputcolor fs-6">
            <option value="na">
                Select course level
            </option>
            <option value="male">
                Begineer
            </option>
            <option value="female">
                Intermediate
            </option>
            <option value="other">
                Advanced
            </option>
        </select>
    </div>
    </div>
    <div class="row align-items-center my-2">
    <div class="col-md-5 text-orangered font-weight-bold fs-6">
        <label for="activeStatus" class="form-label ">Active Status : </label>
    </div>
    <div class="col-md-7 ">
        <select name="activeStatus" id="activeStatus" class="form-select form-select-lg inputcolor fs-6">
            <option value="Active">
                Active
            </option>
            <option value="Not Active">
                Not Active
            </option>
        </select>
    </div>
    </div>
    <div class="row my-2">
    <div class="col-md-5 text-orangered font-weight-bold fs-6">
        <label for="description" class="form-label ">Description : </label><br>
    </div>
    <div class="col-md-7">
        <textarea name="description" id="description" rows="4" class="col-md-12" placeholder="Write course description here..."></textarea>
    </div>
    </div>
    <div class="row my-2">
    <div class="col-md-5 text-orangered font-weight-bold fs-6">
        <label for="targetAudience" class="form-label ">Target Audience : </label><br>
    </div>
    <div class="col-md-7">
        <textarea name="targetAudience" id="targetAudience" rows="4" class="col-md-12" placeholder="Write course target audience here..."></textarea>
    </div>
    </div>
    <div class="row my-2">
    <div class="col-md-5 text-orangered font-weight-bold fs-6">
        <label for="learning" class="form-label ">Course Learning : </label><br>
    </div>
    <div class="col-md-7">
        <textarea name="learning" id="learning" rows="4" class="col-md-12" placeholder="Write course learning here..."></textarea>
    </div>
    </div>
    <div class="row my-2">
    <div class="col-md-5 text-orangered font-weight-bold fs-6">
        <label for="requirements" class="form-label ">Course Requirements : </label><br>
    </div>
    <div class="col-md-7">
        <textarea name="requirements" id="requirements" rows="4" class="col-md-12" placeholder="Write course requirements here..."></textarea>
    </div>
    </div>

<div class="text-center my-3">
    <button class="btn bg-primary text-light font-weight-bold px-5" style="border-radius:4px;" type="submit">Update Course</button>
</div> -->