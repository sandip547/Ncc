
<?php
require_once("../../Controllers/GetDetails/GetCourseTopic.php");
$gct =  new GetCourseTopic();

?>

<script>
    function getTopic(course_id)
    {
        var html = $.ajax({
            type: "POST",
            url: "CourseTopicName.php",
            data: "course_id="+course_id ,
            async: false
        }).responseText;
        if(html){
            $("#course_topic").html(html);
        }
    }

</script>
<form action="video.php" method="post" enctype="multipart/form-data">
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
        <div class="col-md-6 my-3">
            <label for="level" class="form-label text-blue-shade">Topic Name</label>
            <select  id="course_topic" name="course_topic"  class="form-select form-select-lg inputcolor fs-6" required>

            </select>
        </div>

        <div class="col-md-6 my-3">
            <label for="Price" class="form-label text-blue-shade">Link</label>
            <input type="text" id="vlink" class="form-control inputcolor fs-6" name="vlink" placeholder="Video Link"
                   aria-label="Vlink" required>
        </div>

        <div class="col-md-6 my-3">
            <label for="duration" class="form-label text-blue-shade">Video Details</label>

                <input type="text" class="form-control inputcolor fs-6" name="vdetails" id="vdetails" placeholder="Video Details" required/>


        </div>
        <div class="text-left my-3">
            <button class="btn bg-primary text-light font-weight-bold px-5" name="addVideo" style="border-radius:4px;"
                    type="submit">Add Video</button>
        </div>

</form>