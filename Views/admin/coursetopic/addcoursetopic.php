<?php
require_once("../../Controllers/GetDetails/GetCourseTopic.php");
$gct =  new GetCourseTopic();
?>


<form action="coursetopic.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6 my-3">
            <label for="level" class="form-label text-blue-shade">Course Name</label>
            <select name="coursename" id="level" class="form-select form-select-lg inputcolor fs-6" required>
                <option value="na">
                    Select course level
                </option>
                <?php
                $courselist = $gct->getCourseNames();
                foreach($courselist as $course){
                ?>
                <option value="<?php echo $course->getProductId(); ?>">
                <?php echo $course->getProductName(); ?>
                </option>
                <?php
                }
                ?>

            </select>
        </div>
        <div class="col-md-6 my-3">
            <label for="Price" class="form-label text-blue-shade">Sr Number</label>
            <input type="number" id="price" class="form-control inputcolor fs-6" name="snumber" placeholder="Serial Number"
                   aria-label="Price" required>
        </div>
        <div class="col-md-6 my-3">
            <label for="Price" class="form-label text-blue-shade">Topic Name</label>
            <input type="text" id="price" class="form-control inputcolor fs-6" name="tname" placeholder="Topic Name"
                   aria-label="Price" required>
        </div>
        <div class="col-md-6 my-3">
            <label for="duration" class="form-label text-blue-shade">Duration (in hour)</label>
            <div id="time-span" class="form-control inputcolor fs-6 align-items-center d-flex">
                <input type="text" class="form-control inputcolor fs-6" name="cduration" placeholder="hour:min:sec" required/>

            </div>
        </div>
        <div class="text-left my-3">
            <button class="btn bg-primary text-light font-weight-bold px-5" name="addTopic" style="border-radius:4px;"
                    type="submit">Add CourseTopic</button>
        </div>

</form>