<?php
$page = 'enrolledStudentList';
include 'admin header.php';
require_once("../../Models/ProductModels/GetProductIdName.php");
require_once ("../../Models/Enrollment/GetStudentIdName.php");
require_once ("../../Models/Enrollment/GetFullEnrollmentDetails.php");
require_once ("../../Controllers/GetDetails/GetEnrollmentDetails.php");
require_once("../../Controllers/GetDetails/GetCourseTopic.php");
$gct =  new GetCourseTopic();
$ged = new GetEnrollmentDetails();
$edetails = $ged->getStudentDetailsForEnrollMent();

?>
    <script>
        function getTopic(course_id)
        {
            var html = $.ajax({
                type: "POST",
                url: "EnrolledStudentEmailList.php",
                data: "course_id="+course_id ,
                async: false
            }).responseText;
            if(html){
                $("#emaillist").html(html);
            }
        }

    </script>
    <div class="text-justify p-0 m-0 ml-4 course-info">

        <div class="row">
            <div class="col-md-6 my-3">
                <label for="level" class="form-label text-blue-shade">Course Name</label>
                <select id="course_id" onchange="getTopic(this.value)" name="coursename"  class="form-select form-select-lg inputcolor fs-6" required>
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
            <div class="table-responsive my-5">

                <table class="table table-bordered table-hover table-sm text-normal">
                    <thead class="thead-light">
                    <tr class="text-center">
                        <th>Student Id</th>
                        <th>Student Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody id="emaillist">

                    </tbody>
                </table>
                </div>
    </div>

</div>
</div>
</div>





<?php
include 'footer.php'
?>